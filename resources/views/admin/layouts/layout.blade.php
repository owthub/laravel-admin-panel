<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield("title")</title>
        
        {{-- include styles --}}
        @include("admin.layouts.styles")
        
        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            {{-- include header --}}
            @include("admin.layouts.header")
           
            
            {{-- include left sidebar panel --}}
            @include("admin.layouts.left_sidebar")

            {{-- dynamic content --}}
            @section("content")
            @show
            
            {{-- include footer --}}
            @include("admin.layouts.footer")
            <!-- Add the sidebar's background. This div must be placed
                 immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->

        {{-- include scripts --}} 
        @include("admin.layouts.scripts")
    </body>
</html>
