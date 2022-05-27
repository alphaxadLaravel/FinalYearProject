<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('regNumber')->unique();
            $table->string('firstname');
            $table->string('midlename');
            $table->string('lastname');
            $table->bigInteger('course_id')->unsigned()->nullable();
            $table->bigInteger('faculty_id')->unsigned()->nullable();
            $table->string('year');
            $table->string('level');
            $table->string('email');
            $table->string('phoneNumber');
            $table->string('status')->default('active');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('faculty_id')->references('id')->on('faculties')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('students');
    }
};
