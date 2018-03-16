@extends('layouts.dashboard')

@section('content')

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Add Payment
                <small class="text-muted">Welcome to Oreo</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Payment</a></li>
                    <li class="breadcrumb-item active">Add Payment</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
                <form action="/add_payment" method="POST" enctype="multipart/form-data">
                    @csrf
            <div class="col-lg-12 col-md-12 col-sm-12 ">
                <div class="card">
                    <div class="header">
                        <h2><strong>Patients</strong> Information <small>Description text here...</small> </h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right slideUp float-right">
                                    <li><a href="javascript:void(0);">Edit</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="row clearfix">

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <select name="patient_name" class="form-control show-tick">
                                            <option >- Patient Name -</option>
                                        @foreach($patients as $patient)
                                                <option value="{{$patient->first_name}}{{$patient->last_name}}" >{{$patient->first_name}}{{$patient->last_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 ">
                                <div class="form-group">
                                    <select name="doctor_name" class="form-control show-tick">
                                            <option >- Doctor Name -</option>
                                        @foreach($doctors as $doctor)
                                            <option  value="{{$doctor->first_name}}">- {{ $doctor->first_name }}-</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2><strong>Payment</strong> Information <small>Description text here...</small> </h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right slideUp float-right">
                                    <li><a href="javascript:void(0);">Edit</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                                    <div class="col-sm-12 ">
                                        <div class="form-group">
                                            <input type="text" class="form-control" value="" name="payment_name" placeholder=" Full Name">
                                        </div>
                                    </div>
                                   
                                        
                                <div class="col-sm-12 ">
                                        <div class="form-group">
                                            <input type="number" class="form-control" value="" name="amount" placeholder=" Amount">
                                        </div>
                                    </div>
                            <div class="col-sm-12 ">
                                <div class="form-group">
                                    <input type="number" class="form-control" value="" name="discount" placeholder="Discount">
                                </div>
                            </div>

                                <div class="col-sm-3 ">
                                    <div class="form-group">
                                        <label for="total_amount"></label>
                                        <output name="total_amount" class="form-control" ></output>
                                    </div>
                                </div>
                            <div class="col-sm-12 m-t-30">
                                <button type="submit" class="btn btn-primary btn-round">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                </form>
        </div>
    </div>
</section>

@endsection
