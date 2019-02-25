<?php

namespace App\Http\Controllers;

use App\Models\SchoolClass;
use Illuminate\Http\Request;

class SchoolClassController extends Controller {

    public function addSchoolClass() {

        return view("admin.views.add_class");
    }

    public function listSchoolClasses() {

        echo "This is listing all classes";
    }

}
