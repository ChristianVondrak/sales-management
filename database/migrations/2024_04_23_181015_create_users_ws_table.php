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
        Schema::create('users_ws', function (Blueprint $table) {
            $table->id();
            $table->string('login');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->integer('timezone_id');
            $table->string('timezone_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_ws');
    }
};
