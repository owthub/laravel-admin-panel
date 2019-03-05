<?php

namespace App\Http\Controllers;

use App\Models\SchoolClass;
use Illuminate\Http\Request;
use Datatables;
use DB;

class SchoolClassController extends Controller {

    public function addSchoolClass() {

        return view("admin.views.add_class");
    }

    public function listSchoolClasses() {

        return view("admin.views.list_classes");
    }
    
    public function listAllClasses(){
        
        $classes_query = DB::table("tbl_classes as class")
                ->select("class.*","section.section")
                ->leftJoin("tbl_class_sections as section","class.class_section_id","=","section.id")
                ->where(["class.status"=>1])
                ->get();
        
        return Datatables::of($classes_query)
                ->editColumn("action_btns",function($classes_query){
                    
                    return '<a href="#" class="btn btn-info class-section-edit" data-id="'.$classes_query->id.'">Edit</a><a href="#" class="btn btn-danger class-section-delete" data-id="'.$classes_query->id.'">Delete</a>';
                })
                ->rawColumns(["action_btns"])
                ->make(true);
    }

}
