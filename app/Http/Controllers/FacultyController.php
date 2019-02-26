<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller {

    public function addFaculty() {

        return view("admin.views.add_faculty");
    }

    public function listFaculties() {

        echo "This is listing of faculties";
    }

}
