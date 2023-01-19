<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('prix')->nullable();
            $table->string('slug')->nullable();
            $table->string('negociable')->nullable();
            $table->string('type')->nullable();
            $table->string('etat')->nullable();
            $table->string('marque')->nullable();
            $table->string('modele')->nullable();
            $table->string('carrosserie')->nullable();
            $table->string('kilometrage')->nullable();
            $table->string('annee')->nullable();
            $table->string('moteur')->nullable();
            $table->string('couleur')->nullable();
            $table->string('carburant')->nullable();
            $table->string('transmission')->nullable();
            $table->string('volant')->nullable();
            $table->string('climatisation')->nullable();
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->string('status')->nullable();
            $table->foreignId('user_id')->constrained();
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
        Schema::dropIfExists('cars');
    }
};
