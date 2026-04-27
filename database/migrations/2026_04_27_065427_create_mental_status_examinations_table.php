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
        Schema::create('mental_status_examinations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('encounter_id')->constrained('encounters')->cascadeOnDelete();
            $table->text('general_observation')->nullable();
            $table->text('speech')->nullable();
            $table->text('mood')->nullable();
            $table->text('affect')->nullable();
            $table->text('affect_expression_summary')->nullable();
            $table->text('thought_process_summary')->nullable();
            $table->text('thought_content_summary')->nullable();
            $table->text('perception')->nullable();
            $table->text('sensorium_cognition_summary')->nullable();
            $table->text('insight')->nullable();
            $table->text('judgment_summary')->nullable();
            $table->text('reliability_summary')->nullable();
            $table->text('functional_summary')->nullable();
            $table->text('mse_overall_notes')->nullable();
            $table->tinyInteger('global_functioning_score')->nullable();
            $table->boolean('current_psychotherapy')->default(false);
            $table->boolean('current_psychoactive_medication')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mental_status_examinations');
    }
};
