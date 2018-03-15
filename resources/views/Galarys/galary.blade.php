@extends('layouts.master')

@section('content')
    @include('Pages.navbar')
    <section id="hero">
        <div class="inner-banner" style="background-image:url(assets/images/banner-gallery.jpg)">
            <div class="container">
                <h3 class="title">Oreo<br><strong>Gallery</strong></h3>
            </div>
        </div>
    </section>
    @include('Galarys.info')

    @include('Pages.footer')
    @endsection