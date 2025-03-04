<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('voyages', function (Blueprint $table) {
            $table->id();
            $table->integer('place');
            $table->string('ville_depart');
            $table->string('ville_arrivee');
            $table->time('heure_depart');
            $table->time('heure_arrivee');
            $table->date('date_depart');
            $table->date('date_arrivee');
            $table->double('prix');
            $table->foreignId('societe_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voyages');
    }
};
