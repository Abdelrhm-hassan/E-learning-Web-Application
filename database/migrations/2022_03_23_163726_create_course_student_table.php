<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_student', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger("course_id");
            $table->foreign("course_id")->references("id")->on('courses');
            $table->unsignedBigInteger("student_id");
            $table->foreign("student_id")->references("id")->on('students');
            $table->enum('status',['panding','aprove','reject'])->default('panding');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_student');
    }
}
