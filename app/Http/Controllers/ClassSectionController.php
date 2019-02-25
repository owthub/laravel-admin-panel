<?php

namespace App\Http\Controllers;

use App\Models\ClassSection;
use Illuminate\Http\Request;

class ClassSectionController extends Controller {

    public function addSchoolSection() {
        // function to add class sections
        return view("admin.views.add_section");
    }

    public function listSchoolSections() {
        // function to list all created class sections
        echo "Welcome to list class sections";
    }

}
