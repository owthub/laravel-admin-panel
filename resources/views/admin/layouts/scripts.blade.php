
<!-- jQuery 3 -->
<script src="{{ url('bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{!! asset('bower_components/jquery-ui/jquery-ui.min.js') !!}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{!! asset('bower_components/bootstrap/dist/js/bootstrap.min.js') !!}"></script>

<script src="{!! asset('dist/js/adminlte.min.js') !!}"></script>

<script src="{!! asset('assets/js/jquery.dataTables.min.js') !!}"></script>

<script src="{!! asset('assets/js/jquery.validate.js') !!}"></script>

<script src="{!! asset('assets/js/sweetalert.js') !!}"></script>

<script src="{!! asset('assets/js/custom-script.js') !!}"></script>

<script>
    $(function () {
        
        if($('#class-sections').length > 0){
            
            $('#class-sections').DataTable({ // code for list sections
               processing: true,
               serverSide: true,
               ajax: "{{ route('listallsection') }}",
               columns: [
                        { data: 'id', name: 'id' },
                        { data: 'section', name: 'section' },
                        { data: 'status', name: 'status' },
                        { data: 'action_btns', name: 'action_btns' },
                     ]
            });
        }
        
        if($('#list-classes').length > 0){  // code for list classes
            
            $('#list-classes').DataTable({
               processing: true,
               serverSide: true,
               ajax: "{{ route('listallclasses') }}",
               columns: [
                        { data: 'id', name: 'id' },
                        { data: 'name', name: 'name' },
                        { data: 'section', name: 'section' },
                        { data: 'seats_available', name: 'seats_available' },
                        { data: 'status', name: 'status' },
                        { data: 'action_btns', name: 'action_btns' },
                     ]
            });
        }
        
        if($('#list-staff-types').length > 0){  // code for list staff types
            
            $('#list-staff-types').DataTable({
               processing: true,
               serverSide: true,
               ajax: "{{ route('listallstafftypes') }}",
               columns: [
                        { data: 'id', name: 'id' },
                        { data: 'type', name: 'type' },
                        { data: 'status', name: 'status' },
                        { data: 'action_btns', name: 'action_btns' },
                     ]
            });
        }
        
    });
</script>
