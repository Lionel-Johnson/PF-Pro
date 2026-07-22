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
        Schema::create('enterprises', function (Blueprint $table) {
            $table->id();

            // Informations générales
            $table->string('name');
            $table->string('legal_name')->nullable();
            $table->string('slug')->unique();

            // Identification légale
            $table->string('nif', 50)->nullable()->unique();
            $table->string('rccm', 100)->nullable()->unique();

            // Coordonnées
            $table->string('email')->nullable();
            $table->string('phone', 30)->nullable();
            $table->string('website')->nullable();

            // Adresse
            $table->string('country', 100)->default('Gabon');
            $table->string('city', 100)->nullable();
            $table->string('address')->nullable();

            // Branding
            $table->string('logo')->nullable();

            // Statut
            $table->boolean('is_active')->default(true);

            $table->timestamps();

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enterprises');
    }
};