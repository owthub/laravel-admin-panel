<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminHomeController extends Controller {

    public function dashboard() {
        
        return view("admin.views.dashboard");
    }

}
