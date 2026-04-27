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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('patient_no', 50)->unique();
            $table->string('first_name', 100);
            $table->string('middle_name', 100)->nullable();
            $table->string('last_name', 100);
            $table->string('suffix', 20)->nullable();
            $table->string('full_name', 255);
            $table->enum('sex', ['male', 'female']);
            $table->date('date_of_birth');
            $table->string('religion', 100)->nullable();
            $table->string('nationality', 100)->nullable();
            $table->enum('civil_status', ['single', 'married', 'widowed', 'separated']);
            $table->string('educational_attainment', 150)->nullable();
            $table->string('occupation', 150)->nullable();
            $table->string('phic_number', 50)->nullable();
            $table->string('mother_maiden_name', 150)->nullable();
            $table->string('father_name', 150)->nullable();
            $table->longText('address')->nullable();
            $table->longText('contact_no')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
