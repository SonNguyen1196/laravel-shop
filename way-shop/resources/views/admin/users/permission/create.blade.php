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
                <form action="{{route('permission.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="name-permission">Name Permission</label>
                                <input type="text" id = "name-permission" name="name-permission" class="form-control" placeholder="Enter Name" required>
                                @if(count($errors) > 0)
                                    <small class="text-danger">{{$errors->first('name-permission')}}</small>
                                @endif

                            </div>
                            <div class="form-group">
                                <label for="display-name-permission">Display Name Permission</label>
                                <input type="text" id = "display-name-permission" name="display-name-permission" class="form-control" placeholder="Enter Display Name" required>
                                @if(count($errors) > 0)
                                    <small class="text-danger">{{$errors->first('display-name-permission')}}</small>
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
        <!-- /.content -->
    </div>

@endsection

