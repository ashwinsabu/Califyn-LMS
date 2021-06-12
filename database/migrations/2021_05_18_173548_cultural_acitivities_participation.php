<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CulturalAcitivitiesParticipation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cultural_acitivities_participations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('activity_id')->unsigned();
            $table->integer('points');
            $table->bigInteger('level_id')->unsigned();
            $table->integer('max_points');
            $table->integer('duration');
            $table->foreign('level_id')->references('id')->on('levels');
            $table->foreign('activity_id')->references('id')->on('activitys');
        });
         
        DB::table('cultural_acitivities_participations')->insert(
            array(
                "activity_id" =>  1,
                "points"=> 8,
                "level_id"=>  1,
                "max_points"=> 60,
                "duration"=> 1
                )
            );
            DB::table('cultural_acitivities_participations')->insert(
                array(
                    "activity_id" =>  1,
                    "points"=> 12,
                    "level_id"=>  2,
                    "max_points"=> 60,
                    "duration"=> 1
                    )
                );
            DB::table('cultural_acitivities_participations')->insert(
                array(
                    "activity_id" =>  1,
                    "points"=> 20,
                    "level_id"=>  3,
                    "max_points"=> 60,
                    "duration"=> 1
                    )
                );
                DB::table('cultural_acitivities_participations')->insert(
                    array(
                        "activity_id" =>  1,
                        "points"=> 40,
                        "level_id"=>  4,
                        "max_points"=> 60,
                        "duration"=> 1
                        )
                    );

                DB::table('cultural_acitivities_participations')->insert(
                    array(
                "activity_id" =>  1,
                "points"=> 60,
                "level_id"=>  5,
                "max_points"=> 60,
                "duration"=> 1
                )
                    );
//First prize

                DB::table('cultural_acitivities_participations')->insert(
            array(
                "activity_id" =>  2,
                "points"=> 18,
                "level_id"=>  1,
                "max_points"=> 60,
                "duration"=> 1
                )
            );
            DB::table('cultural_acitivities_participations')->insert(
                array(
                    "activity_id" =>  2,
                    "points"=> 22,
                    "level_id"=>  2,
                    "max_points"=> 60,
                    "duration"=> 1
                    )
                );
            DB::table('cultural_acitivities_participations')->insert(
                array(
                    "activity_id" =>  2,
                    "points"=> 30,
                    "level_id"=>  3,
                    "max_points"=> 60,
                    "duration"=> 1
                    )
                );
                DB::table('cultural_acitivities_participations')->insert(
                    array(
                        "activity_id" =>  2,
                        "points"=> 60,
                        "level_id"=>  4,
                        "max_points"=> 80,
                        "duration"=> 1
                        )
                    );

                DB::table('cultural_acitivities_participations')->insert(
                    array(
                "activity_id" =>  2,
                "points"=> 80,
                "level_id"=>  5,
                "max_points"=> 80,
                "duration"=> 1
                )
                    );

//Second prize

                DB::table('cultural_acitivities_participations')->insert(
            array(
                "activity_id" =>  3,
                "points"=> 16,
                "level_id"=>  1,
                "max_points"=> 60,
                "duration"=> 1
                )
            );
            DB::table('cultural_acitivities_participations')->insert(
                array(
                    "activity_id" =>  3,
                    "points"=> 20,
                    "level_id"=>  2,
                    "max_points"=> 60,
                    "duration"=> 1
                    )
                );
            DB::table('cultural_acitivities_participations')->insert(
                array(
                    "activity_id" =>  3,
                    "points"=> 28,
                    "level_id"=>  3,
                    "max_points"=> 60,
                    "duration"=> 1
                    )
                );
                DB::table('cultural_acitivities_participations')->insert(
                    array(
                        "activity_id" =>  3,
                        "points"=> 56,
                        "level_id"=>  4,
                        "max_points"=> 80,
                        "duration"=> 1
                        )
                    );

                DB::table('cultural_acitivities_participations')->insert(
                    array(
                "activity_id" =>  3,
                "points"=> 76,
                "level_id"=>  5,
                "max_points"=> 80,
                "duration"=> 1
                )
                    );

                //Third prize

                DB::table('cultural_acitivities_participations')->insert(
            array(
                "activity_id" =>  4,
                "points"=> 13,
                "level_id"=>  1,
                "max_points"=> 60,
                "duration"=> 1
                )
            );
            DB::table('cultural_acitivities_participations')->insert(
                array(
                    "activity_id" =>  4,
                    "points"=> 17,
                    "level_id"=>  2,
                    "max_points"=> 60,
                    "duration"=> 1
                    )
                );
            DB::table('cultural_acitivities_participations')->insert(
                array(
                    "activity_id" =>  4,
                    "points"=> 25,
                    "level_id"=>  3,
                    "max_points"=> 60,
                    "duration"=> 1
                    )
                );
                DB::table('cultural_acitivities_participations')->insert(
                    array(
                        "activity_id" =>  4,
                        "points"=> 52,
                        "level_id"=>  4,
                        "max_points"=> 80,
                        "duration"=> 1
                        )
                    );

                DB::table('cultural_acitivities_participations')->insert(
                    array(
                "activity_id" =>  4,
                "points"=> 72,
                "level_id"=>  5,
                "max_points"=> 80,
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
