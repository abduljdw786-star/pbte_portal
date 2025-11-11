<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('roll_no');
            $table->string('serial_no');
            $table->string('student_name');
            $table->string('father_name');
            $table->string('registration_no');
            $table->string('college_name');
            $table->string('program_duration');
            $table->string('program_name');
            $table->integer('obtained_marks');
            $table->integer('total_marks');
            $table->string('grade');
            $table->date('award_date');
            $table->date('printed_date');
            $table->string('photo_path')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('students');
    }
};