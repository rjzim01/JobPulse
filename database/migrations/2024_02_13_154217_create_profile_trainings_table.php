<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profile_trainings', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            $table->string('traningTitle1')->nullable();
            $table->string('instituteName1')->nullable();
            $table->string('year1')->nullable();

            $table->string('traningTitle2')->nullable();
            $table->string('instituteName2')->nullable();
            $table->string('year2')->nullable();

            $table->string('traningTitle3')->nullable();
            $table->string('instituteName3')->nullable();
            $table->string('year3')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile_trainings');
    }
};
