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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('mobile')->nullable();
            $table->string('sponser_code');
            $table->string('password');
            $table->float('total_deposit')->default('0');
            $table->biginteger('direct_group')->default('0');
            $table->biginteger('total_group')->default('0');
            $table->tinyinteger('is_active')->default('0');
            $table->biginteger('active_date')->nullable();
            $table->float('total_income')->default('0');
            $table->float('total_withdrawl')->default('0');
            $table->float('current_withdraw_request')->default('0');
            $table->float('total_group_active')->default('0');
            $table->float('total_group_deposit')->default('0');
            $table->tinyinteger('status')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
