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
        Schema::create('extra_charges', function (Blueprint $table) {
            $table->id();
            $table->foreignId('report_id')->constrained();
            $table->foreignId('extra_field_id')->constrained(
                table: 'extra_fields', indexName: 'extra_charges_fields'
            );
            $table->foreignId('operator_id')->constrained();
            $table->text('description');
            $table->float('value');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('extra_charges');
    }
};
