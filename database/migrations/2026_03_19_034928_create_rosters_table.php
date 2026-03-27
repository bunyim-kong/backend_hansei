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
        Schema::create('rosters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employees_infor_id');
            $table->string('start_time');
            $table->string('end_time');
            $table->enum('type', ['office', 'remote', 'off']);
            $table->timestamps();
            
            $table->unsignedBigInteger('employees_id');
            $table->foreign('employees_id')->references('id')->on('employees_infor');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rosters');
    }
};
