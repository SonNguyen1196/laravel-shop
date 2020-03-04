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
                <form action="{{route('permission.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="name">Name Permission</label>
                                <input type="text" id = "name" name="name" class="form-control" placeholder="Enter Name" required>
                                @if(count($errors) > 0)
                                    <small class="text-danger">{{$errors->first('name')}}</small>
                                @endif

                            </div>
                            <div class="form-group">
                                <label for="display_name">Display Name Permission</label>
                                <input type="text" id = "display_name" name="display_name" class="form-control" placeholder="Enter Display Name" required>
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
        <!-- /.content -->
    </div>

@endsection

