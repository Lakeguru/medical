
@extends('layouts.dashboard')

@section('content')

    <section class="content">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <h2>All Doctors
                        <small>Welcome to Oreo</small>
                    </h2>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 text-right">
                    <button class="btn btn-white btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">
                        <i class="zmdi zmdi-plus"></i>
                    </button>
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Doctors</a></li>
                        <li class="breadcrumb-item active">All Doctors</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                            <ul class="nav nav-tabs padding-0">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Permanent">Permanent</a></li>
                            </ul>
                        </div>
                    </div>
                    {{--@if(count(image) > 0)--}}
                        {{--@php($colcount = count(image));--}}
                        {{--$= 1;--}}
                        {{--@endphp--}}
                    {{--@endforeach--}}
                    <div class="tab-content m-t-10">
                        <div class="tab-pane active" id="Permanent">
                            <div class="row clearfix">
                                @foreach($doctors as $doctor)
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="card xl-blue member-card doctor">
                                        <div class="body">
                                            <div class="member-thumb">
                                                <img src="/storage/profiles/{{$doctor->image}}" class="img-fluid" alt="profile-image">
                                            </div>
                                            <div class="detail">
                                                <h4 class="m-b-0">Dr. {{$doctor->first_name}}</h4>
                                                <p class="text-muted">Dentist</p>
                                                <ul class="social-links list-inline m-t-20">
                                                    <li><a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                                    <li><a title="twitter" href="#" ><i class="zmdi zmdi-twitter"></i></a></li>
                                                    <li><a title="instagram" href="3.html" ><i class="zmdi zmdi-instagram"></i></a></li>
                                                </ul>
                                                <p class="text-muted">{{$doctor->address}}</p>
                                                <a href="profile.html"  class="btn btn-default btn-round btn-simple">View Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection