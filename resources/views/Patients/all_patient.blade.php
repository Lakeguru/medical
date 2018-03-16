@extends('layouts.dashboard')

@section('content')

    <section class="content">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>All Patients
                        <small class="text-muted">Welcome to Oreo</small>
                    </h2>
                </div>
                `            <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">
                        <i class="zmdi zmdi-plus"></i>
                    </button>
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Patients</a></li>
                        <li class="breadcrumb-item active">All Patients</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card patients-list">
                        <div class="header">
                            <h2><strong>Patients</strong> List</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right slideUp">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs padding-0">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#All">All</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content m-t-10">
                                <div class="tab-pane table-responsive active" id="All">
                                    <table class="table m-b-0 table-hover">
                                        <thead>
                                        <tr>
                                            <th>Media</th>
                                            <th>S.N</th>
                                            <th>Patients ID</th>
                                            <th>First_Name</th>
                                            <th>Last_Name</th>
                                            <th>DOB</th>
                                            <th>Address</th>
                                            <th>Number</th>
                                            <th>Date Visit</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($patients as $patient)
                                        <tr>
                                            <td><span class="list-icon"><img class="patients-img" src="assetss/images/xs/avatar1.jpg" alt=""></span></td>
                                            <td>KU 00{{$loop->iteration}}</td>
                                            <td><span class="list-name">KU 00{{$patient->id}}</span></td>
                                            <td>{{$patient->first_name}}</td>
                                            <td>{{$patient->last_name}}</td>
                                            <td>{{$patient->DOB}}</td>
                                            <td>{{$patient->address}}</td>
                                            <td>{{$patient->phone_number}}</td>
                                            <td>{{$patient->created_at->toDateTimeString()}}</td>
                                            <td>
                                                @if($patient->status == true)
                                                <span class="badge badge-success">Confirmed</span>
                                                @else
                                                    <span class="badge badge-danger">not Confirmed yet</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($patient->status == false)
                                                    <form id="status-form-{{ $patient->id }}" action="{{ route('patient.status',$patient->id) }}" style="display: none;" method="POST">
                                                        @csrf
                                                    </form>
                                                    <button type="button" class="btn btn-info btn-sm" onclick="if(confirm('Are you verify this request by phone?')){
                                                            event.preventDefault();
                                                            document.getElementById('status-form-{{ $patient->id }}').submit();
                                                            }else {
                                                            event.preventDefault();
                                                        }"><i class="material-icons">done</i>
                                                    </button>
                                                @endif
                                                <form id="delete-form-{{ $patient->id }}" action="{{ route('patient.destory',$patient->id) }}" style="display: none;" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $patient->id }}').submit();
                                                }else {
                                                    event.preventDefault();
                                                        }"><i class="material-icons">delete</i></button>
                                            </td>
                                            
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{--  {{$patients->links()}}  --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection