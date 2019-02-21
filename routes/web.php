<?php

Route::get("/","AdminHomeController@dashboard");

// clsses routes
Route::get("/add-section","ClassSectionController@addSchoolSection")->name("addclasssection");
Route::get("/list-sections","ClassSectionController@listSchoolSections")->name("listclasssection");


// faculty routes


// student routes