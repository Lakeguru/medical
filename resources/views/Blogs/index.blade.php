@extends('layouts.dashboard')

@section('content')

<section class="content">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Add Departments
                    <small>Welcome to Oreo</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Departments</a></li>
                        <li class="breadcrumb-item active">Add</li>
                    </ul>
                </div>
            </div>
        </div>    
        <div class="container-fluid">        
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Add</strong> Blog<small> text here...</small> </h2>
                            <ul class="header-dropdown">                            
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form action="/post/create" method="post" enctype="multipart/form-data">
                            <div class="row clearfix">
                                    @csrf
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="title"  placeholder="Blog Title">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                        <div class="form-group">
                                            <select name ="blog_tag" class="form-control show-tick">
                                                    <option>Select Category --</option>
                                                    <option>Web Design</option>
                                                </select>
                                        </div>
                                </div>

                                

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea rows="4" class="form-control no-resize" name="content"  placeholder="Please type what you want..."></textarea>
                                    </div>
                                </div>

                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <button type="submit" value="save" class="btn btn-primary btn-round">Submit</button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection