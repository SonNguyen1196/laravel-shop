@extends('admin.layouts-bk.master')
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

@section('javascript')
    <script>
        $(document).ready(function () {
            setTimeout(function(){
                $('.alert-notification').slideUp();
            }, 4000);

            $(function() {
                $('#list-datatable').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{{route('user.list-users')}}',
                    columns: [
                        {data: 'id'},
                        {data: 'image'},
                        {data: 'name'},
                        {data: 'email'},
                        {data: 'phone'},
                        {data: 'address'},
                        {data: 'status'},
                        {data: 'action', name: 'action', orderable: false, searchable: false}
                    ],
                    columnDefs: [
                        { targets: 1,
                            render: function(data) {
                                return '<img width="80" height="80" src="'+data+'">'
                            }
                        },
                        { targets: 6,
                            render: function(data) {
                                var newData = (data == 1) ? "checked" : " ";
                                return '<input class="status-toggle" type="checkbox" '+ newData +' data-toggle="toggle">';

                            }
                        }
                    ],
                    "fnDrawCallback": function() {
                        $('.status-toggle').bootstrapToggle();
                    },
                });


            });

        })
    </script>
@endsection
