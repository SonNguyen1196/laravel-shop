@extends('admin.layouts-bk.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="header-icon">
                <i class="fa fa-dashboard"></i>
            </div>
            <div class="header-title">
                <h1>Permission Managaer</h1>
                <small>Very detailed & featured admin.</small>
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
                    <a class="btn btn-add" href="{{route('permission.create')}}">ADD PERMISSION</a>
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
                        <tbody>
                        @foreach($permissions as $key => $permission)
                            <tr>
                                <th scope="row">{{++$key}}</th>
                                <td>{{ $permission->name }}</td>
                                <td>{{ $permission->display_name }}</td>
                                <td>
                                    <a class="btn btn-add " href="{{route('permission.edit', ['id' => $permission->id ])}}"><i class="fa fa-pencil"></i> Edit</a>
                                    <a class="btn btn-danger " href="#"
                                       onclick=" confirm('Are you sure you want to Delete {{$permission->display_name}}'); event.preventDefault();
                                                     document.getElementById('delete-permission-{{$permission->id}}').submit();">
                                        <i class="fa fa-trash-o"></i>{{ __('Delete') }}
                                    </a>

                                    <form id="delete-permission-{{$permission->id}}" action="{{ route('permission.destroy', ['id' => $permission->id]) }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div style="margin:auto; text-align: center" >{{ $permissions->links() }}</div>
                </div>

            </div>

        </section>
        <!-- /.content -->
    </div>

@endsection

