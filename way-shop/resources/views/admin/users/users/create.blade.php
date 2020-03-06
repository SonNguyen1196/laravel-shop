@extends('admin.layouts.master')
@section('head-master')
    <link href="{{asset('admin-assets/vendors/summernote/dist/summernote.css')}}" rel="stylesheet">
@endsection
@section('content')

    <div class="col-md-12">
        <div style="margin-top: 30px" class="ibox ibox-fullheight">
            <div class="ibox-body">
                <div class="header-title">
                    <h1>Add new user</h1>
                </div>
            </div>
            <div class="ibox-head">
                <div class="ibox-title">Fill Info </div>
            </div>
            <form class="form-horizontal" action="javascript:;">
                @csrf
                <div class="ibox-body">
                    <div class="form-group mb-4 row">
                        <label class="col-sm-2 col-form-label">Full Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="name" type="text" placeholder="Full name">
                        </div>
                    </div>
                    <div class="form-group mb-4 row">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="email" name="email" placeholder="Email address">
                        </div>
                    </div>

                    <div class="form-group mb-4 row">
                        <label class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="phone" placeholder="Phone number">
                        </div>
                    </div>

                    <div class="form-group mb-4 row">
                        <label class="col-sm-2 col-form-label" for="password" >{{ __('Password') }}</label>
                        <div class="col-sm-10">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="***********" value="{{ old('password') }}" required autocomplete="password" autofocus>
                            @error('password')
                            <span class="invalid-feedback help-block small" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                    </div>

                    <div class="form-group mb-4 row">
                        <label class="col-sm-2 col-form-label" for="password-confirm" >{{ __('Confirm Password') }}</label>
                        <div class="col-sm-10">
                            <input id="password-confirm" type="password" class="form-control" placeholder="***********" name="password_confirmation" required autocomplete="new-password" autofocus>
                        </div>

                    </div>

                    <div class="form-group mb-4 row">
                        <label class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="address" placeholder="Your qddress">
                        </div>
                    </div>

                    <div class="form-group mb-4 row">
                        <label class="col-sm-2 col-form-label">City</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="city" placeholder="Your City">
                        </div>
                    </div>


                    <div class="form-group mb-4 row">
                        <label class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                            <textarea id="summernote" data-plugin="summernote" data-air-mode="true" class="form-control" name="description" rows="25"></textarea>
                        </div>
                    </div>

                    <div class="form-group mb-4 row">
                        <label class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10 d-flex align-items-center">
                            <label class="radio radio-grey radio-primary radio-inline">
                                <input type="radio" name="status" checked="">
                                <span class="input-span"></span>Active</label>
                            <label class="radio radio-grey radio-primary radio-inline">
                                <input type="radio" name="status">
                                <span class="input-span"></span>Deactive</label>
                        </div>
                    </div>



                    <div class="form-group mb-4 row">
                        <label class="col-sm-2 col-form-label">Role</label>
                        <div class="col-sm-10">
                            <div class="check-list">
                                @if($roles)
                                    @foreach($roles as $role)
                                        <label class="checkbox checkbox-grey checkbox-primary">
                                            <input type="radio" name="role">
                                            <span class="input-span"></span>{{$role->display_name}}</label>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-4 row">
                        <label class="col-sm-2 col-form-label">Avatar</label>
                        <div class="col-sm-10">
                            <input id="upload-avatar-user" name="image" type="file" >
                            <br>
                            <img style="width: 150px; height: 150px; margin-top: 30px" id="avt-preview" src="#" alt="your image" />
                        </div>
                    </div>

                </div>


                <div class="ibox-footer row">
                    <div class="col-sm-10 ml-sm-auto">
                        <button class="btn btn-primary mr-2" type="button">Submit</button>
                        <button class="btn btn-secondary" type="reset">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('javascript')
    <script src="{{asset('admin-assets/vendors/summernote/dist/summernote.min.js')}}"></script>
    <script>
        $('#summernote').summernote({
            placeholder: 'Type user description',
            height: 400
        });
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#avt-preview').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        $('#avt-preview').hide();
        $("#upload-avatar-user").change(function() {
            readURL(this);
            $('#avt-preview').show();
        });
    </script>
@endsection
