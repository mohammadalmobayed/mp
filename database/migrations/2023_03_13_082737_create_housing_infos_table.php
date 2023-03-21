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
        Schema::create('housing_infos', function (Blueprint $table) {
                $table->id();
                $table->integer('total_dorms');
                $table->integer('total_students');
                $table->integer('total_rooms');
                $table->integer('total_supervisors');
                $table->integer('rooms_occupied');
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('housing_infos');
    }
};
