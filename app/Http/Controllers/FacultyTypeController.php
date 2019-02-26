<?php

namespace App\Http\Controllers;

use App\Models\FacultyType;
use Illuminate\Http\Request;

class FacultyTypeController extends Controller {

    public function addFacultyType() {

        return view("admin.views.add_faculty_type");
    }
    
    public function listFacultyTypes(){
        
        echo "This is listing of faculty type";
    }

}
