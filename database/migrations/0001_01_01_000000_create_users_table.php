<?php

use Core\Enums\UserStatusEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {

            $table->string('phone', 30)
                ->nullable()
                ->after('email');

            $table->string('avatar')
                ->nullable()
                ->after('phone');

            $table->string('status')
                ->default(UserStatusEnum::PENDING->value)
                ->after('password');

            $table->boolean('two_factor_enabled')
                ->default(false)
                ->after('status');

            $table->timestamp('last_login_at')
                ->nullable()
                ->after('two_factor_enabled');

            $table->unsignedBigInteger('enterprise_id')
                ->nullable()
                ->after('last_login_at');

        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {

            $table->dropColumn([
                'phone',
                'avatar',
                'status',
                'two_factor_enabled',
                'last_login_at',
                'enterprise_id'
            ]);

        });
    }
};