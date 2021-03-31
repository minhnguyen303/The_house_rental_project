@extends('layout.master')
@section('title','My Profile')
@section('body')
    <body style="transform: none; margin-top: 0px;" data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
    <div id="main" style="transform: none;">
        @include('layout.core.navbar')
        <div class="clearfix"></div>
        <form method="post">
            @csrf
            <div id="content" style="transform: none;">
                <div class="container" style="transform: none;">
                    <div class="row justify-content-md-center" style="transform: none;">
                        <div class="col col-lg-100 col-xl-100" style="transform: none;">
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
                                                    <a href="{{ route('page.user_profile') }}" class="list-group-item active"><i class="fa fa-fw fa-pencil"></i> My Profile</a>
                                                    <a href="{{ route('auth.change_password') }}" class="list-group-item"><i class="fa fa-fw fa-lock"></i> Change Password</a>
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
                                            <h1>Trang cá nhân <small>Quản lý trang cá nhân</small></h1>
                                        </div>
                                        <form method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-sm-5 d-flex">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="d-flex flex-column align-items-center text-center">
                                                                <div class="picture-container">
                                                                    <div class="picture">
                                                                        <img src="{{ asset('/storage/avatars/' . \Illuminate\Support\Facades\Auth::user()->avatar) }}" class="rounded-circle" id="wizardPicturePreview" width="150px" title=""/>
                                                                        <h4>{{ \Illuminate\Support\Facades\Auth::user()->username }}</h4>
                                                                        <p>{{ \Illuminate\Support\Facades\Auth::user()->email }}</p>
                                                                        <input type="file" id="wizard-picture"><br>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-7 d-flex">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <h6 class="mb-0">Họ và tên</h6>
                                                                </div>
                                                                <div class="col-sm-9 text-secondary">
                                                                    <input type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" value="{{ \Illuminate\Support\Facades\Auth::user()->fullname }}" required>
                                                                    @error('fullname')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <h6 class="mb-0">Email</h6>
                                                                </div>
                                                                <div class="col-sm-9 text-secondary">
                                                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ \Illuminate\Support\Facades\Auth::user()->email }}" required>
                                                                    @error('email')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                `       </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <h6 class="mb-0">Số điện thoại</h6>
                                                                </div>
                                                                <div class="col-sm-9 text-secondary">
                                                                    <input type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ \Illuminate\Support\Facades\Auth::user()->phone }}" minlength="10" required>
                                                                    @error('phone')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <h6 class="mb-0">Địa chỉ</h6>
                                                                </div>
                                                                <div class="col-sm-9 text-secondary">
                                                                    <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ \Illuminate\Support\Facades\Auth::user()->address }}" required>
                                                                    @error('address')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="row">
                                                                <button type="submit" class="btn btn-lg btn-primary">Cập nhật</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="resize-sensor" style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;">
                                                <div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                                                    <div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 644px; height: 1772px;"></div>
                                                </div>
                                                <div class="resize-sensor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                                                    <div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <button class="btn btn-primary btn-circle" id="to-top" style="visibility: hidden; opacity: 0;"><i class="fa fa-angle-up"></i></button>
        @include('layout.core.footer')
    </div>
    <script>
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>
    </body>
@endsection
