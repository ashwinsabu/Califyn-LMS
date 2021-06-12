<?php

use Illuminate\Database\Seeder;
use App\student;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // Let's truncate our existing records to start from scratch.
    //    student::truncate();

       $faker = \Faker\Factory::create();
       $abc=1;

       // And now, let's create a few students in our database:
       for ($i = 0; $i < 50; $i++) {
           student::create([
               'name' => $faker->name,
               'register_no' => $faker->postcode,
               'password' => $faker->password,
               'department_id' => $abc,
               'yop' => $faker->year,
               'email' => $faker->email,
               'semester' => $faker->name,
               'staff_id' => $abc,
               'points' => 10,
           ]);
       }
    }
}
