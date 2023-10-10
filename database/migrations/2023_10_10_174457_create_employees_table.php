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
            $table->string('FIRSTNME', 12);
            $table->string('MIDNAME', 20);
            $table->string('LASTNAME', 15);
            $table->char('WORKDEPT', 3)->nullable();
            $table->char('PHONENE', 9)->nullable();
            $table->date('HIREDATE')->nullable();
            $table->char('JOB', 8)->nullable();
            $table->smallInteger('EDLEVEL'); // educational level
            $table->char('SEX', 1)->nullable();
            $table->date('BIRTHDATE')->nullable();
            $table->decimal('SALARY', 9, 2)->nullable();
            $table->decimal('BONUS', 9, 2)->nullable(); // علاوة
            $table->decimal('COMM', 9, 2)->nullable(); // عمولة
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
