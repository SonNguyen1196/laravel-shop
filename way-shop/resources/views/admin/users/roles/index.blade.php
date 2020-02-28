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
                @if ($message = Session::get('flag_message_success'))
                    <div class="alert alert-success alert-notification ">
                        <button type="button" class="close" data-dismiss="alert">X</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                <div style="margin-bottom: 20px">
                    <a class="btn btn-add" href="{{route('permission.create')}}">ADD ROLE</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr class="info">
                            <th scope="col">STT</th>
                            <th scope="col">Name</th>
                            <th scope="col">Display Name</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        {{$roles}}
                        <tbody>
                        @foreach($roles as $key => $role)
                            <tr>
                                <th scope="row">{{++$key}}</th>
                                <td>{{ $role->name }}</td>
                                <td>{{ $role->display_name }}</td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="{{route('permission.edit', ['id' => $role->id ])}}"><i class="far fa-eye"></i> View</a>
                                    <a class="btn btn-add btn-sm" href="{{route('permission.edit', ['id' => $role->id ])}}"><i class="fa fa-pencil"></i> Edit</a>
                                    <a class="btn btn-danger btn-sm" href="{{ route('logout') }}"
                                       onclick=" confirm('Are you sure you want to Delete {{$role->display_name}}'); event.preventDefault();
                                                     document.getElementById('delete-permission-{{$role->id}}').submit();">
                                        <i class="fa fa-pencil"></i>{{ __('Delete') }}
                                    </a>

{{--                                    <form id="delete-permission-{{$permission->id}}" action="{{ route('permission.destroy', ['id' => $permission->id]) }}" method="POST" style="display: none;">--}}
{{--                                        @csrf--}}
{{--                                    </form>--}}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div style="margin:auto; text-align: center" >{{ $roles->links() }}</div>
                </div>

            </div>

        </section>
        <!-- /.content -->
    </div>

@endsection

