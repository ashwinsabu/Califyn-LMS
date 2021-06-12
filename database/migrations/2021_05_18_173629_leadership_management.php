<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LeadershipManagement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leadership_managements', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('activity_id')->unsigned();
            $table->integer('points');
            $table->bigInteger('level_id')->unsigned();
            $table->integer('max_points');
            $table->integer('duration');
            $table->foreign('level_id')->references('id')->on('levels');
            $table->foreign('activity_id')->references('id')->on('activitys');
        });
         
        DB::table('leadership_managements')->insert(
            array(
                "activity_id" =>  9,
                "points"=> 30,
                "level_id"=>  6,
                "max_points"=> 60,
                "duration"=> 1
                )
            );
            DB::table('leadership_managements')->insert(
                array(
                    "activity_id" =>  9,
                    "points"=> 25,
                    "level_id"=>  7,
                    "max_points"=> 60,
                    "duration"=> 1
                    )
                );
            DB::table('leadership_managements')->insert(
                array(
                    "activity_id" =>  9,
                    "points"=> 15,
                    "level_id"=>  8,
                    "max_points"=> 60,
                    "duration"=> 1
                    )
                );
                DB::table('leadership_managements')->insert(
                    array(
                        "activity_id" =>  10,
                        "points"=> 15,
                        "level_id"=>  6,
                        "max_points"=> 60,
                        "duration"=> 1
                        )
                    );

                DB::table('leadership_managements')->insert(
                    array(
                "activity_id" =>  10,
                "points"=> 10,
                "level_id"=>  7,
                "max_points"=> 60,
                "duration"=> 1
                )
                    );


                DB::table('leadership_managements')->insert(
            array(
                "activity_id" =>  10,
                "points"=> 5,
                "level_id"=>  8,
                "max_points"=> 60,
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
