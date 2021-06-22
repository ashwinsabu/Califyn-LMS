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
            $table->foreign('activity_id')->references('id')->on('activitys');
        });


        DB::table('levels')->insert(
            array(
                'levels' => 'College Events',
                'activity_id' => 1
            )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'Zonal Events',
                'activity_id' => 1
            )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'State/ University Events',
                'activity_id' => 1
            )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'National Events',
                'activity_id' => 1
            )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'International Events',
                'activity_id' => 1
            )
        );
         //2
         DB::table('levels')->insert(
            array(
                'levels' => 'College Events',
                'activity_id' => 2
            )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'Zonal Events',
                'activity_id' => 2
            )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'State/ University Events',
                'activity_id' => 2
            )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'National Events',
                'activity_id' => 2
            )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'International Events',
                'activity_id' => 2
            )
        );

        //3
        DB::table('levels')->insert(
            array(
                'levels' => 'College Events',
                'activity_id' => 3
            )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'Zonal Events',
                'activity_id' => 3
            )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'State/ University Events',
                'activity_id' => 3
            )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'National Events',
                'activity_id' => 3
            )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'International Events',
                'activity_id' => 3
            )
        );//4
        DB::table('levels')->insert(
           array(
               'levels' => 'College Events',
               'activity_id' => 4
           )
       );
       DB::table('levels')->insert(
           array(
               'levels' => 'Zonal Events',
               'activity_id' => 4
           )
       );
       DB::table('levels')->insert(
           array(
               'levels' => 'State/ University Events',
               'activity_id' => 4
           )
       );
       DB::table('levels')->insert(
           array(
               'levels' => 'National Events',
               'activity_id' => 4
           )
       );
       DB::table('levels')->insert(
           array(
               'levels' => 'International Events',
               'activity_id' => 4
           )
       );

       //next category
        DB::table('levels')->insert(
        array(
            'levels' => 'College Events',
            'activity_id' => 5
        )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'Zonal Events',
                'activity_id' => 5
            )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'State/ University Events',
                'activity_id' => 5
            )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'National Events',
                'activity_id' => 5
            )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'International Events',
                'activity_id' => 5
            )
        );
         //6
         DB::table('levels')->insert(
            array(
                'levels' => 'College Events',
                'activity_id' => 6
            )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'Zonal Events',
                'activity_id' => 6
            )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'State/ University Events',
                'activity_id' => 6
            )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'National Events',
                'activity_id' => 6
            )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'International Events',
                'activity_id' => 6
            )
        );

        //7
        DB::table('levels')->insert(
            array(
                'levels' => 'College Events',
                'activity_id' => 7
            )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'Zonal Events',
                'activity_id' => 7
            )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'State/ University Events',
                'activity_id' => 7
            )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'National Events',
                'activity_id' => 7
            )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'International Events',
                'activity_id' => 7
            )
        );
        //8
        DB::table('levels')->insert(
           array(
               'levels' => 'College Events',
               'activity_id' => 8
           )
       );
       DB::table('levels')->insert(
           array(
               'levels' => 'Zonal Events',
               'activity_id' => 8
           )
       );
       DB::table('levels')->insert(
           array(
               'levels' => 'State/ University Events',
               'activity_id' => 8
           )
       );
       DB::table('levels')->insert(
           array(
               'levels' => 'National Events',
               'activity_id' => 8
           )
       );
       DB::table('levels')->insert(
           array(
               'levels' => 'International Events',
               'activity_id' => 8
           )
       );
       //9
       DB::table('levels')->insert(
        array(
            'levels' => 'Chairman',
            'activity_id' => 9
        )
       );
       DB::table('levels')->insert(
        array(
            'levels' => 'Secretary',
            'activity_id' => 9
        )
       );
       DB::table('levels')->insert(
        array(
            'levels' => 'Other Counsil Members',
            'activity_id' => 9
        )
       );

       //10
       DB::table('levels')->insert(
        array(
            'levels' => 'Core coorindator',
            'activity_id' => 10
        )
       );
       DB::table('levels')->insert(
        array(
            'levels' => 'Sub Coordinator',
            'activity_id' => 10
        )
       );
       DB::table('levels')->insert(
        array(
            'levels' => 'Volunteer',
            'activity_id' => 10
        )
       );

       //22
       DB::table('levels')->insert(
        array(
            'levels' => 'College Events',
            'activity_id' => 22
        )
    );
    DB::table('levels')->insert(
        array(
            'levels' => 'Zonal Events',
            'activity_id' => 22
        )
    );
    DB::table('levels')->insert(
        array(
            'levels' => 'State/ University Events',
            'activity_id' => 22
        )
    );
    DB::table('levels')->insert(
        array(
            'levels' => 'National Events',
            'activity_id' => 22
        )
    );
    DB::table('levels')->insert(
        array(
            'levels' => 'International Events',
            'activity_id' => 22
        )
    );

    //24
    DB::table('levels')->insert(
        array(
            'levels' => 'College Events',
            'activity_id' => 24
        )
    );
    DB::table('levels')->insert(
        array(
            'levels' => 'Zonal Events',
            'activity_id' => 24
        )
    );
    DB::table('levels')->insert(
        array(
            'levels' => 'State/ University Events',
            'activity_id' => 24
        )
    );
    DB::table('levels')->insert(
        array(
            'levels' => 'National Events',
            'activity_id' => 24
        )
    );
    DB::table('levels')->insert(
        array(
            'levels' => 'International Events',
            'activity_id' => 24
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
