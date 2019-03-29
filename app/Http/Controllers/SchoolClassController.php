<?php

namespace App\Http\Controllers;

use App\Models\SchoolClass;
use Illuminate\Http\Request;
use Datatables;
use DB;
use App\Models\StudentClass;
use Validator;
use URL;

class SchoolClassController extends Controller {

    public function addSchoolClass() {

        $all_sections = StudentClass::where(["status" => 1])->get();

        return view("admin.views.add_class", ["sections" => $all_sections]);
    }

    public function listSchoolClasses() {

        return view("admin.views.list_classes");
    }

    public function listAllClasses() {

        $classes_query = DB::table("tbl_classes as class")
                ->select("class.*", "section.section")
                ->leftJoin("tbl_class_sections as section", "class.class_section_id", "=", "section.id")
                ->where(["class.status" => 1])
                ->get();

        return Datatables::of($classes_query)
                        ->editColumn("action_btns", function($classes_query) {

                            return '<a href="' . URL::to('/edit-class/' . $classes_query->id) . '" class="btn btn-info class-section-edit" data-id="' . $classes_query->id . '">Edit</a>'
                                    . '<a href="javascript:void(0)" class="btn btn-danger btn-class-delete" data-id="' . $classes_query->id . '">Delete</a>';
                        })
                        ->rawColumns(["action_btns"])
                        ->make(true);
    }

    public function editClassData($id = null) {

        $all_sections = StudentClass::where(["status" => 1])->get();

        $class_data = SchoolClass::find($id);
        return view("admin.views.edit_class", ["sections" => $all_sections, "class_data" => $class_data]);
    }

    public function saveClassData(Request $request) {

        $validator = Validator::make(array(
                    "class_name" => $request->class_name,
                    "dd_section" => $request->dd_section,
                    "seats_available" => $request->seats_available
                        ), array(
                    "class_name" => "required",
                    "dd_section" => "required|not_in:-1",
                    "seats_available" => "required"
        ));

        if ($validator->fails()) {

            return redirect("add-class")->withErrors($validator)->withInput();
        } else {

            $class = new SchoolClass;
            $class->name = $request->class_name;
            $class->class_section_id = $request->dd_section;
            $class->seats_available = $request->seats_available;
            $class->status = $request->dd_status;

            $class->save();

            $request->session()->flash("message", "Class has been created successfully");

            return redirect("add-class");
        }
    }

    public function deleteClass(Request $request) {

        $id = $request->delete_id;

        $class_data = SchoolClass::find($id);

        if (isset($class_data->id)) {

            $class_data->delete();

            echo json_encode(array("status" => 1, "message" => "Class deleted successfully"));
        } else {
            echo json_encode(array("status" => 0, "message" => "Class doesnot exists"));
        }

        die();
    }

}
