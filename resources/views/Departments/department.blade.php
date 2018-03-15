@extends('layouts.master')

@section('content')

    @include('Pages.navbar')
    <section id="hero">
        <div class="inner-banner" style="background-image:url(assets/images/banner-department.jpg)">
            <div class="container">
                <h3 class="title">Oreo Hospital<br><big><strong>Departments</strong></big></h3>
            </div>
        </div>
    </section>

    @include('Departments.departmenta')

    @include('Pages.footer')

    @endsection