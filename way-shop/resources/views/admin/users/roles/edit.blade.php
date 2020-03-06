@extends('admin.layouts.master')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="header-title">
                <h1 style="margin: 20px 0">EDIT ROLE</h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="ibox ibox-fullheight">
                <div class="ibox-head">
                    <div class="ibox-title">FILL INFO TO FORM</div>
                </div>

                <form class="form-horizontal" action="{{route('role.update', ['id' => $roleObjs->id])}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="ibox-body">
                        <div class="form-group mb-4 row">
                            <label for="name" class="col-sm-2 col-form-label">Name Permission</label>
                            <div class="col-sm-10">
                                <input type="text" id = "name" value="{{$roleObjs->name}}" name="name" class="form-control" placeholder="Enter Name" required>
                                @if(count($errors) > 0)
                                    <small class="text-danger">{{$errors->first('name')}}</small>
                                @endif
                            </div>
                        </div>

                        <div class="form-group mb-4 row">
                            <label class="col-sm-2 col-form-label" for="display_name">Display Name</label>
                            <div class="col-sm-10">
                                <input type="text" id = "display_name" value="{{$roleObjs->display_name}}" name="display_name" class="form-control" placeholder="Enter Display Name" required>
                                @if(count($errors) > 0)
                                    <small class="text-danger">{{$errors->first('display_name')}}</small>
                                @endif
                            </div>
                        </div>

                        <div class="form-group mb-0 row">
                            <label class="col-sm-2 col-form-label">Choose Permission Of Role</label>
                            @if(count($errors) > 0)
                                <small class="text-danger">{{$errors->first('role_permission')}}</small>
                            @endif
                            <div class="col-sm-10">
                                <div class="check-list">
                                    @if($permissions)
                                        @foreach($permissions as $permission)
                                            <label class="checkbox checkbox-grey checkbox-primary">
                                                <input type="checkbox" name="role_permission[]" @if($getAllPermissionOfRoles->contains($permission->id)) checked @endif value="{{$permission->id}}">
                                                <span class="input-span"></span>{{$permission->display_name}}</label>

                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="ibox-footer row">
                        <div class="col-sm-10 ml-sm-auto">
                            <button class="btn btn-primary mr-2" type="submit">Submit</button>
                            <a class="btn btn-secondary"  href="{{route('role.index')}}">Back to role manager</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection

