@extends('admin.layouts-bk.master')
@section('head-master')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">

@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section style="padding-bottom: 25px;" class="content-header">
            <div class="header-icon">
                <i class="fa fa-dashboard"></i>
            </div>
            <div class="header-title">
                <h1>Media Media</h1>
            </div>
        </section>
        <div style="height: 600px;">
            <div id="fm"></div>
        </div>
        <!-- Main content -->
{{--        <section class="content">--}}
{{--            <div class="row">--}}
{{--                @if ($message = Session::get('flag_message_success'))--}}
{{--                    <div class="alert alert-success alert-notification ">--}}
{{--                        <button type="button" class="close" data-dismiss="alert">X</button>--}}
{{--                        <strong>{{ $message }}</strong>--}}
{{--                    </div>--}}
{{--                @endif--}}
{{--                <div class="table-responsive">--}}
{{--                    <table class="table table-bordered table-hover" id="medias-datatable">--}}
{{--                        <thead>--}}
{{--                        <tr class="info">--}}
{{--                            <th scope="col">ID</th>--}}
{{--                            <th scope="col" style="width: 7%">Image</th>--}}
{{--                            <th scope="col">Name</th>--}}
{{--                            <th scope="col" style="width: 18%">Alt</th>--}}
{{--                            <th scope="col">Action</th>--}}
{{--                        </tr>--}}
{{--                        </thead>--}}

{{--                        <tbody>--}}

{{--                        </tbody>--}}
{{--                        <tfoot>--}}
{{--                        <tr class="info">--}}
{{--                            <th scope="col">ID</th>--}}
{{--                            <th scope="col" style="width: 7%">Image</th>--}}
{{--                            <th scope="col">Name</th>--}}
{{--                            <th scope="col" style="width: 18%">Alt</th>--}}
{{--                            <th scope="col">Action</th>--}}
{{--                        </tr>--}}
{{--                        </tfoot>--}}

{{--                    </table>--}}
{{--                </div>--}}

{{--            </div>--}}

{{--        </section>--}}
        <!-- /.content -->
    </div>

@endsection

@section('javascript')
    <script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
@endsection

