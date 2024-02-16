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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            ////////////----basic information----////////////////
            $table->string('full_name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('blood_group')->nullable();
            // $table->enum('blood_group', ['A+', 'A-', 'B+', 'B+', 'AB+', 'AB-', 'O+', 'O-', 'Not Selected'])->default('Not Selected');
            $table->string('nid')->nullable();
            $table->string('passport')->nullable();
            $table->string('phone')->nullable();
            $table->string('phone2')->nullable();
            $table->string('email')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('facebook')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('github')->nullable();
            $table->string('dribble')->nullable();
            $table->string('portfolio')->nullable();
            /////////////////////////////////////////////////////
            ////////////----education information----////////////

            /////////////////////////////////////////////////////
            ////////////----Professional Trainings----///////////

            /////////////////////////////////////////////////////
            ///////////////----Job Experiences----///////////////

            /////////////////////////////////////////////////////
            ////////////////////----Skills----///////////////////
            $table->string('skills')->nullable();
            /////////////////////////////////////////////////////
            ///////////////----Extra Information----/////////////
            $table->string('current_salary')->nullable();
            $table->string('expected_salary')->nullable();
            /////////////////////////////////////////////////////
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
