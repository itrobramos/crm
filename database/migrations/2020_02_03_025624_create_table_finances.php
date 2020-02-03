<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFinances extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type');
            $table->biginteger('appointmentId')->unsigned()->nullable();
            $table->string('motive');
            $table->string('description')->nullable();
            $table->decimal('amount');
            $table->date('date');
            $table->timestamps();
        });

        Schema::table('finances', function (Blueprint $table){
            $table->foreign('appointmentId')->references('id')->on('appointments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('finances');
    }
}
