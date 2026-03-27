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
        Schema::create('leaves', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('employee_infor_id');
            $table->foreignId('employees_infor_id')->references('id')->on('employees_infor');
            
            $table->enum('type', ['Illness', 'Personal']);
            $table->date('start_date');
            $table->date('end_date');
            $table->string('reason');
            $table->enum('status', ['pending', 'approve', 'reject']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leaves');
    }
};
