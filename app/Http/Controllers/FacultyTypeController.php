<?php

namespace App\Http\Controllers;

use App\Models\FacultyType;
use Illuminate\Http\Request;

class FacultyTypeController extends Controller {

    public function addFacultyType() {

        echo "This is add faculty type page";
    }
    
    public function listFacultyTypes(){
        
        echo "This is listing of faculty type";
    }

}
