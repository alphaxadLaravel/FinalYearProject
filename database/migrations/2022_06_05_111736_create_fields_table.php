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
        Schema::create('fields', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('student_id')->unsigned()->nullable();
            $table->string('company');
            $table->string('department');
            $table->string('path');
            $table->bigInteger('region_id')->unsigned()->nullable();
            $table->bigInteger('ward_id')->unsigned()->nullable();
            $table->bigInteger('distict_id')->unsigned()->nullable();
            $table->string('status')->default('nimepata');
            $table->foreign('region_id')->references('id')->on('regions')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('student_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('ward_id')->references('id')->on('wards')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('distict_id')->references('id')->on('districts')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('fields');
    }
};
