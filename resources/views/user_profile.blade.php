@extends('layout.master')
@section('title','My Profile')
@section('body')
    <body style="transform: none; margin-top: 0px;" data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
    <div id="main" style="transform: none;">
        @include('layout.core.navbar')
        <div class="clearfix"></div>
        <div id="content" style="transform: none;">
            <div class="container" style="transform: none;">
                <div class="row justify-content-md-center" style="transform: none;">
                    <div class="col col-lg-12 col-xl-10" style="transform: none;">
                        <div class="row" style="transform: none;">
                            <div class="col-md-5 col-lg-4 col-xl-4 col-sidebar" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                                <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none; top: 0px; left: 300.8px;"><div id="sidebar" class="sidebar-left">
                                        <div class="sidebar_inner">
                                            <div class="list-group no-border list-unstyled">
                                                <span class="list-group-item heading">Manage Listings</span>
                                                <a href="http://uilove.in/realestate/listo/preview/my_listing_add.html" class="list-group-item"><i class="fa fa-fw fa-plus-square-o"></i> Add Listing</a>
                                                <a href="http://uilove.in/realestate/listo/preview/my_bookmarked_listings.html" class="list-group-item d-flex justify-content-between align-items-center"><span><i class="fa fa-fw fa-bookmark-o"></i> Bookmarked Listing</span>
                                                    <span class="badge badge-primary badge-pill">10</span>
                                                </a>
                                                <a href="http://uilove.in/realestate/listo/preview/my_listings.html" class="list-group-item d-flex justify-content-between align-items-center"><span><i class="fa fa-fw fa-bars"></i> My Listings</span>
                                                    <span class="badge badge-primary badge-pill">7</span>
                                                </a>
                                                <span class="list-group-item heading">Manage Account</span>
                                                <a href="http://uilove.in/realestate/listo/preview/my_profile.html" class="list-group-item active"><i class="fa fa-fw fa-pencil"></i> My Profile</a>
                                                <a href="http://uilove.in/realestate/listo/preview/my_password.html" class="list-group-item"><i class="fa fa-fw fa-lock"></i> Change Password</a>
                                                <a href="http://uilove.in/realestate/listo/preview/my_notifications.html" class="list-group-item"><i class="fa fa-fw fa-bell-o"></i> Notifications</a>
                                                <a href="http://uilove.in/realestate/listo/preview/my_membership.html" class="list-group-item"><i class="fa fa-fw fa-cubes"></i> Membership</a>
                                                <a href="http://uilove.in/realestate/listo/preview/my_payments.html" class="list-group-item"><i class="fa fa-fw fa-credit-card"></i> Payments</a>
                                                <a href="http://uilove.in/realestate/listo/preview/my_account.html" class="list-group-item"><i class="fa fa-fw fa-cog"></i> Account</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="resize-sensor" style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;">
                                        <div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                                            <div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 327px; height: 1772px;"></div>
                                        </div>
                                        <div class="resize-sensor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                                            <div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-8 col-xl-8" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                                <div class="theiaStickySidebar" style="padding-top: 1px; padding-bottom: 1px; position: static; transform: none;">
                                    <div class="page-header bordered">
                                        <h1>My profile <small>Manage your public profile</small></h1>
                                    </div>
                                    <form class="main-body" method="post">
                                        @csrf
                                        <div class="row gutters-sm">
                                            <div class="col-md-30">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="d-flex flex-column align-items-center text-center">
                                                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                                                            <div class="mt-3">
                                                                <h4>{{ \Illuminate\Support\Facades\Auth::user()->fullname }}</h4>
                                                                <p class="text-muted font-size-sm">{{ \Illuminate\Support\Facades\Auth::user()->address }}</p>
                                                                <p class="text-muted font-size-sm">
                                                                    <input type="text" class="form-control" name="avatar" placeholder="Change Avatar(URL Link)">
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                            Tên người dùng:
                                                            <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ \Illuminate\Support\Facades\Auth::user()->username }}" required>
                                                            @error('username')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                            Họ và tên:
                                                            <input type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" value="{{ \Illuminate\Support\Facades\Auth::user()->fullname }}" required>
                                                            @error('fullname')
                                                            <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                            Địa chỉ:
                                                            <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ \Illuminate\Support\Facades\Auth::user()->address }}" required>
                                                            @error('address')
                                                            <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                            Số điện thoại:
                                                            <input type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ \Illuminate\Support\Facades\Auth::user()->phone }}" minlength="10" required>
                                                            @error('phone')
                                                            <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                            Email:
                                                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ \Illuminate\Support\Facades\Auth::user()->email }}" required>
                                                            @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                            <div class="form-group action">
                                                                <button type="submit" class="btn btn-lg btn-primary">Update Profile</button>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="resize-sensor" style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;">
                                        <div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                                            <div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 644px; height: 1772px;"></div>
                                        </div>
                                        <div class="resize-sensor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                                            <div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-primary btn-circle" id="to-top" style="visibility: hidden; opacity: 0;"><i class="fa fa-angle-up"></i></button>
        @include('layout.core.footer')
    </div>
    </body>
    <style>
        body{
            margin-top:20px;
            color: #1a202c;
            text-align: left;
            background-color: #e2e8f0;
        }
        .main-body {
            padding: 15px;
        }
        .card {
            box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid rgba(0,0,0,.125);
            border-radius: .25rem;
        }

        .card-body {
            flex: 1 1 auto;
            min-height: 1px;
            padding: 1rem;
        }

        .gutters-sm {
            margin-right: -8px;
            margin-left: -8px;
        }

        .gutters-sm>.col, .gutters-sm>[class*=col-] {
            padding-right: 8px;
            padding-left: 8px;
        }
        .mb-3, .my-3 {
            margin-bottom: 1rem!important;
        }

        .bg-gray-300 {
            background-color: #e2e8f0;
        }
        .h-100 {
            height: 100%!important;
        }
        .shadow-none {
            box-shadow: none!important;
        }
    </style>
@endsection
