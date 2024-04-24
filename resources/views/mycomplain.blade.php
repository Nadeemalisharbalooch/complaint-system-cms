@extends('layouts.site.layouts')

@section('content')
    <br><br><br>
    <div class="container border">
    <div class="row">
        <div class="container-fluid">
            @foreach($complaint as $complaintItem)
            <div class="row">
                <div class="col-lg-1 col-md-1">
                    <div class="header-cell">Serial No.</div>
                    <div class="content-cell">{{ $loop->iteration }}</div>
                </div>
                <div class="col-lg-3 col-md-5">
                    <div class="header-cell">Description of Complain</div>
                    <div class="content-cell">{{ Str::limit($complaintItem->descriptions, 10, '...') }}</div>
                </div>
                <div class="col-lg-2 col-md-3">
                    <div class="header-cell">Date & Time</div>
                    <div class="content-cell">{{ $complaintItem->created_at }}</div>
                </div>
                <div class="col-lg-2 col-md-3">
                    <div class="header-cell">commun.. medium</div>
                    <div class="content-cell">{{ $complaintItem->communication_medium }}</div>
                </div>
                <div class="col-lg-2 col-md-3">
                    <div class="header-cell">Action Of complain</div>
                    <div class="content-cell">
                        @if($complaintItem->Status == 0)
                            <button class="btn bg-primary text-white" style="width: 120px; height: 50px; line-height: 30px; text-align: center;">New</button>
                        @elseif($complaintItem->Status == 1)
                            <button class="btn bg-info text-white" style="width: 120px; height: 50px; line-height: 30px; text-align: center;">Processing</button>
                        @elseif($complaintItem->Status == 2)
                            <button class="btn bg-success text-white" style="width: 120px; height: 50px; line-height: 30px; text-align: center;" disabled>Complete</button>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
@endsection
