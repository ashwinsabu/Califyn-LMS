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
            $table->bigInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');
        });


        DB::table('levels')->insert(
            array(
                'levels' => 'College Events',
                'category_id' => 1
            )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'Zonal Events',
                'category_id' => 1
            )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'State/ University Events',
                'category_id' => 1
            )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'National Events',
                'category_id' => 1
            )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'International Events',
                'category_id' => 1
            )
        );

        DB::table('levels')->insert(
            array(
                'levels' => 'Core coordinator',
                'category_id' => 3
            )
        );

        DB::table('levels')->insert(
            array(
                'levels' => 'Sub coordinator',
                'category_id' => 3
            )
        );

        DB::table('levels')->insert(
            array(
                'levels' => 'Volunteer',
                'category_id' => 3
            )
        );
        DB::table('levels')->insert(
            array(
                'levels' => 'Nil',
                'category_id' => 2
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
