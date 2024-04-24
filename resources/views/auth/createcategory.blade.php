@extends('layouts.auth.auth')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-6">
        @if(session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
            <div class="card">
            @if(session('messageerror'))
            <div class="alert alert-danger">
                {{ session('messageerror') }}
            </div>
        @endif
                <div class="card-header">{{ __('Add here a New category') }}</div>
                <div class="card-body">
                    <form action="{{ url('insertcategory')}}" method="get">
                        @csrf
                        <div class="form-group">
                            <label for="old_password">Write here Categary Name</label>
                            <input type="text" class="form-control"  name="category" required>
                    
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
