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
        Schema::create('infosetudiants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('username');
            $table->string('phone_number')->nullable();
            $table->string('matricule')->unique();
            $table->float('note')->default(0); // Corrigé : Ajout d'une colonne 'note' avec une valeur par défaut
            $table->string('classe');
            $table->string('groupe');
            $table->string('annee_universitaire');
            $table->string('cne')->unique();
            $table->date('date_naissance');
            $table->string('nationalite');
            $table->enum('genre', ['Masculin', 'Féminin']);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infosetudiants');
    }
};
