@extends('layouts\auth\auth')
@section('content')  
<div class="content-wrapper">
    <div class="content">
        <!-- Top Statistics -->
        <div class="row">
            <div class=" col-md-4">
                <div class="card card-default card-mini bg-info text-white">
                    <div class="card-header">
                        <h2>Total Complains</h2>
                        <div class="sub-title">
                            <span class="mr-1"> {{count($allcomplain)}}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-md-4">
                <div class="card card-default card-mini bg-success text-white">
                    <div class="card-header">
                        <h2>USERS</h2>
                        <div class="sub-title">
                            <span class="mr-1">{{count($users)}}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-md-4">
                <div class="card card-default card-mini bg-warning text-white">
                    <div class="card-header">
                        <h2>Until Not any Action</h2>
                        <div class="sub-title">
                            <span class="mr-1">{{count($untilnotaction)}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class=" col-md-4">
                <div class="card card-default card-mini bg-primary text-white">
                    <div class="card-header">
                        <h2>Outstanding Complaint</h2>
                        <div class="sub-title">
                            <span class="mr-1">{{count($processing)}}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-md-4">
                <div class="card card-default card-mini bg-secondary text-white">
                    <div class="card-header">
                        <h2>Complaint Categories </h2>
                        <div class="sub-title">
                            <span class="mr-1">{{count($category)}}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-md-4">
                <div class="card card-default card-mini bg-danger text-white">
                    <div class="card-header">
                        <h2>Complaint Resolution </h2>
                        <div class="sub-title">
                            <span class="mr-1"> {{count($complete)}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('auth/js/mono.js') }}"></script>
<script src="{{ asset('auth/js/chart.js') }}"></script>
<script src="{{ asset('auth/js/map.js') }}"></script>
<script src="{{ asset('auth/js/custom.js') }}"></script>
@endsection
