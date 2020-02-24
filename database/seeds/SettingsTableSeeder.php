<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'name' => "Duracion_Cita",
            'value' => "60",
            'category' => "Global",
            'input' => "number"
            ]);

        DB::table('settings')->insert([
            'name' => "Cancelada",
            'value' => "#000",
            'category' => "Color Citas",
            'input' => "color"
            ]);

        DB::table('settings')->insert([
            'name' => "Aceptada",
            'value' => "#000",
            'category' => "Color Citas",
            'input' => "color"
            ]);

        DB::table('settings')->insert([
            'name' => "Finalizada",
            'value' => "#000",
            'category' => "Color Citas",
            'input' => "color"
            ]);

        DB::table('settings')->insert([
            'name' => "Pendiente",
            'value' => "#000",
            'category' => "Color Citas",
            'input' => "color"
            ]);
        DB::table('settings')->insert([
            'name' => "Cliente_Inactivo",
            'value' => "90",
            'category' => "Tiempo",
            'input' => "number"
            ]);
        DB::table('settings')->insert([
            'name' => "Mascota_Seguimiento",
            'value' => "30",
            'category' => "Tiempo",
            'input' => "number"
            ]);

        DB::table('settings')->insert([
            'name' => "Hora_Inicio_Citas",
            'value' => "09:00",
            'category' => "Tiempo",
            'input' => "time"
        ]);

        DB::table('settings')->insert([
            'name' => "Hora_Fin_Citas",
            'value' => "19:00",
            'category' => "Tiempo",
            'input' => "time"
        ]);

        DB::table('settings')->insert([
            'name' => "Tiempo_Entre_Citas",
            'value' => "30",
            'category' => "Global",
            'input' => "number"
        ]);

        DB::table('settings')->insert([
            'name' => "Email_Notificaciones",
            'value' => "it.robramos@gmail.com",
            'category' => "Global",
            'input' => "text"
        ]);
    }
}
