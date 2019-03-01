<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            
            {{-- dashboard --}}
            <li><a href="#"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            
            {{-- classes --}}
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-list"></i> <span>Class</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="{{ route('addclasssection') }}"><i class="fa fa-circle-o"></i> Add Section</a></li>
                    <li class=""><a href="{{ route('listclasssection') }}"><i class="fa fa-circle-o"></i> List Sections</a></li>
                    <li class=""><a href="{{ route('addschoolclass') }}"><i class="fa fa-circle-o"></i> Add Class</a></li>
                    <li><a href="{{ route('listschoolclasses') }}"><i class="fa fa-circle-o"></i> List Classes</a></li>
                </ul>
            </li>
            
            {{-- faculties --}}
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i> <span>Faculty</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="{{ route('addfacultyType') }}"><i class="fa fa-circle-o"></i> Add Type</a></li>
                    <li class=""><a href="{{ route('listfacultyTypes') }}"><i class="fa fa-circle-o"></i> List Types</a></li>
                    <li class=""><a href="{{ route('addfaculty') }}"><i class="fa fa-circle-o"></i> Add Faculty</a></li>
                    <li><a href="{{ route('listfaculties') }}"><i class="fa fa-circle-o"></i> List Faculties</a></li>
                </ul>
            </li>
            
            {{-- students --}}
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i> <span>Student</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="{{ route('addstudent') }}"><i class="fa fa-circle-o"></i> Add Student</a></li>
                    <li class=""><a href="{{ route('liststudents') }}"><i class="fa fa-circle-o"></i> List Students</a></li>
                </ul>
            </li>
            
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>