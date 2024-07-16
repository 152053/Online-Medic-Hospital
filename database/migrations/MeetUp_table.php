<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create_Consultations extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_username');
            $table->unsignedBigInteger('doctor_id');
            $table->text('details');
            $table->string('status')->default('pending');
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
        Schema::dropIfExists('consultations');
    }
}
