@extends('admin.layouts.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section style="padding-bottom: 25px;" class="content-header">
            <div class="header-icon">
                <i class="fa fa-dashboard"></i>
            </div>
            <div class="header-title">
                <h1>Add Role To Manager</h1>
            </div>
        </section>
        <!-- Main content -->

        <section class="content">
            <div class="row">
                <form action="{{route('role.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="name">Name Role</label>
                                <input type="text" id = "name" name="name" class="form-control" placeholder="Enter Name" required>
                                @if(count($errors) > 0)
                                    <small class="text-danger">{{$errors->first('name')}}</small>
                                @endif

                            </div>
                            <div class="form-group">
                                <label for="display_name">Display Name Role</label>
                                <input type="text" id = "display_name" name="display_name" class="form-control" placeholder="Enter Display Name" required>
                                @if(count($errors) > 0)
                                    <small class="text-danger">{{$errors->first('display_name')}}</small>
                                @endif
                            </div>

                            <h5 style="font-weight: bold">Please Choose Permission Of Role</h5>
                            @if(count($errors) > 0)
                                <small class="text-danger">{{$errors->first('role_permission')}}</small>
                            @endif
                            @if($permissions)
                                @foreach($permissions as $permission)
                                    <div class="form-group">
                                        <label><input name="role_permission[]" type="checkbox" value="{{$permission->id}}"> {{$permission->display_name}}</label>
                                    </div>
                                @endforeach
                            @endif

                            <div >
                                <button class="btn btn-success" type="submit">Save</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>

        </section>
        <!-- /.content -->
    </div>

@endsection

