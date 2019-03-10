<?php

namespace App\Http\Controllers;

use App\Models\FacultyType;
use Illuminate\Http\Request;
use Datatables;
use Validator;

class FacultyTypeController extends Controller {

    public function addFacultyType() {

        return view("admin.views.add_faculty_type");
    }

    public function listFacultyTypes() {

        return view("admin.views.list_staff_types");
    }

    public function listAllFacultyTypes() {

        $faculty_types = FacultyType::query();

        return Datatables::of($faculty_types)
                        ->editColumn("action_btns", function($faculty_types) {

                            return '<a href="#" class="btn btn-info class-section-edit" data-id="' . $faculty_types->id . '">Edit</a><a href="#" class="btn btn-danger class-section-delete" data-id="' . $faculty_types->id . '">Delete</a>';
                        })
                        ->rawColumns(["action_btns"])
                        ->make(true);
    }

    public function saveFacultyType(Request $request) {

        $validator = Validator::make(array(
                    "type" => $request->faculty_type
                        ), array(
                    "type" => "required|unique:tbl_faculty_types"
        ));

        if ($validator->fails()) {
            
            return redirect("add-faculty-type")->withErrors($validator)->withInput();
        } else {
            
            $faculty_type = new FacultyType;
            $faculty_type->type = $request->faculty_type;
            $faculty_type->status = $request->dd_status;

            $faculty_type->save();
            
            $request->session()->flash("message","Faculty Type has been created successfully");
            
            return redirect("add-faculty-type");
        }
    }

}
