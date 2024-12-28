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
        Schema::create('fund', function (Blueprint $table) {
            $table->id();
            $table->integer('supporter_id');
            $table->integer('project_id');
            $table->string('support_type');
            $table->string('Support_amount');
            $table->string('support_description');
            $table->string('Project_owner');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fund');
    }
};
