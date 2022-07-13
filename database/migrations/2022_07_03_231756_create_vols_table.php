<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vols', function (Blueprint $table) {
            $table->id();
            $table->string('code_vol');
            $table->date('date_depart');
            $table->time('heure_depart');
            $table->string('destination');
            $table->integer('Nb_places_A');
            $table->integer('Nb_places_B');
            $table->integer('prix_classe_A');
            $table->integer('prix_classe_B');
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
        Schema::dropIfExists('vols');
    }
}
