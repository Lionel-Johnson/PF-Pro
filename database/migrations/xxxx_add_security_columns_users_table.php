<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {

            $table->boolean('is_active')
                ->default(true);

            $table->boolean('two_factor_enabled')
                ->default(false);

            $table->string('two_factor_secret')
                ->nullable();

            $table->timestamp('last_login_at')
                ->nullable();

            $table->string('last_login_ip',45)
                ->nullable();

        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {

            $table->dropColumn([

                'is_active',

                'two_factor_enabled',

                'two_factor_secret',

                'last_login_at',

                'last_login_ip'

            ]);

        });
    }
};