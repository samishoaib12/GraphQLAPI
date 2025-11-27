<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
//use App\Student;
use App\Models\Student;
class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create 10 students
      //  factory(Student::class, 10)->create();
       Student::factory()->count(10)->create();
    }
}