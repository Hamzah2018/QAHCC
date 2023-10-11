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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('FIRSTNME');
            $table->string('MIDNAME');
            $table->string('LASTNAME');
            $table->char('WORKDEPT')->nullable();
            $table->char('PHONENE')->nullable();
            $table->date('HIREDATE')->nullable();
            $table->char('JOB')->nullable();
            $table->smallInteger('EDLEVEL'); // educational level
            $table->char('SEX')->nullable();
            $table->date('BIRTHDATE')->nullable();
            $table->decimal('SALARY', 9, 2)->nullable();
            $table->decimal('BONUS', 9, 2)->nullable(); // علاوة
            $table->decimal('COMM', 9, 2)->nullable(); //
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
