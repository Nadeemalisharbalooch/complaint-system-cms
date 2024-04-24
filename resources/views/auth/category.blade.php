@extends('layouts.auth.auth')

@section('content')


<div class="container">
    <div class="row">
        <div class="col">
       <br>
        <a href="{{url('createcategory')}}" style="font-size: 20px;" class="btn btn-info text-dark">Add New</a>

<br><br>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Categories Name</th>
      <th scope="col">created_at</th>
    

    </tr>
  </thead>
  <tbody>
  @php $count = 1; @endphp
    @foreach($category as $category)

    <tr>
      <td>{{$count++}}</td>
      <td>{{$category->name}}</td>
      <td>{{ optional($category->created_at)->format('Y-m-d h:i A') }}</td>

    </tr>
    @endforeach
   
  </tbody>
</table>

        </div>
    </div>
</div>

@endsection