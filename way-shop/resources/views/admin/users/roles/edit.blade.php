@extends('admin.layouts.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section style="padding-bottom: 25px;" class="content-header">
            <div class="header-icon">
                <i class="fa fa-dashboard"></i>
            </div>
            <div class="header-title">
                <h1>Edit Permission</h1>
{{--                <small>Very detailed & featured admin.</small>--}}
            </div>
        </section>
        <!-- Main content -->

        @if($permission)
            <section class="content">
                <div class="row">
                    <form action="{{route('permission.update', ['id' => $permission->id ])}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="name">Name Permission</label>
                                    <input type="text" id = "name" value="{{$permission->name}}" name="name" class="form-control" placeholder="Enter Name" required>
                                    @if(count($errors) > 0)
                                        <small class="text-danger">{{$errors->first('name')}}</small>
                                    @endif

                                </div>
                                <div class="form-group">
                                    <label for="display_name">Display Name Permission</label>
                                    <input type="text" id = "display_name" value="{{$permission->display_name}}" name="display_name" class="form-control" placeholder="Enter Display Name" required>
                                    @if(count($errors) > 0)
                                        <small class="text-danger">{{$errors->first('display_name')}}</small>
                                    @endif
                                </div>
                                <div >
                                    <button class="btn btn-success" type="submit">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </section>
        @endif
        <!-- /.content -->
    </div>

@endsection

