<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProfessionalSelfInitiatives extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professional_self_initiatives', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('activity_id')->unsigned();
            $table->integer('points');
            $table->bigInteger('level_id')->unsigned();
            $table->integer('max_points');
            $table->integer('duration');
            $table->foreign('level_id')->references('id')->on('levels');
            $table->foreign('activity_id')->references('id')->on('activitys');
        });
         
        DB::table('professional_self_initiatives')->insert(
            array(
                "activity_id" =>  22,
                "points"=> 10,
                "level_id"=>  1,
                "max_points"=> 50,
                "duration"=> 1
                )
            );
            DB::table('professional_self_initiatives')->insert(
                array(
                    "activity_id" =>  22,
                    "points"=> 20,
                    "level_id"=>  2,
                    "max_points"=> 50,
                    "duration"=> 1
                    )
                );
            DB::table('professional_self_initiatives')->insert(
                array(
                    "activity_id" =>  22,
                    "points"=> 30,
                    "level_id"=>  3,
                    "max_points"=> 50,
                    "duration"=> 1
                    )
                );
                DB::table('professional_self_initiatives')->insert(
                    array(
                        "activity_id" =>  22,
                        "points"=> 40,
                        "level_id"=>  4,
                        "max_points"=> 50,
                        "duration"=> 1
                        )
                    );

                DB::table('professional_self_initiatives')->insert(
                    array(
                "activity_id" =>  22,
                "points"=> 50,
                "level_id"=>  5,
                "max_points"=> 50,
                "duration"=> 1
                )
                    );


                DB::table('professional_self_initiatives')->insert(
            array(
                "activity_id" =>  23,
                "points"=> 50,
                "level_id"=>  9,
                "max_points"=> 50,
                "duration"=> 1
                )
            );
            //
            DB::table('professional_self_initiatives')->insert(
            array(
                "activity_id" =>  24,
                "points"=> 10,
                "level_id"=>  1,
                "max_points"=> 50,
                "duration"=> 1
                )
            );
            DB::table('professional_self_initiatives')->insert(
                array(
                    "activity_id" =>  24,
                    "points"=> 15,
                    "level_id"=>  2,
                    "max_points"=> 50,
                    "duration"=> 1
                    )
                );
            DB::table('professional_self_initiatives')->insert(
                array(
                    "activity_id" =>  24,
                    "points"=> 20,
                    "level_id"=>  3,
                    "max_points"=> 50,
                    "duration"=> 1
                    )
                );
                DB::table('professional_self_initiatives')->insert(
                    array(
                        "activity_id" =>  24,
                        "points"=> 30,
                        "level_id"=>  4,
                        "max_points"=> 50,
                        "duration"=> 1
                        )
                    );

                DB::table('professional_self_initiatives')->insert(
                    array(
                "activity_id" =>  24,
                "points"=> 40,
                "level_id"=>  5,
                "max_points"=> 50,
                "duration"=> 1
                )
                    );

                DB::table('professional_self_initiatives')->insert(
            array(
                "activity_id" =>  25,
                "points"=> 15,
                "level_id"=>  9,
                "max_points"=> 30,
                "duration"=> 1
                )
            );

            DB::table('professional_self_initiatives')->insert(
                array(
                    "activity_id" =>  26,
                    "points"=> 6,
                    "level_id"=>  9,
                    "max_points"=> 12,
                    "duration"=> 1
                    )
                );
            DB::table('professional_self_initiatives')->insert(
            array(
                "activity_id" =>  27,
                "points"=> 20,
                "level_id"=>  9,
                "max_points"=> 40,
                "duration"=> 1
                )
            );
            DB::table('professional_self_initiatives')->insert(
            array(
                "activity_id" =>  28,
                "points"=> 8,
                "level_id"=>  9,
                "max_points"=> 16,
                "duration"=> 1
                )
            );
            DB::table('professional_self_initiatives')->insert(
            array(
                "activity_id" =>  29,
                "points"=> 10,
                "level_id"=>  9,
                "max_points"=> 20,
                "duration"=> 1
                )
            );
            DB::table('professional_self_initiatives')->insert(
            array(
                "activity_id" =>  30,
                "points"=> 4,
                "level_id"=>  9,
                "max_points"=> 8,
                "duration"=> 1
                )
            );
            DB::table('professional_self_initiatives')->insert(
                array(
                    "activity_id" =>  31,
                    "points"=> 20,
                    "level_id"=>  9,
                    "max_points"=> 20,
                    "duration"=> 1
                    )
                );
                DB::table('professional_self_initiatives')->insert(
                    array(
                        "activity_id" =>  32,
                        "points"=> 5,
                        "level_id"=>  9,
                        "max_points"=> 10,
                        "duration"=> 1
                        )
                    );
                DB::table('professional_self_initiatives')->insert(
                array(
                    "activity_id" =>  33,
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
