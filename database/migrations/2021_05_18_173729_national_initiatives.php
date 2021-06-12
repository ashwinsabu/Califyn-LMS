<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NationalInitiatives extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('national_initiatives', function (Blueprint $table) {
            $table->id();
            $table->string('activity');
            $table->integer('point');
            $table->integer('max_point');
            $table->integer('duration');
        });

        DB::table('national_initiatives')->insert(
            array(
                'activity' => 'NSS',
                'point' => 60,
                'max_point' => 80,
                'duration' => 24,
            )
        );
        DB::table('national_initiatives')->insert(
            array(
                'activity' => 'NCC',
                'point' => 60,
                'max_point' => 80,
                'duration' => 24,
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
