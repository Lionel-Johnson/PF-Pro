<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {

            $table->id();

            $table->string('site_name');

            $table->string('tagline')->nullable();

            $table->string('logo')->nullable();

            $table->string('favicon')->nullable();

            $table->string('phone')->nullable();

            $table->string('email')->nullable();

            $table->string('address')->nullable();

            $table->string('city')->nullable();

            $table->string('country')->nullable();

            $table->string('facebook')->nullable();

            $table->string('linkedin')->nullable();

            $table->string('youtube')->nullable();

            $table->string('instagram')->nullable();

            $table->string('whatsapp')->nullable();

            $table->string('hero_video')->nullable();

            $table->string('hero_image')->nullable();

            $table->string('primary_color')->default('#0A2540');

            $table->string('secondary_color')->default('#D4AF37');

            $table->string('accent_color')->default('#4F46E5');

            $table->text('footer_text')->nullable();

            $table->string('copyright')->nullable();

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};