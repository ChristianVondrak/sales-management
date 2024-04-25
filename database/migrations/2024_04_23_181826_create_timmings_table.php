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
        Schema::create('timmings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained(
                table: 'worksnap_users', indexName: 'user_timming_id'
            );
            $table->foreignId('project_id')->constrained();
            $table->integer('logged_timestamp')->nullable();
            $table->integer('from_timestamp')->nullable();
            $table->unsignedInteger('minutes');
            $table->string('type');
            $table->unsignedInteger('task_id');
            $table->string('task_name');
            $table->string('thumbnail_url');
            $table->string('full_resolution_url');
            $table->unsignedInteger('activity_level');
            $table->text('activities')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('timmings');
    }
};
