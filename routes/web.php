<?php

Route::get("/","AdminHomeController@dashboard");

// clsses routes
Route::get("/add-section","ClassSectionController@addSchoolSection")->name("addclasssection");
Route::get("/list-sections","ClassSectionController@listSchoolSections")->name("listclasssection");
Route::get("/list-sections-data","ClassSectionController@listAllSections")->name('listallsection');
Route::post("/save-section","ClassSectionController@saveClassSection")->name('savesection');

Route::get("/add-class","SchoolClassController@addSchoolClass")->name('addschoolclass');
Route::get("/list-classes","SchoolClassController@listSchoolClasses")->name('listschoolclasses');
Route::get("/list-classes-data","SchoolClassController@listAllClasses")->name('listallclasses');
Route::post("/save-class","SchoolClassController@saveClassData")->name('saveclass');


// faculty routes
Route::get("/add-faculty-type","FacultyTypeController@addFacultyType")->name("addfacultyType");
Route::get("/list-faculty-types","FacultyTypeController@listFacultyTypes")->name("listfacultyTypes");
Route::get("/list-faculty-types-data","FacultyTypeController@listAllFacultyTypes")->name("listallstafftypes");
Route::post("/save-faculty-type","FacultyTypeController@saveFacultyType")->name("savefacultytype");

Route::get("/add-faculty","FacultyController@addFaculty")->name("addfaculty");
Route::get("/list-faculties","FacultyController@listFaculties")->name("listfaculties");
Route::get("/list-all-faculties","FacultyController@listAllFaculties")->name("listallfaculties");
Route::post("/save-faculty","FacultyController@saveFaculty")->name("savefaculty");

// student routes
Route::get("/add-student","StudentController@addStudent")->name("addstudent");
Route::get("/list-students","StudentController@listStudents")->name("liststudents");
Route::get("/list-all-students","StudentController@listAllStudents")->name("listallstudents");
Route::post("/save-student","StudentController@saveStudent")->name("savestudent");