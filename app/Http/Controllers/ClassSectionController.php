<?php

namespace App\Http\Controllers;

use App\Models\ClassSection;
use Illuminate\Http\Request;
use Datatables;
use App\Models\StudentClass;
use Validator;

class ClassSectionController extends Controller {

    public function addSchoolSection() {
        // function to add class sections
        return view("admin.views.add_section");
    }

    public function listSchoolSections() {
        
        return view("admin.views.list_section");
    }
    
    public function listAllSections(){
        
        $students_sections = StudentClass::query();
        return Datatables::of($students_sections)
                ->editColumn("action_btns",function($students_sections){
                    
                    return '<a href="#" class="btn btn-info class-section-edit" data-id="'.$students_sections->id.'">Edit</a><a href="#" class="btn btn-danger class-section-delete" data-id="'.$students_sections->id.'">Delete</a>';
                })
                ->rawColumns(["action_btns"])
                ->make(true);
    }
    
    public function saveClassSection(Request $request){
        
        $validator = Validator::make(array(
            "section"=>$request->section_name
        ),array(
            "section"=>"required|unique:tbl_class_sections"
        ));
        
        if($validator->fails()){
            
            return redirect("add-section")->withErrors($validator)->withInput();
        }else{
            
            // successfully we have passed our form
            $section = new StudentClass;
            $section->section = $request->section_name;
            $section->status = $request->dd_status;
            
            $section->save();
            
            $request->session()->flash("message","Class Section has been created successfully");
            
            return redirect("add-section");
        }
        
    }

}
