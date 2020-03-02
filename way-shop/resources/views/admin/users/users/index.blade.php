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
                            <th scope="col" style="width: 7%">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col" style="width: 18%">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col" style="width: 18%;">Address</th>
                            <th scope="col">Status</th>
                            <th scope="col"  style="width: 16%;">Action</th>
                        </tr>
                        </thead>

                        <tbody>

                        </tbody>
                        <tfoot>
                        <tr class="info">
                            <th scope="col">ID</th>
                            <th scope="col" style="width: 7%">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col" style="width: 18%">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col" style="width: 18%;">Address</th>
                            <th scope="col">Status</th>
                            <th scope="col"  style="width: 16%;">Action</th>
                        </tr>
                        </tfoot>

                    </table>
                </div>

            </div>

        </section>
        <!-- /.content -->
    </div>

@endsection

