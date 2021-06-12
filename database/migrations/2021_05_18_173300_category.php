<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Category extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('categories');
            $table->string('code');
        });

        DB::table('categories')->insert(
            array(
                'categories' => 'Cultural Acitivities Participation',
                'code' => 'cat'
            )
        );
        DB::table('categories')->insert(
            array(
                'categories' => 'Entrepreneurship Innovation',
                'code' => 'ei'
            )
        );
        DB::table('categories')->insert(
            array(
                'categories' => 'Leadership Management',
                'code' => 'lm'
            )
        );
        DB::table('categories')->insert(
            array(
                'categories' => 'National Initiative',
                'code' => 'ni'
            )
        );
        DB::table('categories')->insert(
            array(
                'categories' => 'Professional Self Initiative',
                'code' => 'psi'
            )
        );
        DB::table('categories')->insert(
            array(
                'categories' => 'Sports Game',
                'code' => 'sg'
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
