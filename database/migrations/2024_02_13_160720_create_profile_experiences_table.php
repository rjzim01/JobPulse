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
        Schema::create('profile_experiences', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            $table->string('designation1')->nullable();
            $table->string('companyName1')->nullable();
            $table->string('joiningDate1')->nullable();
            $table->string('leftDate1')->nullable();

            $table->string('designation2')->nullable();
            $table->string('companyName2')->nullable();
            $table->string('joiningDate2')->nullable();
            $table->string('leftDate2')->nullable();

            $table->string('designation3')->nullable();
            $table->string('companyName3')->nullable();
            $table->string('joiningDate3')->nullable();
            $table->string('leftDate3')->nullable();

            $table->string('skills')->nullable();
            $table->string('currentSalary')->nullable();
            $table->string('expectedSalary')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile_experiences');
    }
};
