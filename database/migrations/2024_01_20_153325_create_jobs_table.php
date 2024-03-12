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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('job_title');
            $table->string('job_designation');
            $table->string('experience_from');
            $table->string('experience_to');
            $table->enum('shift_type',['full','part'])->default('full');
            $table->string('salary_from');
            $table->string('salary_to');
            $table->string('location_address');
            $table->string('company_name');
            $table->string('company_logo_image')->nullable();
            $table->enum('status',['active','inactive'])->default('active');
            $table->date('job_posted_date'); // Date field
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
