@extends('layouts.dashboard')

@section('content')

<hr>
<div class="row clearfix social-widget">
    <div class="col-lg-2 col-md-4 col-6">
        <div class="card info-box-2 hover-zoom-effect facebook-widget">
            <div class="icon"><i class="zmdi zmdi-facebook"></i></div>
            <div class="content">
                <div class="text">Doctors</div>
                <div class="number">123</div>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-6">
        <div class="card info-box-2 hover-zoom-effect instagram-widget">
            <div class="icon"><i class="zmdi zmdi-instagram"></i></div>
            <div class="content">
                <div class="text">Department</div>
                <div class="number">231</div>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-6">
        <div class="card info-box-2 hover-zoom-effect twitter-widget">
            <div class="icon"><i class="zmdi zmdi-twitter"></i></div>
            <div class="content">
                <div class="text">Today Patient</div>
                <div class="number">31</div>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-6">
        <div class="card info-box-2 hover-zoom-effect google-widget">
            <div class="icon"><i class="zmdi zmdi-google"></i></div>
            <div class="content">
                <div class="text">Total Patient</div>
                <div class="number">254</div>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-6">
        <div class="card info-box-2 hover-zoom-effect linkedin-widget">
            <div class="icon"><i class="zmdi zmdi-linkedin"></i></div>
            <div class="content">
                <div class="text">Today Payment</div>
                <div class="number">2510</div>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-6">
        <div class="card info-box-2 hover-zoom-effect behance-widget">
            <div class="icon"><i class="zmdi zmdi-behance"></i></div>
            <div class="content">
                <div class="text">Total Payment</div>
                <div class="number">121</div>
            </div>
        </div>
    </div>
</div>


@endsection