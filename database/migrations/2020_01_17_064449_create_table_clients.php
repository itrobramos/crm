<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableClients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name',50);
            $table->string('last_name',50);
            $table->string('email',100);
            $table->string('address',200);
            $table->string('city',50);
            $table->string('country',50);
            $table->string('postal_code',10);
            $table->string('notes',1000);
            $table->date('birth_date');
            $table->string('genre',50);
            $table->string('avatar',200);
            $table->string('phone1',50);
            $table->string('phone2',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
