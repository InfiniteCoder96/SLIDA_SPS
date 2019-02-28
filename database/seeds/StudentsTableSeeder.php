<?php

use App\Student;
use App\StudentCareerDetails;
use App\StudentQualifications;
use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Student::class, 50)->create();
    }
}
