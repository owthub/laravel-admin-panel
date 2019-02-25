<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller {

    public function addStudent() {

        echo "This is add student page";
    }

    public function listStudents() {

        echo "This is listing of students";
    }

}
