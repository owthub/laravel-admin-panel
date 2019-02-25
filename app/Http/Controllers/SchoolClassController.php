<?php

namespace App\Http\Controllers;

use App\Models\SchoolClass;
use Illuminate\Http\Request;

class SchoolClassController extends Controller {

    public function addSchoolClass() {

        echo "This is add Class Method";
    }
    
    public function listSchoolClasses(){
        
        echo "This is listing all classes";
    }

}
