<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Datatables;
use DB;

class StudentController extends Controller {

    public function addStudent() {

        return view("admin.views.add_student");
    }

    public function listStudents() {

        return view("admin.views.list_students");
    }

    public function listAllStudents() {
        
        $students_query = DB::table("tbl_students as student")
                ->select("student.*", "gender.type as gender_name")
                ->leftJoin("tbl_genders as gender", "gender.id", "=", "student.gender_id")
                ->where(["student.status" => 1])
                ->get()
        ;

        return Datatables::of($students_query)
                        ->editColumn("profile_photo", function($students_query) {

                            return '<img src="' . $students_query->profile_photo . '"/>';
                        })
                        ->editColumn("gender", function($students_query) {

                            return ucfirst($students_query->gender_name);
                        })
                        ->editColumn("action_btns", function($students_query) {

                            return '<a href="#" class="btn btn-info class-section-edit" data-id="' . $students_query->id . '">Edit</a><a href="#" class="btn btn-danger class-section-delete" data-id="' . $students_query->id . '">Delete</a>';
                        })
                        ->rawColumns(["action_btns", "profile_photo"])
                        ->make(true);
    }

}
