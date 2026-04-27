<?php

namespace Database\Seeders;

use App\Models\Diagnosis;
use App\Models\Encounter;
use App\Models\EncounterDiagnosis;
use App\Models\EncounterMseFinding;
use App\Models\EncounterReviewSystemFinding;
use App\Models\EncounterSignature;
use App\Models\Facility;
use App\Models\LaboratoryRequest;
use App\Models\ManagementPlanItem;
use App\Models\Medicine;
use App\Models\MedicineDispense;
use App\Models\MedicineDispenseItem;
use App\Models\MentalStatusExamination;
use App\Models\MseFinding;
use App\Models\Patient;
use App\Models\Prescription;
use App\Models\PrescriptionItem;
use App\Models\Provider;
use App\Models\Referral;
use App\Models\ReviewSystemFinding;
use App\Models\RiskAssessment;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ClinicalDemoSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::firstOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'Test User',
                'password' => Hash::make('password'),
            ]
        );

        $provider = Provider::query()->firstOrFail();
        $facility = Facility::query()->firstOrFail();
        $referralFacility = Facility::query()->where('facility_type', 'hospital')->firstOrFail();

        $patient = Patient::create([
            'patient_no' => 'PAT-0001',
            'first_name' => 'Ana',
            'middle_name' => 'Lopez',
            'last_name' => 'Garcia',
            'suffix' => null,
            'full_name' => 'Ana Lopez Garcia',
            'sex' => 'female',
            'date_of_birth' => '1996-08-14',
            'religion' => 'Roman Catholic',
            'nationality' => 'Filipino',
            'civil_status' => 'single',
            'educational_attainment' => 'College Graduate',
            'occupation' => 'Administrative Assistant',
            'phic_number' => 'PHIC-1234-5678',
            'mother_maiden_name' => 'Elena Santos',
            'father_name' => 'Ramon Garcia',
            'address' => 'Barangay Central, Main City',
            'contact_no' => '09171230000',
        ]);

        $encounter = Encounter::create([
            'encounter_no' => 'ENC-0001',
            'patient_id' => $patient->id,
            'provider_id' => $provider->id,
            'facility_id' => $facility->id,
            'consultation_datetime' => now()->subDay(),
            'encounter_type' => 'walk_in',
            'reason_for_consultation_referral' => 'Initial psychiatric consultation due to persistent anxiety and low mood.',
            'chief_complaint' => 'Difficulty sleeping, poor appetite, and excessive worry.',
            'history_of_present_illness' => 'Symptoms began around three months ago and gradually worsened after work-related stress.',
            'past_psychiatric_history' => 'No prior psychiatric admission. Brief counseling in college.',
            'previous_diagnosis_text' => 'None documented.',
            'previous_medications_treatments' => 'Occasional melatonin use.',
            'past_medical_surgical_history' => 'No major medical illness. Appendectomy at age 15.',
            'family_history' => 'Maternal aunt with depression.',
            'personal_social_history' => 'Lives with parents and younger sibling. Strong family support.',
            'developmental_history' => 'Developmental milestones reportedly normal.',
            'educational_occupational_history' => 'Completed college and currently employed full time.',
            'substance_use_alcohol' => false,
            'substance_use_tobacco' => false,
            'substance_use_drugs' => false,
            'substance_use_none' => true,
            'stressors_support_system' => 'Job stress, but good support from family and partner.',
            'advice_health_education_given' => 'Discussed sleep hygiene, medication adherence, and follow-up care.',
            'follow_up_schedule' => 'Return after two weeks.',
            'remarks' => 'Stable for outpatient management.',
            'status' => 'completed',
            'created_by' => $user->id,
            'updated_by' => $user->id,
        ]);

        RiskAssessment::create([
            'encounter_id' => $encounter->id,
            'preoccupations' => true,
            'suicidal_ideation' => false,
            'suicidal_ideation_history' => false,
            'previous_attempts' => false,
            'current_ideation' => false,
            'impulsiveness' => false,
            'viable_plan' => false,
            'available_means' => false,
            'setting_of_affairs' => false,
            'previous_violence' => false,
            'current_intent' => false,
            'hostile_impulsiveness' => false,
            'hostile_viable_plan' => false,
            'hostile_available_means' => false,
            'suicide_attempt' => false,
            'self_harm_behavior' => false,
            'homicidal_thoughts' => false,
            'aggression' => false,
            'none_flag' => false,
            'remarks' => 'No acute suicide or homicide risk at time of consult.',
        ]);

        MentalStatusExamination::create([
            'encounter_id' => $encounter->id,
            'general_observation' => 'Neatly dressed, maintains eye contact, mildly anxious.',
            'speech' => 'Spontaneous, coherent, normal rate and volume.',
            'mood' => 'Reports feeling worried and sad.',
            'affect' => 'Constricted but appropriate to content.',
            'affect_expression_summary' => 'Affect congruent with stated mood.',
            'thought_process_summary' => 'Logical and goal-directed.',
            'thought_content_summary' => 'No delusions, no suicidal or homicidal ideation.',
            'perception' => 'No hallucinations reported.',
            'sensorium_cognition_summary' => 'Alert and oriented to person, place, and time.',
            'insight' => 'Fair insight into current symptoms.',
            'judgment_summary' => 'Judgment intact.',
            'reliability_summary' => 'Historian considered reliable.',
            'functional_summary' => 'Occupational functioning mildly impaired by anxiety.',
            'mse_overall_notes' => 'Presentation consistent with depressive and anxiety symptoms without psychosis.',
            'global_functioning_score' => 65,
            'current_psychotherapy' => false,
            'current_psychoactive_medication' => false,
        ]);

        $depressedMood = ReviewSystemFinding::query()->where('name', 'Depressed mood')->first();
        $anxiety = ReviewSystemFinding::query()->where('name', 'Anxiety')->first();
        $sleepDisturbance = ReviewSystemFinding::query()->where('name', 'Sleep disturbance')->first();

        foreach ([$depressedMood, $anxiety, $sleepDisturbance] as $finding) {
            if ($finding !== null) {
                EncounterReviewSystemFinding::create([
                    'encounter_id' => $encounter->id,
                    'review_system_finding_id' => $finding->id,
                    'is_present' => true,
                    'remarks' => 'Reported during interview.',
                ]);
            }
        }

        $mseFindingCodes = [
            'behavior_cooperative',
            'speech_normal_rate',
            'mood_depressed',
            'affect_constricted',
            'content_no_delusions',
            'perception_no_hallucinations',
        ];

        foreach ($mseFindingCodes as $code) {
            $finding = MseFinding::query()->where('finding_code', $code)->first();
            if ($finding !== null) {
                EncounterMseFinding::create([
                    'encounter_id' => $encounter->id,
                    'mse_finding_id' => $finding->id,
                    'is_present' => true,
                    'remarks' => null,
                ]);
            }
        }

        $diagnosis = Diagnosis::query()->where('code', 'F32.1')->firstOrFail();
        EncounterDiagnosis::create([
            'encounter_id' => $encounter->id,
            'diagnosis_id' => $diagnosis->id,
            'diagnosis_text' => $diagnosis->description,
            'diagnosis_type' => 'primary',
            'notes' => 'Working diagnosis based on current presentation.',
        ]);

        $prescription = Prescription::create([
            'encounter_id' => $encounter->id,
            'prescribed_by_provider_id' => $provider->id,
            'notes' => 'Start low dose and reassess on follow-up.',
        ]);

        $sertraline = Medicine::query()->where('generic_name', 'Sertraline')->firstOrFail();
        PrescriptionItem::create([
            'prescription_id' => $prescription->id,
            'medicine_id' => $sertraline->id,
            'medicine_name_text' => 'Sertraline 50 mg tablet',
            'dose' => '1/2 tablet',
            'route' => 'Oral',
            'frequency' => 'Once daily',
            'duration' => '14 days',
            'instructions' => 'Take after breakfast for 7 days, then increase to 1 tablet daily as tolerated.',
        ]);

        $dispense = MedicineDispense::create([
            'patient_id' => $patient->id,
            'encounter_id' => $encounter->id,
            'dispensed_by_provider_id' => $provider->id,
            'dispensed_at' => now()->subHours(20),
            'remarks' => 'Initial 14-day supply dispensed.',
        ]);

        MedicineDispenseItem::create([
            'medicine_dispense_id' => $dispense->id,
            'medicine_id' => $sertraline->id,
            'medicine_name_text' => 'Sertraline 50 mg tablet',
            'quantity_received' => 14,
            'received_by_name' => 'Ana Lopez Garcia',
            'date_ordered' => now()->subDay()->toDateString(),
            'date_time_received' => now()->subHours(20),
        ]);

        EncounterSignature::create([
            'encounter_id' => $encounter->id,
            'provider_id' => $provider->id,
            'signed_name' => 'Maria S. Reyes, MD',
            'designation' => 'Attending Psychiatrist',
            'signature_role' => 'attending_physician',
            'signed_at' => now()->subHours(18),
            'signature_path' => 'signatures/demo/maria-reyes-md.png',
        ]);

        LaboratoryRequest::create([
            'encounter_id' => $encounter->id,
            'request_name' => 'CBC and TSH',
            'details' => 'Baseline workup before continuing long-term medication.',
            'status' => 'requested',
            'requested_at' => now()->subHours(19),
            'completed_at' => null,
        ]);

        Referral::create([
            'encounter_id' => $encounter->id,
            'referred_to_facility_id' => $referralFacility->id,
            'referral_reason' => 'Coordinate counseling and psychotherapy services closer to patient residence.',
            'referral_notes' => 'Patient agreeable to referral.',
            'status' => 'pending',
            'referred_at' => now()->subHours(18),
            'completed_at' => null,
        ]);

        ManagementPlanItem::insert([
            [
                'encounter_id' => $encounter->id,
                'plan_category' => 'medication',
                'item_name' => 'Initiate Sertraline',
                'details' => 'Begin at low dose and monitor for adverse effects.',
                'sort_order' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'encounter_id' => $encounter->id,
                'plan_category' => 'education',
                'item_name' => 'Sleep hygiene counseling',
                'details' => 'Limit caffeine, avoid gadgets before bedtime, and keep a regular sleep schedule.',
                'sort_order' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'encounter_id' => $encounter->id,
                'plan_category' => 'follow_up',
                'item_name' => 'Follow-up consultation',
                'details' => 'Reassess symptoms and medication tolerance after two weeks.',
                'sort_order' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
