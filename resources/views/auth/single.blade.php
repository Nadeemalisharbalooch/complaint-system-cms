@extends('layouts.auth.auth')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center bg bg-primary text-white">
                    Single Complaint Details
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <h4>Name: {{$single->name}}</h4>
                        <h4>Category: Customer Service</h4>
                        <h4>Communication Medium: Email</h4>
                        <h4>Created At: {{$single->created_at}}</h4>
                        <h4>Email: {{$single->email}}</h4>
                        <h4>Phone: {{$single->phone}}</h4>
                        <h4>Department: Support</h4>
                        <h4>Designation: {{$single->desgination}}</h4>
                    </div>
                    <div class="mb-3">
                        <h4>Reply:</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non maximus erat, et bibendum leo.</p>
                    </div>
                    <div class="mb-3">
                        <h4>Description:</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non maximus erat, et bibendum leo.</p>
                    </div>
                    <div class="mb-3">
                        <h4>Username: johndoe123</h4>
                    </div>
                </div>
                <div class="card-footer text-center">
              
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
