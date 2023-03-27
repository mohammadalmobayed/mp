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
        Schema::create('housing_infos', function (Blueprint $table) {
            $table->id(); 
            $table->integer('total_students')->default(0);
            $table->integer('total_dorms')->default(0);
            $table->integer('total_rooms')->default(0);
            $table->integer('rooms_occupied')->default(0);
            $table->integer('rooms_vacant')->default(0);
            $table->integer('total_supervisors')->default(0);
            $table->timestamps();
        });

        DB::table('housing_infos')->update(['total_students'=> DB::raw('(SELECT COUNT(*) FROM students)'),'total_supervisors' => DB::raw('(SELECT COUNT(*) FROM users WHERE role = 1)')]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('housing_infos');
    }
};
