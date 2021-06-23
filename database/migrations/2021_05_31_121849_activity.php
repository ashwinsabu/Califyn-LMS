<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Activity extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activitys', function (Blueprint $table) {
            $table->id();
            $table->string('activity');
            $table->bigInteger('category_id')->unsigned();
            $table->integer('status');
            $table->foreign('category_id')->references('id')->on('categories');
        });


        //Cultural Activities
        DB::table('activitys')->insert(
            array(
                'activity' => 'Participation',
                'category_id' => 1,
                'status' => 1
            )
        );
        DB::table('activitys')->insert(
            array(
                'activity' => 'First Prize',
                'category_id' => 1,
                'status' => 1
            )
        );
        DB::table('activitys')->insert(
            array(
                'activity' => 'Second Prize',
                'category_id' => 1,
                'status' => 1
            )
        );
        DB::table('activitys')->insert(
            array(
                'activity' => 'Third Prize',
                'category_id' => 1,
                'status' => 1
            )
        );

        //Sports and Games
        DB::table('activitys')->insert(
            array(
                'activity' => 'Participation',
                'category_id' => 6,
                'status' => 1
            )
        );
        DB::table('activitys')->insert(
            array(
                'activity' => 'First Prize',
                'category_id' => 6,
                'status' => 1
            )
        );
        DB::table('activitys')->insert(
            array(
                'activity' => 'Second Prize',
                'category_id' => 6,
                'status' => 1
            )
        );
        DB::table('activitys')->insert(
            array(
                'activity' => 'Third Prize',
                'category_id' => 6,
                'status' => 1
            )
        );

        //Leadership and Management
        DB::table('activitys')->insert(
            array(
                'activity' => 'Elected student representatives',
                'category_id' => 3,
                'status' => 1
            )
        );
        DB::table('activitys')->insert(
            array(
                'activity' => 'Others',
                'category_id' => 3,
                'status' => 1
            )
        );

        //Enterprenership and innovation
        DB::table('activitys')->insert(
            array(
                'activity' => 'Start-up Company–Registered legally',
                'category_id' => 2,
                'status' => 1
            )
        );
        DB::table('activitys')->insert(
            array(
                'activity' => 'Patent- Approved',
                'category_id' => 2,
                'status' => 1
            )
        );
        DB::table('activitys')->insert(
            array(
                'activity' => 'Patent- Filed',
                'category_id' => 2,
                'status' => 1
            )
        );
        DB::table('activitys')->insert(
            array(
                'activity' => 'Patent- Published',
                'category_id' => 2,
                'status' => 1
            )
        );
        DB::table('activitys')->insert(
            array(
                'activity' => 'Patent- Licensed',
                'category_id' => 2,
                'status' => 1
            )
        );
        DB::table('activitys')->insert(
            array(
                'activity' => 'Prototype developed and tested',
                'category_id' => 2,
                'status' => 1
            )
        );
        DB::table('activitys')->insert(
            array(
                'activity' => 'Innovative technologies developed and used by industries/users',
                'category_id' => 2,
                'status' => 1
            )
        );
        DB::table('activitys')->insert(
            array(
                'activity' => 'Awards for Products developed',
                'category_id' => 2,
                'status' => 1
            )
        );
        DB::table('activitys')->insert(
            array(
                'activity' => 'Got venture capital funding for innovative ideas/products.',
                'category_id' => 2,
                'status' => 1
            )
        );
        DB::table('activitys')->insert(
            array(
                'activity' => 'Startup Employment (Offering jobs to two persons not less than Rs. 15000/ - per month)',
                'category_id' => 2,
                'status' => 1
            )
        );
        DB::table('activitys')->insert(
            array(
                'activity' => 'Societal innovations',
                'category_id' => 2,
                'status' => 1
            )
        );

        //Professional Self Initiatives
        DB::table('activitys')->insert(
            array(
                'activity' => 'Tech Fest, Tech Quiz',
                'category_id' => 5,
                'status' => 1
            )
        );
        DB::table('activitys')->insert(
            array(
                'activity' => 'MOOC with final assessment certificate ',
                'category_id' => 5,
                'status' => 1
            )
        );
        DB::table('activitys')->insert(
            array(
                'activity' => 'Competitions conducted by Professional Societies - (IEEE, IET, ASME, SAE, NASA etc.)',
                'category_id' => 5,
                'status' => 1
            )
        );
        DB::table('activitys')->insert(
            array(
                'activity' => 'Attending Full time Conference/Seminars /Exhibitions/Workshop/ STTP conducted at IITs /NITs',
                'category_id' => 5,
                'status' => 1
            )
        );
        DB::table('activitys')->insert(
            array(
                'activity' => 'Attending Full time Conference/ Seminars / Exhibitions/ Workshop/ STTP conducted at KTU or its affiliated institutes',
                'category_id' => 5,
                'status' => 1
            )
        );
        DB::table('activitys')->insert(
            array(
                'activity' => 'Paper presentation/ publication at IITs /NITs',
                'category_id' => 5,
                'status' => 1
            )
        );
        DB::table('activitys')->insert(
            array(
                'activity' => 'Paper presentation/ publication at KTU or its affiliated institutes',
                'category_id' => 5,
                'status' => 1
            )
        );
        DB::table('activitys')->insert(
            array(
                'activity' => 'Poster Presentation at IITs /NITs',
                'category_id' => 5,
                'status' => 1
            )
        );
        DB::table('activitys')->insert(
            array(
                'activity' => 'Poster Presentation at KTU or its affiliated institutes',
                'category_id' => 5,
                'status' => 1
            )
        );
        DB::table('activitys')->insert(
            array(
                'activity' => 'Industrial Training/ Internship (atleast for 5 full days)',
                'category_id' => 5,
                'status' => 1
            )
        );
        DB::table('activitys')->insert(
            array(
                'activity' => 'Industrial/ Exhibition visits ',
                'category_id' => 5,
                'status' => 1
            )
        );
        DB::table('activitys')->insert(
            array(
                'activity' => 'Foreign Language Skill (TOEF/IELTS/ BEC exams etc.)',
                'category_id' => 5,
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
        Schema::dropIfExists('activitys');
    }
}
