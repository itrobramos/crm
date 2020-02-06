<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableNotifications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('text');
            $table->date('date')->nullable();
            $table->biginteger('notificationTypeId')->unsigned()->nullable();
            $table->biginteger('clientId')->unsigned()->nullable();
            $table->biginteger('petId')->unsigned()->nullable();
            $table->timestamps();
        });


        Schema::table('notifications', function (Blueprint $table){
            $table->foreign('notificationTypeId')->references('id')->on('notification_types')->onDelete('cascade');
        });

        Schema::table('notifications', function (Blueprint $table){
            $table->foreign('clientId')->references('id')->on('clients')->onDelete('cascade');
        });

        Schema::table('notifications', function (Blueprint $table){
            $table->foreign('petId')->references('id')->on('pets')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notifications');
    }
}
