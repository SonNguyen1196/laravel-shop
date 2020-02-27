@extends('admin.layouts.master')
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
                                    <a class="btn btn-add btn-sm" href="{{route('permission.create')}}"><i class="fa fa-pencil"></i> Edit</a>
                                    <a class="btn btn-danger btn-sm" href=""><i class="fa fa-pencil"></i> Delete</a>
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

