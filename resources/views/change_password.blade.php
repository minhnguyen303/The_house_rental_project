@extends('layout.master')
@section('title','Đổi mật khẩu')
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
                                <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
                                    <div id="sidebar" class="sidebar-left">
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
                                                <a href="http://uilove.in/realestate/listo/preview/my_profile.html" class="list-group-item"><i class="fa fa-fw fa-pencil"></i> My Profile</a>
                                                <a href="http://uilove.in/realestate/listo/preview/my_password.html" class="list-group-item active"><i class="fa fa-fw fa-lock"></i> Change Password</a>
                                                <a href="http://uilove.in/realestate/listo/preview/my_notifications.html" class="list-group-item"><i class="fa fa-fw fa-bell-o"></i> Notifications</a>
                                                <a href="http://uilove.in/realestate/listo/preview/my_membership.html" class="list-group-item"><i class="fa fa-fw fa-cubes"></i> Membership</a>
                                                <a href="http://uilove.in/realestate/listo/preview/my_payments.html" class="list-group-item"><i class="fa fa-fw fa-credit-card"></i> Payments</a>
                                                <a href="http://uilove.in/realestate/listo/preview/my_account.html" class="list-group-item"><i class="fa fa-fw fa-cog"></i> Account</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="resize-sensor" style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;">
                                        <div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                                            <div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 327px; height: 564px;"></div>
                                        </div>
                                        <div class="resize-sensor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                                            <div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-8 col-xl-8" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                                <div class="theiaStickySidebar" style="padding-top: 1px; padding-bottom: 1px; position: static; transform: none; left: 617.463px; top: 0px;">
                                    <div class="page-header bordered">
                                        <h1>Đổi mật khẩu</h1>
                                    </div>
                                    <form action="{{route('change_password')}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label>Mật khẩu hiện tại</label>
                                            <input type="password" class="form-control form-control-lg @error('current_password') is-invalid @enderror" name="current_password" placeholder="Nhập mật khẩu hiện tại" minlength="6" maxlength="8" required>
                                            @error('current_password')
                                                <span class="invalid-feedback" role="alert">
                                                    <p class="alert alert-info">{{ $message }}</p>
                                                </span>
                                            @enderror
                                            @if(Session::has('message_1'))
                                                <p class="alert alert-info">{{ Session::get('message_1') }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Mật khẩu mới</label>
                                            <input type="password" class="form-control form-control-lg @error('new_password') is-invalid @enderror" name="new_password" placeholder="Nhập mật khẩu mới" minlength="6" maxlength="8" required>
                                            @error('new_password')
                                                <span class="invalid-feedback" role="alert">
                                                    <p class="alert alert-info">{{ $message }}</p>
                                                </span>
                                            @enderror
                                            @if(Session::has('message_2'))
                                                <p class="alert alert-info">{{ Session::get('message_2') }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Xác nhận mật khẩu</label>
                                            <input type="password" class="form-control form-control-lg @error('password_confirm') is-invalid @enderror" name="password_confirm" placeholder="Xác nhận" minlength="6" maxlength="8" required>
                                            @error('password_confirm')
                                                <span class="invalid-feedback" role="alert">
                                                    <p class="alert alert-info">{{ $message }}</p>
                                                </span>
                                            @enderror
                                            @if(Session::has('message_3'))
                                                <p class="alert alert-info">{{ Session::get('message_3') }}</p>
                                            @endif
                                        </div>
                                        <hr>
                                        <div class="form-group action">
                                            <button type="submit" class="btn btn-lg btn-primary" onclick="return confirm('Xác nhận thay đổi ?')">Lưu</button>
                                        </div>
                                    </form>
                                    <div class="resize-sensor" style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;">
                                        <div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                                            <div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 644px; height: 564px;"></div>
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
@endsection
