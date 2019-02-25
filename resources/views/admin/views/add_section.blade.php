@extends("admin.layouts.layout")

@section("title","Admin Dashboard | Online Web Tutor")

@section("content")

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add Section
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Add Section</li>
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
                    <form role="form" id='frm-add-section' method=''>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="section_name">Section name</label>
                                <input type="text" class="form-control" id="section_name" name='section_name' placeholder="Enter section name">
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