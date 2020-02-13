<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class createNotifications implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $today = date('Y-m-d');

        //Cumpleaños Cliente
        $Clients = Client::whereMonth('birth_date', '=',date('m',strtotime($today)))->whereDay('birth_date','=',date('d',strtotime($today)))->get();
        foreach($Clients as $Client){

            $Notification = Notification::where('notificationTypeId',1)->where('clientId',$Client->id)->where('date',$today)->first();

            if($Notification == null){
                $NewNotification = new Notification;
                $NewNotification->text = "Cumpleaños de " . $Client->first_name . " " . $Client->last_name . ". Deséale un feliz cumpleaños.";
                $NewNotification->date = $today;
                $NewNotification->notificationTypeId = 1;
                $NewNotification->clientId = $Client->id;
                $NewNotification->save();
            }
        }

        //Cumpleaños Mascotas
        $Pets = Pet::whereMonth('birth_date', '=',date('m',strtotime($today)))->whereDay('birth_date','=',date('d',strtotime($today)))->get();
        foreach($Pets as $Pet){

            $Notification = Notification::where('notificationTypeId',2)->where('petId',$Pet->id)->where('date',$today)->first();

            if($Notification == null){
                $NewNotification = new Notification;
                $NewNotification->text = "Cumpleaños de " . $Pet->name . ", mascota de " . $Pet->client->first_name . " " . $Pet->client->last_name .  ". Envíale una promoción.";
                $NewNotification->date = $today;
                $NewNotification->notificationTypeId = 2;
                $NewNotification->petId = $Pet->id;
                $NewNotification->save();
            }
        }

        //Inactividad en clientes
        $Inactividad = Setting::where('name','Cliente_Inactivo')->first()->value;
        $Clients = Client::with('pets')->get();
        $InactiveClients = [];

        foreach($Clients as $Client){
            $petIds= [];
            foreach($Client->pets as $pet){
                $petIds[] = ["Id" => $pet->id];
            }

            $Appointment = Appointment::whereIn('petId', $petIds)
            ->orderBy('date','desc')
            ->first();


            $now = time(); // or your date as well
            $datediff = $now - strtotime($Appointment->date);
            $datediff =  round($datediff / (60 * 60 * 24));

            if($datediff >= $Inactividad){
                $InactiveClients[] = ['id' => $Client->id, 'name' => $Client->first_name . " " . $Client->last_name, 'InactiveDays' => $datediff];
            }
        }

        foreach($InactiveClients as $Client){
            $Notification = Notification::where('notificationTypeId',3)->where('clientId',$Client['id'])->where('date',$today)->first();

            if($Notification == null){
                $NewNotification = new Notification;
                $NewNotification->text = "La(s) mascota(s) de " . $Client['name'] . " no han tenido servicios desde hace " . $Client['InactiveDays'] ." días. Te sugerimos ofrecer una cita.";
                $NewNotification->date = $today;
                $NewNotification->notificationTypeId = 3;
                $NewNotification->clientId = $Client['id'];
                $NewNotification->save();
            }
        }


        //Seguimiento Mascotas
        $Seguimiento = Setting::where('name','Mascota_Seguimiento')->first()->value;
        $SeguimientoPets = [];

        $Pets = Pet::all();

        foreach($Pets as $Pet){
            $Appointment = Appointment::where('petId',$Pet->id)
            ->orderBy('date','desc')
            ->first();

            if($Appointment!=null){
                $now = time(); // or your date as well
                $datediff = $now - strtotime($Appointment->date);
                $datediff =  round($datediff / (60 * 60 * 24));

                if($datediff >= $Seguimiento){
                    $SeguimientoPets[] = ['id' => $Pet->id, 'name' => $pet->name, 'Days' => $datediff, 'owner' => $Pet->client->first_name . " " . $Pet->client->last_name];
                }
            }
        }

        foreach($SeguimientoPets as $Pet){
            $Notification = Notification::where('notificationTypeId',4)->where('petId',$Pet['id'])->where('date',$today)->first();

            if($Notification == null){
                $NewNotification = new Notification;
                $NewNotification->text = $Pet['name'] . " requiere seguimiento. Su última cita fue hace " . $Pet['Days'] ." días. Te sugerimos contactar a " . $Pet['owner'] . ".";
                $NewNotification->date = $today;
                $NewNotification->notificationTypeId = 4;
                $NewNotification->petId = $Pet['id'];
                $NewNotification->save();
            }
        }

        $NewNotification = new Notification;
        $NewNotification->text = "Notificacion ejecutada correctamente hoy " . $today;
        $NewNotification->date = $today;
        $NewNotification->notificationTypeId = 4;
        $NewNotification->save();

        return "Job ejecutado correctamente";

    }
}
