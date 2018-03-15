@extends('layouts.auth')

@section('content')
@push('css')
<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

@endpush
    @include('Adminpages.signupnavbar')

    @include('Adminpages.signupfooter')

@push('scripts')
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
@endpush
@endsection