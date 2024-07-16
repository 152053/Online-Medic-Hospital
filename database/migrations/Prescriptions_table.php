<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PrescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_username');
            $table->unsignedBigInteger('doctor_id');
            $table->string('medication');
            $table->string('dosage');
            $table->timestamps();

            $table->foreign('patient_username')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('doctor_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prescriptions');
    }
}
