<?php

use Illuminate\Database\Seeder;

class FacultySeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        factory(App\Models\Faculty::class, 50)->create();
    }

}
