<?php

namespace Database\Seeders;

use App\Models\Diagnosis;
use App\Models\Facility;
use App\Models\Medicine;
use App\Models\MseFinding;
use App\Models\MseSection;
use App\Models\Provider;
use App\Models\ReviewSystemCategory;
use App\Models\ReviewSystemFinding;
use Illuminate\Database\Seeder;

class ClinicalReferenceSeeder extends Seeder
{
    public function run(): void
    {
        Facility::insert([
            [
                'name' => 'PHO Main Mental Health Center',
                'facility_type' => 'mental_health_center',
                'address' => 'Capitol Compound, Main City',
                'contact_number' => '09171234567',
                'email' => 'mentalhealth@pho.local',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Provincial General Hospital',
                'facility_type' => 'hospital',
                'address' => 'National Road, Main City',
                'contact_number' => '09179876543',
                'email' => 'pgh@pho.local',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'North District RHU',
                'facility_type' => 'rhu',
                'address' => 'North District, Province',
                'contact_number' => '09175551234',
                'email' => 'north-rhu@pho.local',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        Provider::insert([
            [
                'employee_no' => 'EMP-0001',
                'first_name' => 'Maria',
                'middle_name' => 'Santos',
                'last_name' => 'Reyes',
                'suffix' => null,
                'profession' => 'Psychiatrist',
                'specialty' => 'Adult Psychiatry',
                'license_no' => 'LIC-PSY-1001',
                'contact_number' => '09170000001',
                'email' => 'maria.reyes@pho.local',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'employee_no' => 'EMP-0002',
                'first_name' => 'Jose',
                'middle_name' => 'Dela Cruz',
                'last_name' => 'Fernandez',
                'suffix' => null,
                'profession' => 'Psychologist',
                'specialty' => 'Clinical Psychology',
                'license_no' => 'LIC-PSY-1002',
                'contact_number' => '09170000002',
                'email' => 'jose.fernandez@pho.local',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        Medicine::insert([
            [
                'generic_name' => 'Sertraline',
                'brand_name' => 'Zoloft',
                'formulation' => 'Tablet',
                'strength' => '50 mg',
                'dosage_unit' => 'tablet',
                'default_route' => 'Oral',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'generic_name' => 'Risperidone',
                'brand_name' => 'Risperdal',
                'formulation' => 'Tablet',
                'strength' => '2 mg',
                'dosage_unit' => 'tablet',
                'default_route' => 'Oral',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'generic_name' => 'Clonazepam',
                'brand_name' => 'Rivotril',
                'formulation' => 'Tablet',
                'strength' => '0.5 mg',
                'dosage_unit' => 'tablet',
                'default_route' => 'Oral',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'generic_name' => 'Valproic Acid',
                'brand_name' => 'Depakene',
                'formulation' => 'Capsule',
                'strength' => '500 mg',
                'dosage_unit' => 'capsule',
                'default_route' => 'Oral',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        Diagnosis::insert([
            [
                'code' => 'F32.1',
                'coding_system' => 'icd10',
                'description' => 'Moderate depressive episode',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'F41.1',
                'coding_system' => 'icd10',
                'description' => 'Generalized anxiety disorder',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => '296.32',
                'coding_system' => 'dsm5',
                'description' => 'Major depressive disorder, recurrent, moderate',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $reviewCategories = [
            'Constitutional' => ['Fever', 'Weight loss', 'Fatigue'],
            'Neurologic' => ['Headache', 'Dizziness', 'Sleep disturbance'],
            'Psychiatric' => ['Depressed mood', 'Anxiety', 'Hallucinations', 'Suicidal thoughts'],
            'Cardiovascular' => ['Chest pain', 'Palpitations'],
            'Respiratory' => ['Cough', 'Shortness of breath'],
        ];

        $categorySort = 1;
        foreach ($reviewCategories as $categoryName => $findings) {
            $category = ReviewSystemCategory::create([
                'name' => $categoryName,
                'sort_order' => $categorySort++,
            ]);

            foreach ($findings as $index => $findingName) {
                ReviewSystemFinding::create([
                    'review_system_category_id' => $category->id,
                    'name' => $findingName,
                    'sort_order' => $index + 1,
                ]);
            }
        }

        $mseSections = [
            [
                'code' => 'general_observation',
                'name' => 'General Observation',
                'findings' => [
                    ['group_name' => 'Appearance', 'finding_name' => 'Well-groomed', 'finding_code' => 'appearance_well_groomed'],
                    ['group_name' => 'Appearance', 'finding_name' => 'Disheveled', 'finding_code' => 'appearance_disheveled'],
                    ['group_name' => 'Behavior', 'finding_name' => 'Cooperative', 'finding_code' => 'behavior_cooperative'],
                ],
            ],
            [
                'code' => 'speech',
                'name' => 'Speech',
                'findings' => [
                    ['group_name' => 'Rate', 'finding_name' => 'Normal rate', 'finding_code' => 'speech_normal_rate'],
                    ['group_name' => 'Rate', 'finding_name' => 'Pressured speech', 'finding_code' => 'speech_pressured'],
                ],
            ],
            [
                'code' => 'mood_affect',
                'name' => 'Mood and Affect',
                'findings' => [
                    ['group_name' => 'Mood', 'finding_name' => 'Euthymic', 'finding_code' => 'mood_euthymic'],
                    ['group_name' => 'Mood', 'finding_name' => 'Depressed', 'finding_code' => 'mood_depressed'],
                    ['group_name' => 'Affect', 'finding_name' => 'Constricted', 'finding_code' => 'affect_constricted'],
                ],
            ],
            [
                'code' => 'thought_content',
                'name' => 'Thought Content',
                'findings' => [
                    ['group_name' => 'Content', 'finding_name' => 'No delusions', 'finding_code' => 'content_no_delusions'],
                    ['group_name' => 'Content', 'finding_name' => 'Suicidal ideation', 'finding_code' => 'content_suicidal_ideation'],
                ],
            ],
            [
                'code' => 'perception',
                'name' => 'Perception',
                'findings' => [
                    ['group_name' => 'Perception', 'finding_name' => 'No hallucinations', 'finding_code' => 'perception_no_hallucinations'],
                    ['group_name' => 'Perception', 'finding_name' => 'Auditory hallucinations', 'finding_code' => 'perception_auditory_hallucinations'],
                ],
            ],
        ];

        foreach ($mseSections as $sectionIndex => $sectionData) {
            $section = MseSection::create([
                'code' => $sectionData['code'],
                'name' => $sectionData['name'],
                'sort_order' => $sectionIndex + 1,
            ]);

            foreach ($sectionData['findings'] as $findingIndex => $findingData) {
                MseFinding::create([
                    'mse_section_id' => $section->id,
                    'group_name' => $findingData['group_name'],
                    'finding_name' => $findingData['finding_name'],
                    'finding_code' => $findingData['finding_code'],
                    'sort_order' => $findingIndex + 1,
                    'is_active' => true,
                ]);
            }
        }
    }
}
