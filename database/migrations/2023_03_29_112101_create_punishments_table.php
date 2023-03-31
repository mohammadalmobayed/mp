<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // dd(auth()->id());
        Schema::create('punishments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('student_id');
            $table->string('warning_type');
            $table->string('warning_reason');
            $table->string('supervisor');
            $table->string('status');
            $table->timestamps();
        });
       

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('punishments');
    }
};
