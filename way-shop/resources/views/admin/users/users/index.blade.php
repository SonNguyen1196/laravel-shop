@extends('admin.layouts.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section style="padding-bottom: 25px;" class="content-header">
            <div class="header-icon">
                <i class="fa fa-dashboard"></i>
            </div>
            <div class="header-title">
                <h1>Users Managaer</h1>
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
                    <a class="btn btn-add" href="{{route('user.create')}}">ADD USER</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="list-datatable">
                        <thead>
                        <tr class="info">
                            <th scope="col">ID</th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col" style="width: 18%;">Address</th>
                            <th scope="col">City</th>
                            <th scope="col">Status</th>
{{--                            <th scope="col">Action</th>--}}
                        </tr>
                        </thead>

                        <tbody>
{{--                        @if($userData)--}}
{{--                            @foreach($userData as $key => $user)--}}
{{--                                <tr>--}}
{{--                                    <th scope="row">{{++$key}}</th>--}}
{{--                                    <td><img src="{{ $user->image }}" width="80" height="80"></td>--}}
{{--                                    <td>{{ $user->name }}</td>--}}
{{--                                    <td>{{ $user->email }}</td>--}}
{{--                                    <td>{{ $user->phone }}</td>--}}
{{--                                    <td>{{ $user->address }}</td>--}}
{{--                                    <td>{{ $user->city }}</td>--}}
{{--                                    <td>--}}
{{--                                        <input data-on="Active" data-off="Deactive"  type="checkbox" {{ ($user->status == 1) ? 'checked' : '' }} data-toggle="toggle">--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <a class="btn btn-primary" href="{{route('user.show', ['id' => $user->id ])}}"><i class="fa fa-eye"></i> View</a>--}}
{{--                                        <a class="btn btn-add" href="{{route('user.edit', ['id' => $user->id ])}}"><i class="fa fa-pencil"></i> Edit</a>--}}
{{--                                        <a class="btn btn-danger" href="#"--}}
{{--                                           onclick=" confirm('Are you sure you want to Delete {{$user->name}}'); event.preventDefault();--}}
{{--                                               document.getElementById('delete-role-{{$user->id}}').submit();">--}}
{{--                                            <i class="fa fa-trash-o"></i>{{ __('Delete') }}--}}
{{--                                        </a>--}}

{{--                                        <form id="delete-role-{{$user->id}}" action="{{ route('user.destroy', ['id' => $user->id]) }}" method="POST" style="display: none;">--}}
{{--                                            @csrf--}}
{{--                                        </form>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                            @endforeach--}}
{{--                        @endif--}}
                        </tbody>
                        <tfoot>
                        <tr class="info">
                            <th scope="col">ID</th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col" style="width: 18%;">Address</th>
                            <th scope="col">City</th>
                            <th scope="col">Status</th>
{{--                            <th scope="col">Action</th>--}}
                        </tr>
                        </tfoot>

                    </table>
                </div>

            </div>

        </section>
        <!-- /.content -->
    </div>

@endsection

