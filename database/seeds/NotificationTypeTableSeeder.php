<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotificationTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notification_types')->insert([
            'description' => "Cumpleaños Cliente",
            'icon' => "fas fa-bell"
        ]);

        DB::table('notification_types')->insert([
            'description' => "Cumpleaños Mascota",
            'icon' => "fas fa-bell"
        ]);

        DB::table('notification_types')->insert([
            'description' => "Inactividad",
            'icon' => "fas fa-bell"
        ]);

        DB::table('notification_types')->insert([
            'description' => "Seguimiento",
            'icon' => "fas fa-bell"
        ]);

    }
}
