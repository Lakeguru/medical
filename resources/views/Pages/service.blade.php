@extends('layouts.master')

@section('content')

    @include('Pages.navbar')
    <!-- start hero -->
    <section id="hero">
        <div class="inner-banner" style="background-image:url(assets/images/banner-service.png)">
            <div class="container">
                <h3 class="title">About Us<br><big>Oreo <strong>Hospital</strong></big></h3>
            </div>
        </div>
    </section>

    @include('Pages.serviceabout')

    @include('Pages.servicelist')

    @include('Pages.footer')

@endsection