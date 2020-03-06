@extends('admin.layouts.master')
@section('content')

    <div class="page-content fade-in-up">
        <div class="ibox">
            <div class="ibox-body">
                <div class="header-title">
                    <h1>Permission Managaer</h1>

                </div>
                <div style="margin: 20px 0">
                    <a class="btn-success btn" href="{{route('permission.create')}}">ADD ROLE</a>
                </div>
                <div class="table-responsive row">
                    @if ($message = Session::get('flag_message_success'))


                        <div style="width: 100%;" class=" alert-message-action alert alert-info alert-dismissable fade show alert-outline has-icon">
                            <i class="la la-check alert-icon"></i>
                            <button class="close" data-dismiss="alert" aria-label="Close"></button>
                            <strong>Well done!</strong>
                            <br>{{ $message }}.
                        </div>


                    @endif
                    <table class="table table-bordered table-hover">
                        <thead class="thead-default thead-lg">
                        <tr>
                            <th>STT</th>
                            <th>Name</th>
                            <th>Display Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($permissions as $key => $permission)
                            <tr>
                                <th scope="row">{{++$key}}</th>
                                <td>{{ $permission->name }}</td>
                                <td>{{ $permission->display_name }}</td>
                                <td>
                                    <a class="btn btn-add btn-primary " href="{{route('permission.edit', ['id' => $permission->id ])}}"><i class="fa fa-pencil"></i> Edit</a>
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
                </div>
            </div>
        </div>
    </div>

@endsection

