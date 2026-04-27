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
        Schema::create('medicine_dispense_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('medicine_dispense_id')->constrained('medicine_dispenses')->cascadeOnDelete();
            $table->foreignId('medicine_id')->nullable()->constrained('medicines')->nullOnDelete();
            $table->string('medicine_name_text', 150);
            $table->decimal('quantity_received', 12, 2)->default(0);
            $table->string('received_by_name', 150)->nullable();
            $table->date('date_ordered')->nullable();
            $table->dateTime('date_time_received')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicine_dispense_items');
    }
};
