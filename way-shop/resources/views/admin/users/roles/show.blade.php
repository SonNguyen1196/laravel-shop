@extends('admin.layouts.master')
@section('content')
    <div class="page-content fade-in-up">
        <div class="ibox">
            <div class="ibox-body">
                <div class="header-title">
                    <h1>Roles Managaer</h1>

                </div>

                <div class="list-permission">
                    @if($getAllPermissionOfRoles)
                        <ul style="list-style: none; padding: 0">
                            @foreach($getAllPermissionOfRoles as $permission)
                                <li><h5>{{ $permission->display_name }}</h5></li>
                            @endforeach
                        </ul>
                    @endif
                </div>

                <div style="margin-bottom: 20px">
                    <a class="btn btn-add btn-primary" href="{{route('role.index')}}">BACK TO ROLE MANAGER</a>
                </div>
            </div>
        </div>
    </div>

@endsection

