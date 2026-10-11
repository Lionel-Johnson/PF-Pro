<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {

            if (! Schema::hasColumn('users', 'is_active')) $table->boolean('is_active')->default(true);
            if (! Schema::hasColumn('users', 'two_factor_enabled')) $table->boolean('two_factor_enabled')->default(false);
            if (! Schema::hasColumn('users', 'two_factor_secret')) $table->string('two_factor_secret')->nullable();
            if (! Schema::hasColumn('users', 'last_login_at')) $table->timestamp('last_login_at')->nullable();
            if (! Schema::hasColumn('users', 'last_login_ip')) $table->string('last_login_ip', 45)->nullable();
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