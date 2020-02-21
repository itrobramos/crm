<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',50)->nullable();
            $table->date('birth_date')->nullable();
            $table->string('genre',50)->nullable();
            $table->string('breed',50)->nullable();
            $table->string('avatar',50)->nullable();
            $table->biginteger('clientId')->unsigned();
            $table->timestamps();
        });

        Schema::table('pets', function (Blueprint $table){
            $table->foreign('clientId')->references('id')->on('clients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pets');
    }
}
