@extends('layouts.master')

@section('content')
    @include('Pages.navbar')
    <section id="hero">
        <div class="inner-banner" style="background-image:url(assets/images/banner-faqs.jpg)">
            <div class="container">
                <h3 class="title">Oreo<br><strong>FAQs</strong></h3>
            </div>
        </div>
    </section>

    @include('Faqs.info')

    @include('Pages.footer')
@endsection