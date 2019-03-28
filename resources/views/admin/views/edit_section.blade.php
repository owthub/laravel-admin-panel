@extends("admin.layouts.layout")

@section("title","Edit Section | Online Web Tutor")

@section("content")

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edit Section
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Edit Section</li>
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
                    <form role="form" id='frm-add-section' method='post' action="{{ route('editsubmitsection') }}">
                        {!! csrf_field() !!}
                        <input type="hidden" value="{{ $section->id }}" name="update_id"/>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="section_name">Section name</label>
                                <input type="text" value="{{ $section->section }}" class="form-control" id="section_name" name='section_name' placeholder="Enter section name">
                            </div>
                            <div class="form-group">
                                <label for="dd_status">Status</label>
                                <select class='form-control' id='dd_status' name='dd_status'>
                                    <option value='1' @if($section->status) selected="" @endif>Active</option>
                                    <option value='0' @if(!$section->status) selected="" @endif>Inactive</option>
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