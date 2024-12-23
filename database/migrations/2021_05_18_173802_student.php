<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Student extends Migration
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
            $table->string('name');
            $table->string('register_no')->unique();
            $table->string('password');
            $table->bigInteger('department_id')->unsigned();
            $table->integer('yop');
            $table->string('email')->unique();
            $table->integer('semester');
            $table->integer('status');
            $table->integer('c_count');
            $table->string('section');
            $table->bigInteger('staff_id')->unsigned()->nullable();
            $table->integer('points')->nullable();
            $table->integer('points2')->nullable();
            

            $table->foreign('department_id')->references('id')->on('departments');
            $table->foreign('staff_id')->references('id')->on('staffs');
            
        });

        DB::table('students')->insert(
            array(
                'name' => 'Ellixtra',
                'register_no'=>'aa',
                'password'=>"dsf",
                'department_id'=>1,
                'status'=>1,
                'yop'=>2000,
                'c_count'=>1,
                'email'=>'level',
                'semester'=>5,
                'section'=>'a',
                'staff_id'=>1,
                'points'=>12,
                'points2'=>0
                
            )
        );
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
}
