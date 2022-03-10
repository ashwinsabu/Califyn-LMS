<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Level extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('levels', function (Blueprint $table) {
            $table->id();
            $table->string('levels');
            $table->bigInteger('activity_id')->unsigned();
            $table->integer('status');
            $table->foreign('activity_id')->references('id')->on('activitys');
        });


        DB::table('levels')->insert(
            array(
                'levels' => 'College Events',
                'activity_id' => 1,
                'status' => 1
            )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'Zonal Events',
                'activity_id' => 1,
                'status' => 1
            )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'State/ University Events',
                'activity_id' => 1,
                'status' => 1
            )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'National Events',
                'activity_id' => 1,
                'status' => 1
            )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'International Events',
                'activity_id' => 1,
                'status' => 1
            )
        );
         //2
         DB::table('levels')->insert(
            array(
                'levels' => 'College Events',
                'activity_id' => 2,
                'status' => 1
            )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'Zonal Events',
                'activity_id' => 2,
                'status' => 1
            )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'State/ University Events',
                'activity_id' => 2,
                'status' => 1
            )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'National Events',
                'activity_id' => 2,
                'status' => 1
            )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'International Events',
                'activity_id' => 2,
                'status' => 1
            )
        );

        //3
        DB::table('levels')->insert(
            array(
                'levels' => 'College Events',
                'activity_id' => 3,
                'status' => 1
            )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'Zonal Events',
                'activity_id' => 3,
                'status' => 1
            )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'State/ University Events',
                'activity_id' => 3,
                'status' => 1
            )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'National Events',
                'activity_id' => 3,
                'status' => 1
            )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'International Events',
                'activity_id' => 3,
                'status' => 1
            )
        );//4
        DB::table('levels')->insert(
           array(
               'levels' => 'College Events',
               'activity_id' => 4,
               'status' => 1
           )
       );
       DB::table('levels')->insert(
           array(
               'levels' => 'Zonal Events',
               'activity_id' => 4,
               'status' => 1
           )
       );
       DB::table('levels')->insert(
           array(
               'levels' => 'State/ University Events',
               'activity_id' => 4,
               'status' => 1
           )
       );
       DB::table('levels')->insert(
           array(
               'levels' => 'National Events',
               'activity_id' => 4,
               'status' => 1
           )
       );
       DB::table('levels')->insert(
           array(
               'levels' => 'International Events',
               'activity_id' => 4,
               'status' => 1
           )
       );

       //next category
        DB::table('levels')->insert(
        array(
            'levels' => 'College Events',
            'activity_id' => 5,
            'status' => 1
        )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'Zonal Events',
                'activity_id' => 5,
                'status' => 1
            )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'State/ University Events',
                'activity_id' => 5,
                'status' => 1
            )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'National Events',
                'activity_id' => 5,
                'status' => 1
            )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'International Events',
                'activity_id' => 5,
                'status' => 1
            )
        );
         //6
         DB::table('levels')->insert(
            array(
                'levels' => 'College Events',
                'activity_id' => 6,
                'status' => 1
            )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'Zonal Events',
                'activity_id' => 6,
                'status' => 1
            )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'State/ University Events',
                'activity_id' => 6,
                'status' => 1
            )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'National Events',
                'activity_id' => 6,
                'status' => 1
            )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'International Events',
                'activity_id' => 6,
                'status' => 1
            )
        );

        //7
        DB::table('levels')->insert(
            array(
                'levels' => 'College Events',
                'activity_id' => 7,
                'status' => 1
            )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'Zonal Events',
                'activity_id' => 7,
                'status' => 1
            )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'State/ University Events',
                'activity_id' => 7,
                'status' => 1
            )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'National Events',
                'activity_id' => 7,
                'status' => 1
            )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'International Events',
                'activity_id' => 7,
                'status' => 1
            )
        );
        //8
        DB::table('levels')->insert(
           array(
               'levels' => 'College Events',
               'activity_id' => 8,
               'status' => 1
           )
       );
       DB::table('levels')->insert(
           array(
               'levels' => 'Zonal Events',
               'activity_id' => 8,
               'status' => 1
           )
       );
       DB::table('levels')->insert(
           array(
               'levels' => 'State/ University Events',
               'activity_id' => 8,
               'status' => 1
           )
       );
       DB::table('levels')->insert(
           array(
               'levels' => 'National Events',
               'activity_id' => 8,
               'status' => 1
           )
       );
       DB::table('levels')->insert(
           array(
               'levels' => 'International Events',
               'activity_id' => 8,
               'status' => 1
           )
       );
       //9
       DB::table('levels')->insert(
        array(
            'levels' => 'Chairman',
            'activity_id' => 9,
            'status' => 1
        )
       );
       DB::table('levels')->insert(
        array(
            'levels' => 'Secretary',
            'activity_id' => 9,
            'status' => 1
        )
       );
       DB::table('levels')->insert(
        array(
            'levels' => 'Other Counsil Members',
            'activity_id' => 9,
            'status' => 1
        )
       );

       //10
       DB::table('levels')->insert(
        array(
            'levels' => 'Core coorindator',
            'activity_id' => 10,
            'status' => 1
        )
       );
       DB::table('levels')->insert(
        array(
            'levels' => 'Sub Coordinator',
            'activity_id' => 10,
            'status' => 1
        )
       );
       DB::table('levels')->insert(
        array(
            'levels' => 'Volunteer',
            'activity_id' => 10,
            'status' => 1
        )
       );

       //22
       DB::table('levels')->insert(
        array(
            'levels' => 'College Events',
            'activity_id' => 22,
            'status' => 1
        )
    );
    DB::table('levels')->insert(
        array(
            'levels' => 'Zonal Events',
            'activity_id' => 22,
            'status' => 1
        )
    );
    DB::table('levels')->insert(
        array(
            'levels' => 'State/ University Events',
            'activity_id' => 22,
            'status' => 1
        )
    );
    DB::table('levels')->insert(
        array(
            'levels' => 'National Events',
            'activity_id' => 22,
            'status' => 1
        )
    );
    DB::table('levels')->insert(
        array(
            'levels' => 'International Events',
            'activity_id' => 22,
            'status' => 1
        )
    );

    //24
    DB::table('levels')->insert(
        array(
            'levels' => 'College Events',
            'activity_id' => 24,
            'status' => 1
        )
    );
    DB::table('levels')->insert(
        array(
            'levels' => 'Zonal Events',
            'activity_id' => 24,
            'status' => 1
        )
    );
    DB::table('levels')->insert(
        array(
            'levels' => 'State/ University Events',
            'activity_id' => 24,
            'status' => 1
        )
    );
    DB::table('levels')->insert(
        array(
            'levels' => 'National Events',
            'activity_id' => 24,
            'status' => 1
        )
    );
    DB::table('levels')->insert(
        array(
            'levels' => 'International Events',
            'activity_id' => 24,
            'status' => 1
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
        Schema::dropIfExists('levels');
    }
}
