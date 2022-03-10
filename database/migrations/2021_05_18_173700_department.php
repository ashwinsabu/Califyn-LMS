<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Department extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->string('department_name');
            });


            DB::table('departments')->insert(
                array(
                    'department_name' => 'Computer Science and Engineerng',
                )
            );
            DB::table('departments')->insert(
                array(
                    'department_name' => 'Mechanical Engineering',
                )
            );
            DB::table('departments')->insert(
                array(
                    'department_name' => 'Civil Engineering',
                )
            );
            DB::table('departments')->insert(
                        array(
                            'department_name' => 'Food Technology',
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
        Schema::dropIfExists('departments');
    }
}
