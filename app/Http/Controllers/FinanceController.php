<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Client;
use App\Finance;
use App\Pet;
use App\User;
use DB;

use Illuminate\Http\Request;

class FinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $finances = Finance::orderBy('date','Asc')->get();

        foreach ($finances as $finance){
            if($finance->appointmentId != null && $finance->appointmentId != ""){
                $client = $finance->Appointment->pet->client;
                $finance['client'] = $client->first_name . " " . $client->last_name;
            }
        }


        $data['finances'] = $finances;
        return view('office/finances/index', $data);
    }

    public function show($id)
    {
        //$card = Client::findOrFail($id);
        //$data['card'] = $card;
        //return view('card.show', $data);
        return view('office/finances/show');
    }


    public function create(Request $Request)
    {

        if(isset($Request->appointmentid)){
            $data['appointmentId'] = $Request->appointmentid;
            $data['date'] = Appointment::find($Request->appointmentid)->select('date')->first()->date;
        }

        $data['appointments'] = Appointment::get();
        return view('office/finances/create', $data);
    }

    public function store(Request $request){
        $Finance = new Finance();

        $Finance->type = $request->type;
        $Finance->appointmentId = $request->appointmentId;
        $Finance->motive = $request->motive;
        $Finance->description = $request->description;

        $Finance->amount = $request->amount;
        $Finance->date = $request->date;


        $Finance->save();
        return redirect('finances')->with('Message','Finances created successfully');
    }

    public function reports(){

        //Year
        $YearGraph = DB::select('select year(date) year, type, sum(amount) total from finances group by year(date), type');
        $Years = DB::select('select year(date) year from finances group by year(date)');
        $YearTab = [];

        foreach($Years as $Year){
            $query = "select year(date) year, sum(amount) total from finances where type = 'I' AND year(date) = " . $Year->year . " group by year(date)";
            $ingresos = DB::select($query);

            $query = 'select year(date) year, sum(amount) total from finances where type = "E" AND year(date) = ' . $Year->year . ' group by year(date)';
            $egresos = DB::select($query);

            if($ingresos[0] == null)
                $currentIngresos = 0;
            else
                $currentIngresos = $ingresos[0]->total;

            if($egresos[0] == null)
                $currentEgresos = 0;
            else
                $currentEgresos = $egresos[0]->total();

            $YearTab[] = ["year" => $Year, "ingresos" => $ingresos[0]->total, "egresos" => $currentEgresos, "total" =>  $currentIngresos - $currentEgresos];
        }

        $data['anual_finances'] = $YearGraph;
        $data['anual_finances_tab'] = $YearTab;

        //Month
        $MonthGraph = DB::select('select year(date) year, month(date) month, type, COALESCE(sum(amount),0) total from finances where date >= DATE_SUB(NOW(),INTERVAL 1 YEAR) group by year(date), month(date), type');
        $Months = DB::select('select year(date) year, month(date) month from finances where date >= DATE_SUB(NOW(),INTERVAL 1 YEAR) group by year(date), month(date)');
        $MonthTab = [];

        foreach($Months as $Month){
            $query = "select year(date) year, month(date) month, sum(amount) total from finances where type = 'I' AND month(date) = " . $Month->month . " AND year(date) = " . $Month->year . " group by year(date), month(date)";

            $ingresos = DB::select($query);

            if($ingresos == null)
                $ingresos = 0;
            else
                $ingresos = $ingresos[0]->total;

            $query = "select year(date) year, month(date) month, sum(amount) total from finances where type = 'E' AND month(date) = " . $Month->month . " AND year(date) = " . $Month->year . " group by year(date), month(date)";

            $egresos = DB::select($query);

            if($egresos == null)
                $egresos = 0;
            else
                $egresos = $egresos[0]->total;

            $MonthTab[] = ["year" => $Month->year, "month" => $Month->month, "ingresos" => $ingresos, "egresos" => $egresos, "total" =>  $ingresos - $egresos ];
        }

        $data['month_finances'] = $MonthGraph;
        $data['month_finances_tab'] = $MonthTab;

        //Week
        $WeekGraph = DB::select('select year(date) year, week(date) week, type, COALESCE(sum(amount),0) total from finances where date >= DATE_SUB(NOW(),INTERVAL 1 YEAR) group by year(date), week(date), type');
        $Weeks = DB::select('select year(date) year, week(date) week from finances where date >= DATE_SUB(NOW(),INTERVAL 1 YEAR) group by year(date), week(date)');
        $WeekTab = [];

        foreach($Weeks as $Week){
            $query = "select year(date) year, week(date) week, sum(amount) total from finances where type = 'I' AND week(date) = " . $Week->week . " AND year(date) = " . $Week->year . " group by year(date), week(date)";

            $ingresos = DB::select($query);

            if($ingresos == null)
                $ingresos = 0;
            else
                $ingresos = $ingresos[0]->total;

            $query = "select year(date) year, week(date) week, sum(amount) total from finances where type = 'E' AND week(date) = " . $Week->week . " AND year(date) = " . $Week->year . " group by year(date), week(date)";

            $egresos = DB::select($query);

            if($egresos == null)
                $egresos = 0;
            else
                $egresos = $egresos[0]->total;

            $WeekTab[] = ["year" => $Week->year, "week" => $Week->week, "ingresos" => $ingresos, "egresos" => $egresos, "total" =>  $ingresos - $egresos ];
        }


        $data['week_finances'] = $WeekGraph;
        $data['week_finances_tab'] = $WeekTab;


        return view('office/finances/reports', $data);
    }

}
