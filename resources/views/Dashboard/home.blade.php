@extends('layouts.dashboard')

@section('content')
    Welcome   {{ Auth::user()->email }}
@endsection