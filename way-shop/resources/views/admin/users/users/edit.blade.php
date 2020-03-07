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
            <form class="form-horizontal" method="POST" action="{{route('user.store')}}">
                @csrf
                @method('PUT')
                <div class="ibox-body">
                    <div class="form-group mb-4 row">
                        <label class="col-sm-2 col-form-label">Full Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="name" value="{{$userInfo->name}}" type="text" placeholder="Full name" required >
                            @if(count($errors) > 0)
                                <small class="text-danger">{{$errors->first('name')}}</small>
                            @endif
                        </div>
                    </div>
                    <div class="form-group mb-4 row">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="email" value="{{$userInfo->email}}" name="email" placeholder="Email address" required >
                            @if(count($errors) > 0)
                                <small class="text-danger">{{$errors->first('email')}}</small>
                            @endif
                        </div>
                    </div>

                    <div class="form-group mb-4 row">
                        <label class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="{{$userInfo->phone}}" name="phone" placeholder="Phone number" required >
                            @if(count($errors) > 0)
                                <small class="text-danger">{{$errors->first('phone')}}</small>
                            @endif
                        </div>
                    </div>

                    <div class="form-group mb-4 row">
                        <label class="col-sm-2 col-form-label" for="old-password" >{{ __('Old Password') }}</label>
                        <div class="col-sm-10">
                            <input id="old-password" type="old-password" class="form-control" name="old-password" placeholder="***********" required >
                            @if(count($errors) > 0)
                                <small class="text-danger">{{$errors->first('old-password')}}</small>
                            @endif
                        </div>

                    </div>

                    <div class="form-group mb-4 row">
                        <label class="col-sm-2 col-form-label" for="password" >{{ __('Password') }}</label>
                        <div class="col-sm-10">
                            <input id="password" type="password" class="form-control" name="password" placeholder="***********" required >
                            @if(count($errors) > 0)
                                <small class="text-danger">{{$errors->first('password')}}</small>
                            @endif
                        </div>

                    </div>

                    <div class="form-group mb-4 row">
                        <label class="col-sm-2 col-form-label" for="password-confirm" >{{ __('Confirm Password') }}</label>
                        <div class="col-sm-10">
                            <input id="password-confirm" type="password" class="form-control" placeholder="***********" name="password_confirmation" required >
                        </div>

                    </div>

                    <div class="form-group mb-4 row">
                        <label class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="{{$userInfo->address}}" name="address" placeholder="Your address" >
                        </div>
                    </div>

                    <div class="form-group mb-4 row">
                        <label class="col-sm-2 col-form-label">City</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="{{$userInfo->city}}" name="city" placeholder="Your City" >
                        </div>
                    </div>


                    <div class="form-group mb-4 row">
                        <label class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                            <textarea id="summernote-user-desc" data-plugin="summernote" data-air-mode="true" class="form-control" name="description" rows="25">
                                {{ $userInfo->description }}
                            </textarea>
                        </div>
                    </div>

                    <div class="form-group mb-4 row">
                        <label class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10 d-flex align-items-center">
                            <label class="radio radio-grey radio-primary radio-inline">
                                <input type="radio" name="status" {{ ($userInfo->status == 1) ? 'checked' : ''}}  value="1" required >
                                <span class="input-span"></span>Active</label>
                            <label class="radio radio-grey radio-primary radio-inline">
                                <input type="radio" {{ ($userInfo->status == 0) ? 'checked' : ''}} value="0" name="status">
                                <span class="input-span"></span>Deactive</label>
                            @if(count($errors) > 0)
                                <small class="text-danger">{{$errors->first('status')}}</small>
                            @endif
                        </div>
                    </div>



                    <div class="form-group mb-4 row">
                        <label class="col-sm-2 col-form-label">Role</label>
                        <div class="col-sm-10">
                            <div class="check-list">
                                @if($roles)
                                    @foreach($roles as $role)
                                        <label class="checkbox checkbox-grey checkbox-primary">
                                            <input type="checkbox" @if($roleOfUsers->contains($role->id)) checked @endif value="{{$role->id}}" name="role[]">
                                            <span class="input-span"></span>{{$role->display_name}}</label>
                                    @endforeach
                                @endif
                            </div>
                            @if(count($errors) > 0)
                                <small class="text-danger">{{$errors->first('role')}}</small>
                            @endif
                        </div>
                    </div>

                    <div class="form-group mb-4 row">
                        <label class="col-sm-2 col-form-label">Avatar</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <input type="text" id="image_label" value="{{$userInfo->image}}" class="form-control" name="image"
                                       aria-label="Image" aria-describedby="button-image">
                                <div class="input-group-append">
                                    <button class="btn btn-success" type="button" id="button-image">Select</button>
                                </div>
                            </div>
                            @if(count($errors) > 0)
                                <small class="text-danger">{{$errors->first('image')}}</small>
                            @endif
                        </div>
                    </div>



                </div>


                <div class="ibox-footer row">
                    <div class="col-sm-10 ml-sm-auto">
                        <button class="btn btn-primary mr-2" type="submit">Submit</button>
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
        const FMButton = function(context) {
            const ui = $.summernote.ui;
            const button = ui.button({
                contents: '<i class="note-icon-picture"></i> ',
                tooltip: 'File Manager',
                click: function() {
                    window.open('/file-manager/summernote', 'fm', 'width=800,height=600');
                    source=1;
                }
            });
            return button.render();
        };

        //Render Button Image

        document.getElementById('button-image').addEventListener('click', (event) => {
            event.preventDefault();
            window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
            source = 2;
        });
        {{--var markupStr = {{$userInfo->description}};--}}
        $('#summernote-user-desc').summernote({
            placeholder: 'Type user description',
            height: 400,
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['fm-button', ['fm']],
            ],
            buttons: {
                fm: FMButton
            }
        });


        function fmSetLink(url) {
            if(source === 1) {
                $('#summernote-user-desc').summernote('insertImage', url);
            } else if (source === 2) {
                document.getElementById('image_label').value = url;
            } else {
                console.error('Error!!');
            }
        }



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
