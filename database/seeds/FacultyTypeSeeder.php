<?php

use Illuminate\Database\Seeder;
use App\Models\FacultyType;

class FacultyTypeSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $data = array(
            array("type" => "teaching"),
            array("type" => "non teaching"),
            array("type" => "lab master"),
            array("type" => "sports teacher"),
        );

        FacultyType::insert($data);
    }

}
