<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;

class Staff extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('password');
            $table->string('designation');
            $table->integer('yop');
            $table->string('section');
            $table->integer('status');
            $table->string('code')->nullable();
            $table->bigInteger('department_id')->unsigned();
            $table->foreign('department_id')->references('id')->on('departments');
            $table->string('email')->unique();
            $table->string('role');
        });
        DB::table('staffs')->insert(
            array(
                'name' => 'Sijo Cheriyan',
                'password'=>Hash::make('admin'),
                'yop'=>1222,
                'section'=>'A',
                'department_id'=>1,
                'status' =>1,
                'designation'=>'Advisor',
                'email'=>'admin',
                'role'=>'admin'
                
            )
        );
        
 DB::table('staffs')->insert(
            array(
                'name' => 'V Jayakrishnan',
                'password'=>'aa',
                'yop'=>1222,
                'section'=>'A',
                'department_id'=>1,
                'status' =>1,
                'designation'=>'Advisor',
                'email'=>'abeys',
                'role'=>'role'
                
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
        //
    }
}
