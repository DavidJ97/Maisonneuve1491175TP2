<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('adresse');
            $table->string('telephone');
            $table->string('email')->unique();
            $table->date('date_de_naissance');
            $table->unsignedBigInteger('ville_id'); // Conserve la colonne sans ajouter la contrainte
            // $table->foreign('ville_id')->references('id')->on('villes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('etudiants');
    }
}
