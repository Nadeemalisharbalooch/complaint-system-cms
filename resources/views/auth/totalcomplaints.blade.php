    @extends('layouts.auth.auth');
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
    <table class="table" id="myform">
    <thead>
        <tr>
        <th scope="col">category</th>
        <th scope="col">Name</th>
        <th scope="col">email</th>
        <th scope="col">phone</th>
        <th scope="col">Department</th>
        <th scope="col">com_medium</th>
        <th scope="col">description</th>
        <th scope="col">created_at</th>
        <th scope="col">status</th>
        
        </tr>
    </thead>
    <tbody>
        @foreach($Complaints as $Complaint )
        <tr>
   
        <td>{{$Complaint->name}}</td>
        <td>{{$Complaint->name}}</td>
        <td>{{$Complaint->email}}</td>
        <td>{{$Complaint->phone}}</td>
        
        <td>{{$Complaint->desgination}}</td>
        <td>{{$Complaint->communication_medium}}</td>
        <td>{{$Complaint->descriptions}}</td>
        <td>{{$Complaint->created_at}}</td>
        <td>
        <a href="{{ route('updatecomplainStatus', $Complaint->id) }}"
   @if($Complaint->Status == 2)
       disabled="disabled"
   @endif
   class="btn
   @if($Complaint->Status == 0)
       bg-primary text-white
   @elseif($Complaint->Status == 1)
       bg-info text-white
   @elseif($Complaint->Status == 2)
       bg-success text-white
   @endif"
   style="width: 120px; height: 50px; line-height: 30px; text-align: center;">
    {{ $Complaint->Status == 0 ? 'New' : ($Complaint->Status == 1 ? 'Processing' : 'Complete') }}
</a>
</td> 
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
