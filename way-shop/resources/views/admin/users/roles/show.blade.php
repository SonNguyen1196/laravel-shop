@extends('admin.layouts.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section style="padding-bottom: 25px;" class="content-header">
            <div class="header-icon">
                <i class="fa fa-dashboard"></i>
            </div>
            <div class="header-title">
                <h1>Roles Managaer</h1>
            </div>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">

                <div style="margin-bottom: 20px">
                    <a class="btn btn-add" href="{{route('role.index')}}">BACK TO ROLE MANAGER</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr class="info">
                            <th scope="col">STT</th>
                            <th scope="col">Role</th>
                            <th scope="col">Permission</th>
                        </tr>
                        </thead>
                        {{$roles}}
                        <tbody>
                        @foreach($roles as $key => $role)
                            <tr>
                                <th scope="row">{{++$key}}</th>
                                <td>{{ $role->name }}</td>
                                <td>{{ $role->display_name }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>

        </section>
        <!-- /.content -->
    </div>

@endsection

