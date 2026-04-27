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
        Schema::create('encounters', function (Blueprint $table) {
            $table->id();
            $table->string('encounter_no', 50)->unique();

            $table->foreignId('patient_id')->constrained('patients')->cascadeOnDelete();
            $table->foreignId('provider_id')->nullable()->constrained('providers')->nullOnDelete();
            $table->foreignId('facility_id')->nullable()->constrained('facilities')->nullOnDelete();

            $table->dateTime('consultation_datetime');
            $table->enum('encounter_type', ['walk_in', 'referral', 'follow_up', 'emergency'])->nullable();

            $table->text('reason_for_consultation_referral')->nullable();
            $table->text('chief_complaint')->nullable();
            $table->text('history_of_present_illness')->nullable();
            $table->text('past_psychiatric_history')->nullable();
            $table->text('previous_diagnosis_text')->nullable();
            $table->text('previous_medications_treatments')->nullable();
            $table->text('past_medical_surgical_history')->nullable();
            $table->text('family_history')->nullable();
            $table->text('personal_social_history')->nullable();
            $table->text('developmental_history')->nullable();
            $table->text('educational_occupational_history')->nullable();

            $table->boolean('substance_use_alcohol')->default(false);
            $table->boolean('substance_use_tobacco')->default(false);
            $table->boolean('substance_use_drugs')->default(false);
            $table->boolean('substance_use_none')->default(false);

            $table->text('stressors_support_system')->nullable();
            $table->text('advice_health_education_given')->nullable();
            $table->text('follow_up_schedule')->nullable();
            $table->text('remarks')->nullable();

            $table->enum('status', ['pending', 'ongoing', 'completed', 'cancelled'])->default('pending');

            $table->foreignId('created_by')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('updated_by')->nullable()->constrained('users')->nullOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('encounters');
    }
};
