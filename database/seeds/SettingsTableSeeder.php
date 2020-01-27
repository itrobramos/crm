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
            'name' => "Duración Cita",
            'value' => "60",
            'category' => "Global",
            'input' => "number"
            ]);

        DB::table('settings')->insert([
            'name' => "Color Cancelada",
            'value' => "#000",
            'category' => "Color Citas",
            'input' => "color"
            ]);

        DB::table('settings')->insert([
            'name' => "Color Aceptada",
            'value' => "#000",
            'category' => "Color Citas",
            'input' => "color"
            ]);

        DB::table('settings')->insert([
            'name' => "Color Finalizada",
            'value' => "#000",
            'category' => "Color Citas",
            'input' => "color"
            ]);

        DB::table('settings')->insert([
            'name' => "Color Pendiente",
            'value' => "#000",
            'category' => "Color Citas",
            'input' => "color"
            ]);

    }
}
