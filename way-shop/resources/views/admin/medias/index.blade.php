@extends('admin.layouts.master')
@section('head-master')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">

@endsection
@section('content')

    <div style="margin: 30px 0" class="header-title">
        <h1>Media Media</h1>
    </div>
    <div style="height: 600px;">
        <div id="fm"></div>
    </div>

@endsection

@section('javascript')
    <script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
@endsection

