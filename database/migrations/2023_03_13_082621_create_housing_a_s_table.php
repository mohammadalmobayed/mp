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
        Schema::create('housing_a_s', function (Blueprint $table) {
                $table->id();
                $table->integer('student_id');
                $table->string('name');
                $table->integer('phone');
                $table->string('dorm_joined')->default('A');
                $table->integer('room_number');
                $table->string('room_type');
                $table->date('date_joined');
                // $table->softDeletes();
                $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('housing_a_s');
    }

};
