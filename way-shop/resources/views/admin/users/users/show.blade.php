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

                <div style="margin-bottom: 20px">
                    <a class="btn btn-add" href="{{route('user.index')}}">BACK TO USERS MANAGER</a>
                </div>

                <div class="col-sm-12 col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-header-headshot"style="width: 200px; height: 200px"></div>
                        </div>
                        <div class="card-content">
                            <div class="card-content-member text-center">
                                <h4 class="m-t-0">Alrazy</h4>
                                <p class="m-t-0">Dhaka</p>
                            </div>
                            <div class="card-content-languages">
                                <div class="card-content-languages-group">
                                    <div>
                                        <h4>Speaks:</h4>
                                    </div>
                                    <div>
                                        <ul>
                                            <li>
                                                English
                                                <div class="fluency fluency-4"></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content-languages-group">
                                    <div>
                                        <h4>Learning:</h4>
                                    </div>
                                    <div>
                                        <ul>
                                            <li>Spanish,</li>
                                            <li>Russian,</li>
                                            <li>German</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-content-summary">
                                <p>Specialties are Creative UI, HTML5, CSS3, Semantic Web, Responsive Layouts, Web Standards Compliance, Performance Optimization, Cross Device Troubleshooting.</p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="card-footer-stats">
                                <div>
                                    <p>PROJECTS:</p>
                                    <i class="fa fa-users"></i><span>241</span>
                                </div>
                                <div>
                                    <p>MESSAGES:</p>
                                    <i class="fa fa-coffee"></i><span>350</span>
                                </div>
                                <div>
                                    <p>Last online</p>
                                    <span class="stats-small">3 days ago</span>
                                </div>
                            </div>
                            <div class="card-footer-message">
                                <h4><i class="fa fa-comments"></i> Message me</h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>
        <!-- /.content -->
    </div>

@endsection

