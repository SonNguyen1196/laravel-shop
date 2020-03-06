@extends('admin.layouts.master')
@section('content')

    <div class="page-header">
        <div class="ibox flex-1">
            <div class="ibox-body">
                <div class="flexbox">
                    <div class="flexbox-b">
                        <div class="ml-5 mr-5">
                            <img class="img-circle" src="assets/img/users/u8.jpg" alt="image" width="110" />
                        </div>
                        <div>
                            <h4>Lynn Weaver</h4>
                            <div class="text-muted font-13 mb-3">
                                <span class="mr-3"><i class="ti-location-pin mr-2"></i>New York, USA</span>
                                <span><i class="ti-calendar mr-2"></i>12.04.2018</span>
                            </div>
                            <div>
                                        <span class="mr-3">
                                            <span class="badge badge-primary badge-circle mr-2 font-14" style="height:30px;width:30px;"><i class="ti-briefcase"></i></span>Partner</span>
                                <span>
                                            <span class="badge badge-pink badge-circle mr-2 font-14" style="height:30px;width:30px;"><i class="ti-cup"></i></span>Vip Status</span>
                            </div>
                        </div>
                    </div>
                    <div class="d-inline-flex">
                        <div class="px-4 text-center">
                            <div class="text-muted font-13">ARTICLES</div>
                            <div class="h2 mt-2">134</div>
                        </div>
                        <div class="px-4 text-center">
                            <div class="text-muted font-13">FOLLOWERS</div>
                            <div class="h2 mt-2">540</div>
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
                            <div class="col-4 text-muted">First Name:</div>
                            <div class="col-8">Lynn</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4 text-muted">Last Name:</div>
                            <div class="col-8">Weaver</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4 text-muted">Age:</div>
                            <div class="col-8">26</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4 text-muted">Position:</div>
                            <div class="col-8">Web Designer</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4 text-muted">City:</div>
                            <div class="col-8">New York, USA</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4 text-muted">Address:</div>
                            <div class="col-8">228 Park Ave Str.</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4 text-muted">Phone:</div>
                            <div class="col-8">+1-202-555-0134</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4 text-muted">Email:</div>
                            <div class="col-8">lweaver@gmail.com</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div style="margin-bottom: 20px">
            <a class="btn btn-success" href="{{route('user.index')}}">BACK TO USERS MANAGER</a>
        </div>
    </div>

@endsection

