@extends('layouts.master')
@section('content')
    @include('Pages.navbar')

    <section id="hero">
        <div class="inner-banner" style="background-image:url(assets/images/banner-about.jpg)">
            <div class="container">
                <h3 class="title">About Us<br><big>Oreo <strong>Hospital</strong></big></h3>
            </div>
        </div>
    </section>

    @include('Abouts.info')
    @include('Pages.footer')
    @endsection