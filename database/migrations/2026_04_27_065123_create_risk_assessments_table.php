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
        Schema::create('risk_assessments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('encounter_id')->constrained('encounters')->cascadeOnDelete();
            $table->boolean('preoccupations')->default(false);
            $table->boolean('suicidal_ideation')->default(false);
            $table->boolean('suicidal_ideation_history')->default(false);
            $table->boolean('previous_attempts')->default(false);
            $table->boolean('current_ideation')->default(false);
            $table->boolean('impulsiveness')->default(false);
            $table->boolean('viable_plan')->default(false);
            $table->boolean('available_means')->default(false);
            $table->boolean('setting_of_affairs')->default(false);
            $table->boolean('previous_violence')->default(false);
            $table->boolean('current_intent')->default(false);
            $table->boolean('hostile_impulsiveness')->default(false);
            $table->boolean('hostile_viable_plan')->default(false);
            $table->boolean('hostile_available_means')->default(false);
            $table->boolean('suicide_attempt')->default(false);
            $table->boolean('self_harm_behavior')->default(false);
            $table->boolean('homicidal_thoughts')->default(false);
            $table->boolean('aggression')->default(false);
            $table->boolean('none_flag')->default(false);
            $table->text('remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('risk_assessments');
    }
};
