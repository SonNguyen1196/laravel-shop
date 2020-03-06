@extends('admin.layouts.master')
@section('content')
    <div class="page-content fade-in-up">
        <div class="ibox">
            <div class="ibox-body">
                <div class="header-title">
                    <h1>Users Managaer</h1>

                </div>
                <div style="margin: 20px 0">
                    <a class="btn-success btn" href="{{route('user.create')}}">ADD USER</a>
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
                    <table class="table table-bordered table-hover" id="list-datatable">
                        <thead class="thead-default thead-lg">
                            <tr>
                                <th>STT</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>

                        <tfoot class="thead-default thead-lg">
                            <tr>
                                <th>STT</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
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
