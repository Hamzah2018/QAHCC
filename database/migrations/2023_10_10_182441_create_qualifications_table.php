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
        Schema::create('qualifications', function (Blueprint $table) {
            $table->id();
            $table->string('QUAL_NAME', 50);
            $table->foreignId('EMPNO');
            $table->integer('YEAR_COMPLETED')->nullable();
            $table->text('DESCRIPTION')->nullable();
            $table->string('CERTIFICATE_NUMBER', 20)->nullable();
            $table->string('AWARDING_BODY', 50)->nullable();
            $table->foreign('EMPNO')->references('id')->on('employees')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qualifications');
    }
};
