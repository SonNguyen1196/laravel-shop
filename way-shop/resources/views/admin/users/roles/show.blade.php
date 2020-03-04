@extends('admin.layouts-bk.master')
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
                <div class="name-role">
                    <h3 style="font-weight: bold">View detail role {{$roleObjs->display_name}}</h3>
                </div>
                <div class="list-permission">
                    @if($getAllPermissionOfRoles)
                        <ul style="list-style: none">
                            @foreach($getAllPermissionOfRoles as $permission)
                                <li><h4>{{ $permission->display_name }}</h4></li>
                            @endforeach
                        </ul>
                    @endif
                </div>

            </div>

        </section>
        <!-- /.content -->
    </div>

@endsection

