<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Certificate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image')->nullable();
            $table->bigInteger('student_id')->unsigned();
            $table->integer('prize');
            $table->string('organized_by');
            $table->integer('day');
            $table->integer('semester');
            $table->integer('points');
            $table->integer('status');
            $table->bigInteger('activity_id')->unsigned();
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('staff_id')->unsigned();
            $table->bigInteger('level_id')->unsigned();
            $table->string('about')->nullable();

            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('activity_id')->references('id')->on('activitys');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('level_id')->references('id')->on('levels');
            $table->foreign('staff_id')->references('id')->on('staffs');
        });

        // DB::table('certificates')->insert(
        //     array(
        //         'name' => 'Ellixtra',
        //         'image'=>'aa',
        //         'student_id'=>1,
        //         'prize'=>1,
        //         'organized_by'=>'A',
        //         'semester'=>5,
        //         'activity_id'=> 1,
        //         'level_id'=>1,
        //         'category_id'=>1,
        //         'status'=>0,
        //         'points'=>12,
        //         'day'=>12,
        //         'staff_id'=>1
                
        //     )
        // );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certificates');
    }
}
