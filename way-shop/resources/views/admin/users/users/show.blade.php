@extends('admin.layouts.master')
@section('content')

    <div class="page-header">
        <div class="ibox flex-1">
            <div class="ibox-body">
                <div class="flexbox">
                    <div class="flexbox-b">
                        <div class="ml-5 mr-5">
                            <img class="img-circle" src="{{$user->image}}" alt="image" width="110" />
                        </div>
                        <div>
                            <h4>{{$user->name}}</h4>
                            <div class="text-muted font-13 mb-3">
                                <span class="mr-3"><i class="ti-location-pin mr-2"></i>{{$user->address}}, {{$user->city}}</span>
                            </div>
                            <div>
                                <span class="mr-3">
                                    <span class="badge badge-primary badge-circle mr-2 font-14" style="height:30px;width:30px;"><i class="ti-briefcase"></i></span>
                                    {{ implode(", ",$roleOfusers) }}
                                    </span>
                                <span>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-body">
                        <h5 class="font-strong mb-4">GENERAL INFORMATION</h5>
                        <div class="row mb-2">
                            <div class="col-4 text-muted">Full Name:</div>
                            <div class="col-8">{{$user->name}}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4 text-muted">Email:</div>
                            <div class="col-8">{{$user->email}}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4 text-muted">Phone:</div>
                            <div class="col-8">{{$user->phone}}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4 text-muted">Address:</div>
                            <div class="col-8">{{$user->address}}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4 text-muted">City:</div>
                            <div class="col-8">{{$user->city}}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4 text-muted">Address:</div>
                            <div class="col-8">228 Park Ave Str.</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4 text-muted">Status:</div>
                            <div class="col-8">{{($user->status == 1) ? 'Active' : 'Deactive'}}</div>
                        </div>

                        <h5 style="margin-top: 20px" class="font-strong mb-4">Description</h5>
                        <div>{!! $user->description !!}</div>
                    </div>
                </div>
            </div>

        </div>
        <div style="margin-bottom: 20px">
            <a class="btn btn-success" href="{{route('user.index')}}">BACK TO USERS MANAGER</a>
        </div>
    </div>

@endsection

