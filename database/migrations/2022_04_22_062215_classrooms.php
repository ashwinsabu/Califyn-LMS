<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Classrooms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classrooms', function (Blueprint $table) {
            $table->id();
            
            $table->bigInteger('department_id')->unsigned();
            $table->integer('yop');
            $table->string('section');
            $table->bigInteger('staff_id')->unsigned();
            $table->bigInteger('course_id')->unsigned();;
            $table->integer('hour');
            $table->integer('total_students');

            //foriegn key
            $table->foreign('department_id')->references('id')->on('departments');
            $table->foreign('staff_id')->references('id')->on('staffs');
            $table->foreign('course_id')->references('id')->on('courses');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
