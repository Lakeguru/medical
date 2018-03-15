@extends('layouts.master')

@section('content')

    @include('Pages.navbar')
    <section id="hero">
        <div class="inner-banner" style="background-image:url(assets/images/banner-doctors.jpg)">
            <div class="container">
                <h3 class="title">Our <br><big><strong>Pricing Table</strong></big></h3>
            </div>
        </div>
    </section>

    @include('Pricelists.info')

    @include('Pages.footer')
@endsection



