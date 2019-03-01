@extends("admin.layouts.layout")

@section("title","Admin Dashboard | Online Web Tutor")

@section("content")

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add Student
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Add Student</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">

            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" id='frm-add-student' method=''>

                        <div class="form-group">
                            <label for="reg_no">Registration No</label>
                            <input type="text" class="form-control" id="reg_no" name='reg_no' placeholder="Enter Registration no">
                        </div>

                        <div class="form-group">
                            <label for="dd_gender">Gender</label>
                            <select class='form-control' id='dd_gender' name='dd_gender'>
                                <option value='1'>Male</option>
                                <option value='2'>Female</option>
                            </select>
                        </div>

                        <div class="box-body">
                            <div class="form-group">
                                <label for="student_name">Name</label>
                                <input type="text" class="form-control" id="student_name" name='student_name' placeholder="Enter student name">
                            </div>
                            <div class="form-group">
                                <label for="student_email">Email</label>
                                <input type="email" class="form-control" id="student_email" name='student_email' placeholder="Enter student email">
                            </div>
                            <div class="form-group">
                                <label for="roll_no">Roll no</label>
                                <input type="number" class="form-control" id="roll_no" name='roll_no' placeholder="Enter roll no">
                            </div>

                            <div class="form-group">
                                <label for="student_phone">Phone no</label>
                                <input type="number" class="form-control" id="student_phone" name='student_phone' placeholder="Enter student phone no">
                            </div>
                            <div class="form-group">
                                <label for="student_address">Address</label>
                                <textarea class="form-control" name="student_address" id="student_address" placeholder="Enter Address"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="student_photo">Profile Photo</label>
                                <input type="file" class="form-control" id="student_photo" name='student_photo'>
                            </div>

                            <div class="form-group">
                                <label for="father_name">Father's Name</label>
                                <input type="text" class="form-control" id="father_name" name='father_name' placeholder="Enter father's name">
                            </div>

                            <div class="form-group">
                                <label for="mother_name">Mother's Name</label>
                                <input type="text" class="form-control" id="mother_name" name='mother_name' placeholder="Enter mother's name">
                            </div>
                            <div class="form-group">
                                <label for="student_age">Student Age</label>
                                <input type="number" class="form-control" id="student_age" name='student_age' placeholder="Enter age">
                            </div>

                            <div class="form-group">
                                <label for="dd_status">Status</label>
                                <select class='form-control' id='dd_status' name='dd_status'>
                                    <option value='1'>Active</option>
                                    <option value='0'>Inactive</option>
                                </select>
                            </div>

                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->


            </div>

        </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->
</div>

@endsection