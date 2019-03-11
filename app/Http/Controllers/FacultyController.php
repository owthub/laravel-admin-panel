<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use Illuminate\Http\Request;
use Datatables;
use DB;
use App\Models\FacultyType;
use App\Models\Gender;
use Validator;

class FacultyController extends Controller {

    public function addFaculty() {

        $types = FacultyType::where(["status" => 1])->get();
        $genders = Gender::where(["status" => 1])->get();

        return view("admin.views.add_faculty", ["types" => $types, "genders" => $genders]);
    }

    public function listFaculties() {

        return view("admin.views.list_faculties");
    }

    public function listAllFaculties() {

        $faculties_query = DB::table("tbl_faculties as faculty")
                ->select("faculty.*", "gender.type as gender_name", "type.type as faculty_type")
                ->leftJoin("tbl_genders as gender", "gender.id", "=", "faculty.gender_id")
                ->leftJoin("tbl_faculty_types as type", "type.id", "=", "faculty.faculty_type_id")
                ->where(["faculty.status" => 1])
                ->get()
        ;

        return Datatables::of($faculties_query)
                        ->editColumn("type", function($faculties_query) {

                            return ucfirst($faculties_query->faculty_type);
                        })
                        ->editColumn("profile_photo", function($faculties_query) {

                            return '<img src="' . $faculties_query->profile_photo . '"/>';
                        })
                        ->editColumn("gender", function($faculties_query) {

                            return ucfirst($faculties_query->gender_name);
                        })
                        ->editColumn("action_btns", function($faculties_query) {

                            return '<a href="#" class="btn btn-info class-section-edit" data-id="' . $faculties_query->id . '">Edit</a><a href="#" class="btn btn-danger class-section-delete" data-id="' . $faculties_query->id . '">Delete</a>';
                        })
                        ->rawColumns(["action_btns", "profile_photo"])
                        ->make(true);
    }

    public function saveFaculty(Request $request) {

        $validator = Validator::make(array(
                    "faculty_type" => $request->dd_type,
                    "faculty_name" => $request->faculty_name,
                    "email" => $request->faculty_email,
                    "faculty_designation" => $request->faculty_designation,
                    "faculty_phone" => $request->faculty_phone,
                    "faculty_address" => $request->faculty_address
                        ), array(
                    "faculty_type" => "required",
                    "faculty_name" => "required",
                    "email" => "required|unique:tbl_faculties",
                    "faculty_designation" => "required",
                    "faculty_phone" => "required",
                    "faculty_address" => "required",
        ));

        if ($validator->fails()) {

            return redirect("add-faculty")->withErrors($validator)->withInput();
        } else {
            // we have successfully passed form validations

            $faculty = new Faculty;

            $faculty->faculty_type_id = $request->dd_type;
            $faculty->name = $request->faculty_name;
            $faculty->email = $request->faculty_email;
            $faculty->designation = $request->faculty_designation;
            $faculty->phone_no = $request->faculty_phone;
            $faculty->gender_id = $request->dd_gender;
            // to save profile photo
            $valid_images = array("png", "jpg", "gif", "jpeg");

            if ($request->hasFile("faculty_photo") && in_array($request->faculty_photo->extension(), $valid_images)) {

                $image = $request->faculty_photo;
                $fileName = time() . "." . $image->getClientOriginalName();
                $image->move("resource/assets/images/faculty/", $fileName);
                $uploadedImageName = "resource/assets/images/faculty/" . $fileName;
                $faculty->profile_photo = $uploadedImageName;
            }

            $faculty->address = $request->faculty_address;

            $faculty->save();

            $request->session()->flash("message", "Faculty has been created successfully");

            return redirect("add-faculty");
        }
    }

}
