<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course1 = new Course();
        $course2 = new Course();
        $course3 = new Course();

        $course1->name = "Laravel 1";
        $course2->name = "Laravel 2";
        $course3->name = "Laravel 3";

        $course1->description = "Best PHP Framework";
        $course2->description = "Best PHP Framework";
        $course3->description = "Best PHP Framework";

        $course1->category = "Web Development";
        $course2->category = "Web Development";
        $course3->category = "Web Development";

        $course1->save();
        $course2->save();
        $course3->save();
    }
}
