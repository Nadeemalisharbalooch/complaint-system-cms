@extends('layouts.auth.auth')
@section('content')
<h1>javar</h1>
@endsection()

@section('script')
        <script src="{{asset('auth/js/mono.js')}}"></script>
        <script src="{{asset('auth/js/chart.js')}}"></script>
        <script src="{{asset('auth/js/map.js')}}"></script>
        <script src="{{asset('auth/js/custom.js')}}"></script>
        <script src="{{asset('auth/plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js')}}"></script>
        <script>
          $(document).ready(function() {
        var table = $('#post').DataTable({
          "lengthChange": false
        });

        $('#tableSearch').on('keyup', function() {
          table.search(this.value).draw();
        });
        
        $('.dataTables_filter').detach().appendTo('#navbarSupportedContent .form-inline');
      });
    </script>
    @endsection