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
            $table->integer('status');
        });

        DB::table('categories')->insert(
            array(
                'categories' => 'Cultural Acitivities Participation',
                'status' => 1
            )
        );
        DB::table('categories')->insert(
            array(
                'categories' => 'Entrepreneurship Innovation',
                'status' => 1
            )
        );
        DB::table('categories')->insert(
            array(
                'categories' => 'Leadership Management',
                'status' => 1
            )
        );
        DB::table('categories')->insert(
            array(
                'categories' => 'National Initiative',
                'status' => 1
            )
        );
        DB::table('categories')->insert(
            array(
                'categories' => 'Professional Self Initiative',
                'status' => 1
            )
        );
        DB::table('categories')->insert(
            array(
                'categories' => 'Sports Game',
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
        Schema::dropIfExists('categories');
    }
}
