<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller {

    public function addStudent() {

        return view("admin.views.add_student");
    }

    public function listStudents() {

        echo "This is listing of students";
    }

}
