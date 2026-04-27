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
        Schema::create('mse_findings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mse_section_id')->constrained('mse_sections')->cascadeOnDelete();
            $table->string('group_name', 150)->nullable();
            $table->string('finding_name', 150);
            $table->string('finding_code', 150)->nullable();
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mse_findings');
    }
};
