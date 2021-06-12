<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EntrepreneurshipInnovation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrepreneurship_innovations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('activity_id')->unsigned();
            $table->integer('points');
            $table->bigInteger('level_id')->unsigned();
            $table->integer('max_points');
            $table->integer('duration');
            $table->foreign('level_id')->references('id')->on('levels');
            $table->foreign('activity_id')->references('id')->on('activitys');
        });

        DB::table('entrepreneurship_innovations')->insert(
            array(
                "activity_id" =>  11,
                "points"=> 60,
                "level_id"=>  9,
                "max_points"=> 60,
                "duration"=> 1
                )
            );
        DB::table('entrepreneurship_innovations')->insert(
            array(
                "activity_id" =>  12,
                "points"=> 50,
                "level_id"=>  9,
                "level_id"=>  9,
                "max_points"=> 60,
                "duration"=> 1
                )
            );
        DB::table('entrepreneurship_innovations')->insert(
            array(
                "activity_id" =>  13,
                "points"=> 30,
                "level_id"=>  9,
                "max_points"=> 60,
                "duration"=> 1
                )
            );
        DB::table('entrepreneurship_innovations')->insert(
            array(
                "activity_id" =>  14,
                "points"=> 35,
                "level_id"=>  9,
                "max_points"=> 60,
                "duration"=> 1
                )
            );
        DB::table('entrepreneurship_innovations')->insert(
            array(
                "activity_id" =>  15,
                "points"=> 80,
                "level_id"=>  9,
                "max_points"=> 80,
                "duration"=> 1
                )
            );
        DB::table('entrepreneurship_innovations')->insert(
            array(
                "activity_id" =>  16,
                "points"=> 60,
                "level_id"=>  9,
                "max_points"=> 60,
                "duration"=> 1
                )
            );
        DB::table('entrepreneurship_innovations')->insert(
            array(
                "activity_id" =>  17,
                "points"=> 60,
                "level_id"=>  9,
                "max_points"=> 60,
                "duration"=> 1
                )
            );
        DB::table('entrepreneurship_innovations')->insert(
            array(
                "activity_id" =>  18,
                "points"=> 60,
                "level_id"=>  9,
                "max_points"=> 60,
                "duration"=> 1
                )
            );
        DB::table('entrepreneurship_innovations')->insert(
            array(
                "activity_id" =>  19,
                "points"=> 80,
                "level_id"=>  9,
                "max_points"=> 80,
                "duration"=> 1
                )
            );
        DB::table('entrepreneurship_innovations')->insert(
            array(
                "activity_id" =>  20,
                "points"=> 80,
                "level_id"=>  9,
                "max_points"=> 80,
                "duration"=> 1
                )
            );
        DB::table('entrepreneurship_innovations')->insert(
            array(
                "activity_id" =>  21,
                "points"=> 50,
                "level_id"=>  9,
                "max_points"=> 50,
                "duration"=> 1
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
