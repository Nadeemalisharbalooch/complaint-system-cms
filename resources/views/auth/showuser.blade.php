@extends('layouts.auth.auth')

@section('content')
@section('style')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<!-- css datatable -->
<link href="{{asset('auth/plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css')}}" rel="stylesheet "/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
  .outer {
    text-align: center;
  }
  .inner {
    display: inline-block;
  }
  /* Hide the default search bar */
  .dataTables_filter {
   
  }
  /* Create a new search bar on the left */
  #myform_wrapper .dataTables_filter {
    float: left;
    
  }
  #myform_wrapper .dataTables_filter input[type="search"] {
    background-color: #fff; /* Replace with your desired color */
}
</style>

@endsection
@section('content')
@if(session('message'))
    <div class="alert alert-danger">
        {{ session('message') }}
    </div>
@endif
<table class="table" id="myform">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Username</th>
      <th scope="col">Actions</th>
      <th scope="col">Status</th>
     
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user )
    <tr>
      <th scope="row">{{$user->name}}</th>
      <td>{{$user->email}}</td>
      <td><form action="{{url('deleteuser',$user->id)}}" method="get">
     <button> <i class="fas fa-trash-alt" style="color: red;"></i></button>
      </form></td>
      <td><a href="{{route('updateuserStatus',$user->id)}}">{{$user->Status == 3 ? 'UnBlock' :'Block'}}</a></td>
    </tr> 
    @endforeach
  </tbody>
</table>

@endsection
@section('script')
<script src="{{asset('auth/js/mono.js')}}"></script>
<script src="{{asset('auth/js/chart.js')}}"></script>
<script src="{{asset('auth/js/map.js')}}"></script>
<script src="{{asset('auth/js/custom.js')}}"></script>
<!-- js cdn -->
<script src="{{asset('auth/plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js')}}"></script>

<script>
$(document).ready(function () {
    $('#myform').DataTable({
        "lengthChange": false
    });
});
</script>
@endsection
