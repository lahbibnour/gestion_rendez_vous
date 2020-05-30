<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->string('prenom');
            $table->integer('age')->unsigned();
<<<<<<< HEAD
            $table->bigInteger('num_tel')->unsigned();
=======
            $table->integer('num_tel')->unsigned();
>>>>>>> ae1c01c1582ae8fd98d9b2374f3e4782255553d2
            $table->string('etat');
            $table->string('sexe');
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
        Schema::dropIfExists('patients');
    }
}
