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
        Schema::create('libraries', function (Blueprint $table) {
            $table->id();

            // $table->unsignedBigInteger('std_id')->nullable();
            // $table->foreign('std_id')
            //       ->references('id')
            //       ->on('students')
            //       ->onUpdate('cascade')
            //       ->onDelete('cascade');

            $table->foreignId('student_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();


            $table->string('book');
            $table->date('due_date')->nullable();
            $table->boolean('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libraries');
    }
};
