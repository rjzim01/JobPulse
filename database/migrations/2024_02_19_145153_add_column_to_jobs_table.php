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
        Schema::table('jobs', function (Blueprint $table) {
            $table->string('skill1')->nullable()->after('status');
            $table->string('skill2')->nullable()->after('skill1');
            $table->string('skill3')->nullable()->after('skill2');
            $table->string('skill4')->nullable()->after('skill3');
            $table->string('salary')->nullable()->after('title');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('jobs', function (Blueprint $table) {
            $table->dropColumn('skill1');
            $table->dropColumn('skill2');
            $table->dropColumn('skill3');
            $table->dropColumn('skill4');
            $table->dropColumn('salary');
        });
    }
};
