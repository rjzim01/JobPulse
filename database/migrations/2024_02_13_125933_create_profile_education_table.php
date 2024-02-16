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
        Schema::create('profile_education', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            $table->string('versityDegree')->nullable();
            $table->string('versityInstitute')->nullable();
            $table->string('versityDepartment')->nullable();
            $table->string('versityYear')->nullable();
            $table->string('versityResult')->nullable();

            $table->string('hscDegree')->nullable();
            $table->string('hscInstitute')->nullable();
            $table->string('hscDepartment')->nullable();
            $table->string('hscYear')->nullable();
            $table->string('hscResult')->nullable();

            $table->string('sscDegree')->nullable();
            $table->string('sscInstitute')->nullable();
            $table->string('sscDepartment')->nullable();
            $table->string('sscYear')->nullable();
            $table->string('sscResult')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile_education');
    }
};
