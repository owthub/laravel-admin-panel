@extends("admin.layouts.layout")

@section("title","Admin Dashboard | Online Web Tutor")

@section("content")

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add Class
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Add Class</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">

            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                   
                    @if(session()->has("message"))
                    <div class="alert alert-success">
                        <p>{{ session('message') }}</p>
                    </div>
                    @endif
                    
                    @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                        @endforeach
                    </div>
                    @endif
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" id='frm-add-class' method='post' action="{{ route('saveclass') }}">
                        {{ csrf_field() }}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="class_name">Class name</label>
                                <input type="text" class="form-control" id="class_name" name='class_name' placeholder="Enter class name">
                            </div>

                            <div class="form-group">
                                <label for="dd_section">Choose section</label>
                                <select class='form-control' id='dd_section' name='dd_section'>
                                    <option value="-1">Select Section</option>
                                    @if(count($sections) > 0)
                                    @foreach($sections as $key=>$section)
                                    <option value='{{ $section->id }}'>{{ $section->section }}</option>
                                    @endforeach
                                    @endif

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="seats_available">Seats Available</label>
                                <input type="number" min="1" class="form-control" id="seats_available" name='seats_available' placeholder="Enter seats">
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