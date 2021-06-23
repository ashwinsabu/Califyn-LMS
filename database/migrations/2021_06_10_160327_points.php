<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Points extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('points', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('activity_id')->unsigned();
            $table->integer('points');
            $table->bigInteger('level_id')->nullable()->unsigned();
            $table->bigInteger('category_id')->unsigned();
            $table->integer('max_points');
            $table->integer('duration');

            $table->foreign('level_id')->references('id')->on('levels');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('activity_id')->references('id')->on('activitys');
        });

        DB::table('points')->insert(
            array(
                "activity_id" =>  1,
                "points"=> 8,
                "category_id" => 1,
                "level_id"=>  1,
                "max_points"=> 60,
                "duration"=> 1
                )
            );
            DB::table('points')->insert(
                array(
                    "activity_id" =>  1,
                    "points"=> 12,
                    "category_id" => 1,
                    "level_id"=>  2,
                    "max_points"=> 60,
                    "duration"=> 1
                    )
                );
            DB::table('points')->insert(
                array(
                    "activity_id" =>  1,
                    "points"=> 20,
                    "category_id" => 1,
                    "level_id"=>  3,
                    "max_points"=> 60,
                    "duration"=> 1
                    )
                );
                DB::table('points')->insert(
                    array(
                        "activity_id" =>  1,
                        "points"=> 40,
                        "category_id" => 1,
                        "level_id"=>  4,
                        "max_points"=> 60,
                        "duration"=> 1
                        )
                    );

                DB::table('points')->insert(
                    array(
                "activity_id" =>  1,
                "points"=> 60,
                "category_id" => 1,
                "level_id"=>  5,
                "max_points"=> 60,
                "duration"=> 1
                )
                    );
//First prize

                DB::table('points')->insert(
            array(
                "activity_id" =>  2,
                "points"=> 18,
                "category_id" => 1,
                "level_id"=>  1,
                "max_points"=> 60,
                "duration"=> 1
                )
            );
            DB::table('points')->insert(
                array(
                    "activity_id" =>  2,
                    "points"=> 22,
                    "category_id" => 1,
                    "level_id"=>  2,
                    "max_points"=> 60,
                    "duration"=> 1
                    )
                );
            DB::table('points')->insert(
                array(
                    "activity_id" =>  2,
                    "points"=> 30,
                    "category_id" => 1,
                    "level_id"=>  3,
                    "max_points"=> 60,
                    "duration"=> 1
                    )
                );
                DB::table('points')->insert(
                    array(
                        "activity_id" =>  2,
                        "points"=> 60,
                        "category_id" => 1,
                        "level_id"=>  4,
                        "max_points"=> 80,
                        "duration"=> 1
                        )
                    );

                DB::table('points')->insert(
                    array(
                "activity_id" =>  2,
                "points"=> 80,
                "category_id" => 1,
                "level_id"=>  5,
                "max_points"=> 80,
                "duration"=> 1
                )
                    );

//Second prize

                DB::table('points')->insert(
            array(
                "activity_id" =>  3,
                "points"=> 16,
                "category_id" => 1,
                "level_id"=>  1,
                "max_points"=> 60,
                "duration"=> 1
                )
            );
            DB::table('points')->insert(
                array(
                    "activity_id" =>  3,
                    "points"=> 20,
                    "category_id" => 1,
                    "level_id"=>  2,
                    "max_points"=> 60,
                    "duration"=> 1
                    )
                );
            DB::table('points')->insert(
                array(
                    "activity_id" =>  3,
                    "points"=> 28,
                    "category_id" => 1,
                    "level_id"=>  3,
                    "max_points"=> 60,
                    "duration"=> 1
                    )
                );
                DB::table('points')->insert(
                    array(
                        "activity_id" =>  3,
                        "points"=> 56,
                        "category_id" => 1,
                        "level_id"=>  4,
                        "max_points"=> 80,
                        "duration"=> 1
                        )
                    );

                DB::table('points')->insert(
                    array(
                "activity_id" =>  3,
                "points"=> 76,
                "category_id" => 1,
                "level_id"=>  5,
                "max_points"=> 80,
                "duration"=> 1
                )
                    );

                //Third prize

                DB::table('points')->insert(
            array(
                "activity_id" =>  4,
                "points"=> 13,
                "category_id" => 1,
                "level_id"=>  1,
                "max_points"=> 60,
                "duration"=> 1
                )
            );
            DB::table('points')->insert(
                array(
                    "activity_id" =>  4,
                    "points"=> 17,
                    "category_id" => 1,
                    "level_id"=>  2,
                    "max_points"=> 60,
                    "duration"=> 1
                    )
                );
            DB::table('points')->insert(
                array(
                    "activity_id" =>  4,
                    "points"=> 25,
                    "category_id" => 1,
                    "level_id"=>  3,
                    "max_points"=> 60,
                    "duration"=> 1
                    )
                );
                DB::table('points')->insert(
                    array(
                        "activity_id" =>  4,
                        "points"=> 52,
                        "category_id" => 1,
                        "level_id"=>  4,
                        "max_points"=> 80,
                        "duration"=> 1
                        )
                    );

                DB::table('points')->insert(
                    array(
                "activity_id" =>  4,
                "points"=> 72,
                "category_id" => 1,
                "level_id"=>  5,
                "max_points"=> 80,
                "duration"=> 1
                )
                    );

        DB::table('points')->insert(
            array(
                "activity_id" =>  11,
                "points"=> 60,
                "level_id"=>  9,
                "category_id" => 2,
                "max_points"=> 60,
                "duration"=> 1
                )
            );
        DB::table('points')->insert(
            array(
                "activity_id" =>  12,
                "points"=> 50,
                "level_id"=>  9,
                "category_id" => 2,
                "level_id"=>  9,
                "max_points"=> 60,
                "duration"=> 1
                )
            );
        DB::table('points')->insert(
            array(
                "activity_id" =>  13,
                "points"=> 30,
                "level_id"=>  9,
                "category_id" => 2,
                "max_points"=> 60,
                "duration"=> 1
                )
            );
        DB::table('points')->insert(
            array(
                "activity_id" =>  14,
                "points"=> 35,
                "level_id"=>  9,
                "category_id" => 2,
                "max_points"=> 60,
                "duration"=> 1
                )
            );
        DB::table('points')->insert(
            array(
                "activity_id" =>  15,
                "points"=> 80,
                "level_id"=>  9,
                "category_id" => 2,
                "max_points"=> 80,
                "duration"=> 1
                )
            );
        DB::table('points')->insert(
            array(
                "activity_id" =>  16,
                "points"=> 60,
                "level_id"=>  9,
                "category_id" => 2,
                "max_points"=> 60,
                "duration"=> 1
                )
            );
        DB::table('points')->insert(
            array(
                "activity_id" =>  17,
                "points"=> 60,
                "level_id"=>  9,
                "category_id" => 2,
                "max_points"=> 60,
                "duration"=> 1
                )
            );
        DB::table('points')->insert(
            array(
                "activity_id" =>  18,
                "points"=> 60,
                "level_id"=>  9,
                "category_id" => 2,
                "max_points"=> 60,
                "duration"=> 1
                )
            );
        DB::table('points')->insert(
            array(
                "activity_id" =>  19,
                "points"=> 80,
                "level_id"=>  9,
                "category_id" => 2,
                "max_points"=> 80,
                "duration"=> 1
                )
            );
        DB::table('points')->insert(
            array(
                "activity_id" =>  20,
                "points"=> 80,
                "level_id"=>  9,
                "category_id" => 2,
                "max_points"=> 80,
                "duration"=> 1
                )
            );
        DB::table('points')->insert(
            array(
                "activity_id" =>  21,
                "points"=> 50,
                "level_id"=>  9,
                "category_id" => 2,
                "max_points"=> 50,
                "duration"=> 1
                )
            );

        //Leadership and management
        DB::table('points')->insert(
            array(
                "activity_id" =>  9,
                "points"=> 30,
                "level_id"=>  6,
                "category_id" => 3,
                "max_points"=> 60,
                "duration"=> 1
                )
            );
            DB::table('points')->insert(
                array(
                    "activity_id" =>  9,
                    "points"=> 25,
                    "level_id"=>  7,
                    "category_id" => 3,
                    "max_points"=> 60,
                    "duration"=> 1
                    )
                );
            DB::table('points')->insert(
                array(
                    "activity_id" =>  9,
                    "points"=> 15,
                    "level_id"=>  8,
                    "category_id" => 3,
                    "max_points"=> 60,
                    "duration"=> 1
                    )
                );
                DB::table('points')->insert(
                    array(
                        "activity_id" =>  10,
                        "points"=> 15,
                        "level_id"=>  6,
                        "category_id" => 3,
                        "max_points"=> 60,
                        "duration"=> 1
                        )
                    );

                DB::table('points')->insert(
                    array(
                "activity_id" =>  10,
                "points"=> 10,
                "level_id"=>  7,
                "category_id" => 3,
                "max_points"=> 60,
                "duration"=> 1
                )
                    );


                DB::table('points')->insert(
            array(
                "activity_id" =>  10,
                "points"=> 5,
                "level_id"=>  8,
                "category_id" => 3,
                "max_points"=> 60,
                "duration"=> 1
                )
            );

            //professional self innitiatives

            DB::table('points')->insert(
            array(
                "activity_id" =>  22,
                "points"=> 10,
                "level_id"=>  1,
                "category_id" => 5,
                "max_points"=> 50,
                "duration"=> 1
                )
            );
            DB::table('points')->insert(
                array(
                    "activity_id" =>  22,
                    "points"=> 20,
                    "level_id"=>  2,
                    "category_id" => 5,
                    "max_points"=> 50,
                    "duration"=> 1
                    )
                );
            DB::table('points')->insert(
                array(
                    "activity_id" =>  22,
                    "points"=> 30,
                    "level_id"=>  3,
                    "category_id" => 5,
                    "max_points"=> 50,
                    "duration"=> 1
                    )
                );
                DB::table('points')->insert(
                    array(
                        "activity_id" =>  22,
                        "points"=> 40,
                        "level_id"=>  4,
                        "category_id" => 5,
                        "max_points"=> 50,
                        "duration"=> 1
                        )
                    );

                DB::table('points')->insert(
                    array(
                "activity_id" =>  22,
                "points"=> 50,
                "level_id"=>  5,
                "category_id" => 5,
                "max_points"=> 50,
                "duration"=> 1
                )
                    );


                DB::table('points')->insert(
            array(
                "activity_id" =>  23,
                "points"=> 50,
                "level_id"=>  9,
                "category_id" => 5,
                "max_points"=> 50,
                "duration"=> 1
                )
            );
            //
            DB::table('points')->insert(
            array(
                "activity_id" =>  24,
                "points"=> 10,
                "level_id"=>  1,
                "category_id" => 5,
                "max_points"=> 50,
                "duration"=> 1
                )
            );
            DB::table('points')->insert(
                array(
                    "activity_id" =>  24,
                    "points"=> 15,
                    "level_id"=>  2,
                    "category_id" => 5,
                    "max_points"=> 50,
                    "duration"=> 1
                    )
                );
            DB::table('points')->insert(
                array(
                    "activity_id" =>  24,
                    "points"=> 20,
                    "level_id"=>  3,
                    "category_id" => 5,
                    "max_points"=> 50,
                    "duration"=> 1
                    )
                );
                DB::table('points')->insert(
                    array(
                        "activity_id" =>  24,
                        "points"=> 30,
                        "level_id"=>  4,
                        "category_id" => 5,
                        "max_points"=> 50,
                        "duration"=> 1
                        )
                    );

                DB::table('points')->insert(
                    array(
                "activity_id" =>  24,
                "points"=> 40,
                "level_id"=>  5,
                "category_id" => 5,
                "max_points"=> 50,
                "duration"=> 1
                )
                    );

                DB::table('points')->insert(
            array(
                "activity_id" =>  25,
                "points"=> 15,
                "level_id"=>  9,
                "category_id" => 5,
                "max_points"=> 30,
                "duration"=> 1
                )
            );

            DB::table('points')->insert(
                array(
                    "activity_id" =>  26,
                    "points"=> 6,
                    "level_id"=>  9,
                    "category_id" => 5,
                    "max_points"=> 12,
                    "duration"=> 1
                    )
                );
            DB::table('points')->insert(
            array(
                "activity_id" =>  27,
                "points"=> 20,
                "level_id"=>  9,
                "category_id" => 5,
                "max_points"=> 40,
                "duration"=> 1
                )
            );
            DB::table('points')->insert(
            array(
                "activity_id" =>  28,
                "points"=> 8,
                "level_id"=>  9,
                "category_id" => 5,
                "max_points"=> 16,
                "duration"=> 1
                )
            );
            DB::table('points')->insert(
            array(
                "activity_id" =>  29,
                "points"=> 10,
                "level_id"=>  9,
                "category_id" => 5,
                "max_points"=> 20,
                "duration"=> 1
                )
            );
            DB::table('points')->insert(
            array(
                "activity_id" =>  30,
                "points"=> 4,
                "level_id"=>  9,
                "category_id" => 5,
                "max_points"=> 8,
                "duration"=> 1
                )
            );
            DB::table('points')->insert(
                array(
                    "activity_id" =>  31,
                    "points"=> 20,
                    "level_id"=>  9,
                    "category_id" => 5,
                    "max_points"=> 20,
                    "duration"=> 1
                    )
                );
                DB::table('points')->insert(
                    array(
                        "activity_id" =>  32,
                        "points"=> 5,
                        "level_id"=>  9,
                        "category_id" => 5,
                        "max_points"=> 10,
                        "duration"=> 1
                        )
                    );
                DB::table('points')->insert(
                array(
                    "activity_id" =>  33,
                    "points"=> 50,
                    "level_id"=>  9,
                    "category_id" => 5,
                    "max_points"=> 50,
                    "duration"=> 1
                    )
                );

            //sports and games

            DB::table('points')->insert(
            array(
                "activity_id" =>  5,
                "points"=> 8,
                "level_id"=>  1,
                "category_id" => 6,
                "max_points"=> 60,
                "duration"=> 1
                )
            );
            DB::table('points')->insert(
                array(
                    "activity_id" =>  5,
                    "points"=> 15,
                    "level_id"=>  2,
                    "category_id" => 6,
                    "max_points"=> 60,
                    "duration"=> 1
                    )
                );
            DB::table('points')->insert(
                array(
                    "activity_id" =>  5,
                    "points"=> 25,
                    "level_id"=>  3,
                    "category_id" => 6,
                    "max_points"=> 60,
                    "duration"=> 1
                    )
                );
                DB::table('points')->insert(
                    array(
                        "activity_id" =>  5,
                        "points"=> 40,
                        "level_id"=>  4,
                        "category_id" => 6,
                        "max_points"=> 60,
                        "duration"=> 1
                        )
                    );

                DB::table('points')->insert(
                    array(
                "activity_id" =>  5,
                "points"=> 60,
                "level_id"=>  5,
                "category_id" => 6,
                "max_points"=> 60,
                "duration"=> 1
                )
                    );
//First prize

                DB::table('points')->insert(
            array(
                "activity_id" =>  6,
                "points"=> 18,
                "level_id"=>  1,
                "category_id" => 6,
                "max_points"=> 60,
                "duration"=> 1
                )
            );
            DB::table('points')->insert(
                array(
                    "activity_id" =>  6,
                    "points"=> 25,
                    "level_id"=>  2,
                    "category_id" => 6,
                    "max_points"=> 60,
                    "duration"=> 1
                    )
                );
            DB::table('points')->insert(
                array(
                    "activity_id" =>  6,
                    "points"=> 35,
                    "level_id"=>  3,
                    "category_id" => 6,
                    "max_points"=> 60,
                    "duration"=> 1
                    )
                );
                DB::table('points')->insert(
                    array(
                        "activity_id" =>  6,
                        "points"=> 60,
                        "level_id"=>  4,
                        "category_id" => 6,
                        "max_points"=> 80,
                        "duration"=> 1
                        )
                    );

                DB::table('points')->insert(
                    array(
                "activity_id" =>  6,
                "points"=> 80,
                "level_id"=>  5,
                "category_id" => 6,
                "max_points"=> 80,
                "duration"=> 1
                )
                    );

//Second prize

                DB::table('points')->insert(
            array(
                "activity_id" =>  7,
                "points"=> 16,
                "level_id"=>  1,
                "category_id" => 6,
                "max_points"=> 60,
                "duration"=> 1
                )
            );
            DB::table('points')->insert(
                array(
                    "activity_id" =>  7,
                    "points"=> 23,
                    "level_id"=>  2,
                    "category_id" => 6,
                    "max_points"=> 60,
                    "duration"=> 1
                    )
                );
            DB::table('points')->insert(
                array(
                    "activity_id" =>  7,
                    "points"=> 33,
                    "level_id"=>  3,
                    "category_id" => 6,
                    "max_points"=> 60,
                    "duration"=> 1
                    )
                );
                DB::table('points')->insert(
                    array(
                        "activity_id" =>  7,
                        "points"=> 56,
                        "level_id"=>  4,
                        "category_id" => 6,
                        "max_points"=> 80,
                        "duration"=> 1
                        )
                    );

                DB::table('points')->insert(
                    array(
                "activity_id" =>  7,
                "points"=> 76,
                "level_id"=>  5,
                "category_id" => 6,
                "max_points"=> 80,
                "duration"=> 1
                )
                    );

                //Third prize

                DB::table('points')->insert(
            array(
                "activity_id" =>  8,
                "points"=> 13,
                "level_id"=>  1,
                "category_id" => 6,
                "max_points"=> 60,
                "duration"=> 1
                )
            );
            DB::table('points')->insert(
                array(
                    "activity_id" =>  8,
                    "points"=> 20,
                    "level_id"=>  2,
                    "category_id" => 6,
                    "max_points"=> 60,
                    "duration"=> 1
                    )
                );
            DB::table('points')->insert(
                array(
                    "activity_id" =>  8,
                    "points"=> 30,
                    "level_id"=>  3,
                    "category_id" => 6,
                    "max_points"=> 60,
                    "duration"=> 1
                    )
                );
                DB::table('points')->insert(
                    array(
                        "activity_id" =>  8,
                        "points"=> 52,
                        "level_id"=>  4,
                        "category_id" => 6,
                        "max_points"=> 80,
                        "duration"=> 1
                        )
                    );

                DB::table('points')->insert(
                    array(
                "activity_id" =>  8,
                "points"=> 72,
                "level_id"=>  5,
                "category_id" => 6,
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
        Schema::dropIfExists('points');
    }
}
