<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Datatables;
use DB;
use App\Models\Gender;
use Validator;
use App\Models\StudentClass;
use App\Models\SchoolClass;

class StudentController extends Controller {

    public function addStudent() {

        $genders = Gender::where(["status" => 1])->get();
        $sections = StudentClass::where(["status" => 1])->get();
        $classes = SchoolClass::where(["status" => 1])->get();

        return view("admin.views.add_student", ["genders" => $genders, "sections" => $sections, "classes" => $classes]);
    }

    public function listStudents() {

        return view("admin.views.list_students");
    }

    public function listAllStudents() {

        $students_query = DB::table("tbl_students as student")
                ->select("student.*", "gender.type as gender_name", "class.name as class_name", "section.section as section_name")
                ->leftJoin("tbl_genders as gender", "gender.id", "=", "student.gender_id")
                ->leftJoin("tbl_classes as class", "class.id", "=", "student.class_id")
                ->leftJoin("tbl_class_sections as section", "section.id", "=", "student.section_id")
                ->where(["student.status" => 1])
                ->get()
        ;

        return Datatables::of($students_query)
                        ->editColumn("profile_photo", function($students_query) {

                            return '<img src="' . $students_query->profile_photo . '" style="height:100px;width:100px;"/>';
                        })
                        ->editColumn("class_section", function($students_query) {

                            return $students_query->class_name . " / " . $students_query->section_name;
                        })
                        ->editColumn("gender", function($students_query) {

                            return ucfirst($students_query->gender_name);
                        })
                        ->editColumn("action_btns", function($students_query) {

                            return '<a href="#" class="btn btn-info class-section-edit" data-id="' . $students_query->id . '">Edit</a>'
                                    . '<a href="#" class="btn btn-danger btn-student-delete" data-id="' . $students_query->id . '">Delete</a>';
                        })
                        ->rawColumns(["action_btns", "profile_photo"])
                        ->make(true);
    }

    public function saveStudent(Request $request) {

        $validator = Validator::make(array(
                    "registration_no" => $request->reg_no,
                    "student_name" => $request->student_name,
                    "student_email" => $request->student_email,
                    "roll_no" => $request->roll_no,
                    "student_phone" => $request->student_phone,
                    "student_address" => $request->student_address,
                    "father_name" => $request->father_name,
                    "mother_name" => $request->mother_name,
                    "student_age" => $request->student_age,
                        ), array(
                    "registration_no" => "required",
                    "student_name" => "required",
                    "student_email" => "required",
                    "roll_no" => "required",
                    "student_phone" => "required",
                    "student_address" => "required",
                    "father_name" => "required",
                    "mother_name" => "required",
                    "student_age" => "required",
        ));

        if ($validator->fails()) {

            return redirect("add-student")->withErrors($validator)->withInput();
        } else {

            $student = new Student;

            $student->reg_no = $request->reg_no;
            $student->gender_id = $request->dd_gender;
            $student->name = $request->student_name;
            $student->email = $request->student_email;
            $student->roll_no = $request->roll_no;
            $student->phone_no = $request->student_phone;
            $student->address = $request->student_address;
            $student->class_id = $request->dd_class;
            $student->section_id = $request->dd_section;
            // student photo

            $valid_images = array("png", "jpg", "jpeg", "gif");

            if ($request->hasFile("student_photo") && in_array($request->student_photo->extension(), $valid_images)) {

                $profile_image = $request->student_photo;
                $imageName = time() . "." . $profile_image->getClientOriginalName();
                $profile_image->move("resource/assets/images/student/", $imageName);
                $uploadedImage = "resource/assets/images/student/" . $imageName;
                $student->profile_photo = $uploadedImage;
            }

            $student->father_name = $request->father_name;
            $student->mother_name = $request->mother_name;
            $student->age = $request->student_age;
            $student->status = $request->dd_status;

            $student->save();

            $request->session()->flash("message", "Student has been created successfully");

            return redirect("add-student");
        }
    }

    public function deleteStudent(Request $request) {

        $id = $request->delete_id;

        $student_data = Student::find($id);

        if (isset($student_data->id)) {

            $student_data->delete();

            echo json_encode(array("status" => 1, "message" => "Student deleted successfully"));
        } else {
            echo json_encode(array("status" => 0, "message" => "Student doesnot exists"));
        }

        die();
    }

}
