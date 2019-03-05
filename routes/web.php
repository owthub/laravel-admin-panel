<?php

Route::get("/","AdminHomeController@dashboard");

// clsses routes
Route::get("/add-section","ClassSectionController@addSchoolSection")->name("addclasssection");
Route::get("/list-sections","ClassSectionController@listSchoolSections")->name("listclasssection");
Route::get("/list-sections-data","ClassSectionController@listAllSections")->name('listallsection');

Route::get("/add-class","SchoolClassController@addSchoolClass")->name('addschoolclass');
Route::get("/list-classes","SchoolClassController@listSchoolClasses")->name('listschoolclasses');
Route::get("/list-classes-data","SchoolClassController@listAllClasses")->name('listallclasses');


// faculty routes
Route::get("/add-faculty-type","FacultyTypeController@addFacultyType")->name("addfacultyType");
Route::get("/list-faculty-types","FacultyTypeController@listFacultyTypes")->name("listfacultyTypes");
Route::get("/list-faculty-types-data","FacultyTypeController@listAllFacultyTypes")->name("listallstafftypes");

Route::get("/add-faculty","FacultyController@addFaculty")->name("addfaculty");
Route::get("/list-faculties","FacultyController@listFaculties")->name("listfaculties");

// student routes
Route::get("/add-student","StudentController@addStudent")->name("addstudent");
Route::get("/list-students","StudentController@listStudents")->name("liststudents");