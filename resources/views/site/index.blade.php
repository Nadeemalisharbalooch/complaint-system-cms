@extends('layouts.site.layouts')

@section('content')
<br><br>
@if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
@if($errors->any())
  <ul class="alert alert-danger">
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </ul>
@endif
  <section class="hero col-md-12" >
                <h2>Welcome to SBBU the Complaint System</h2>
                <p>Submit your complaints here and track their status.</p>
                <button id="openModalBtn" class="btn">Submit a Complaint</button>
                <div id="modal" class="modal">
        <div class="modal-content bg bg-dark">
            <span class="close" id="closeModalBtn">&times;</span>
            <h2 >Complain Form</h2>
            <form  method="get" Action="{{route('createcomplain')}}" class="overflow">
            <div class="form-group">
              <!-- may be use id="myForm" --> 
  <div>
  <label for="exampleInputEmail1">Enter here Mobile Number</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="phone" aria-describedby="emailHelp" placeholder="Write answer">
   
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Write here Department</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="department" placeholder="Write answer">
  </div>
  <div class="form-group">  
    <label for="exampleInputPassword1">Write here your desgnation Or Role</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="designation" placeholder="Write answer">
  </div>
      <div class="form-group">
        <label for="exampleInputPassword1">select the preferred medium for communication</label>
      <select name="communicationmedium" id="" class="form-control">
      <option value="disabled" disabled selected>Select</option>
      <option value="Call">Call Back</option>
      <option value="Whatapp">Whatapp</option>
      <option value="Email">Email</option>
      </select>
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      <div class="form-group">
        <label for="exampleInputPassword1">Your Email send to</label>
      <select name="mail" id="" class="form-control">
      <option value="disabled" disabled selected>Select</option>
      <option value="0">No any one</option>
      <option value="1">VC</option>
      <option value="2">Register</option>
      <option value="3">Hod</option>
      </select>
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      

  <div class="form-group">
    <label for="exampleInputPassword1">select complaint category or type</label>
  <select name="communication" id="" class="form-control">
  <option value="disabled" disabled selected>Select</option>
  @foreach($category as $category)
  <option value="{{$category->id}}">{{$category->name}}</option>
   @endforeach
  </select>
  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  <div class="form-group">  
    <label for="exampleInputPassword1">Select Complain type OR complain category</label>
    <textarea class="form-control" name="description" id="" cols="40" rows="3"></textarea>
  </div>
  
 
  <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
            </section>

            <!-- Complaint Submission Form -->
            <br><br>
            
            <div class="row">
              <div class="col-md-12">
              <div class="card-footer text-white bg-secondary text-center">
            <div class="collapsible" onclick="toggleContent()">
        <span id="toggleSymbol">&#9658;</span> <!-- Use a right-pointing triangle symbol as the initial indicator -->
        Read More
    </div>
    <div class="content" id="content">
        <!-- Content to be displayed when expanded -->
       Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam amet unde temporibus corrupti cupiditate quasi aliquid magni, asperiores reprehenderit? Alias rerum, error, veritatis laudantium sed magni vel incidunt, illum facilis molestias eligendi odit officiis ipsa. Accusantium, illo sapiente numquam exercitationem, ipsum blanditiis consequuntur tempora velit neque sequi necessitatibus itaque nesciunt eius laborum, nemo adipisci! Corporis facere ut delectus quasi, illum autem corrupti id voluptas ad enim, rerum voluptatum atque provident, tempora sint. Doloremque delectus quasi dolorum totam a consequatur ex aliquid nostrum harum magnam rerum natus in similique saepe nihil, recusandae maxime autem cum, quas exercitationem laudantium culpa labore possimus?
    </div>
  </div>
              </div>
           </div>
 <br><br><br><br>
@endsection

