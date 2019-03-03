<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //$this->call(ClassSectionSeeder::class);
        //$this->call(ClassSeeder::class);
        //$this->call(FacultyTypeSeeder::class);
       // $this->call(GenderSeeder::class);
        //$this->call(FacultySeeder::class);
        $this->call(StudentSeeder::class);
    }
}
