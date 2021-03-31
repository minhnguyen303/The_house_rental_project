@php($route = \Illuminate\Support\Facades\Route::currentRouteName())
<div class="col-md-5 col-lg-4 col-xl-4 col-sidebar">
    <div id="sidebar" class="sidebar-left">
        <div class="sidebar_inner">
            <div class="list-group no-border list-unstyled">
                <span class="list-group-item heading">Quản lý thuê nhà</span>
                <a href="{{ route('house.create') }}" class="list-group-item {{ ($route == 'house.create') ? 'active' : '' }}"><i class="fa fa-fw fa-plus-square-o"></i> Đăng bài cho thuê nhà</a>
                <a href="#" class="list-group-item d-flex justify-content-between align-items-center"><span><i class="fa fa-fw fa-bookmark-o"></i> Nhà cho thuê</span>
                    <span class="badge badge-primary badge-pill">10</span>
                </a>
                <a href="#" class="list-group-item d-flex justify-content-between align-items-center"><span><i class="fa fa-fw fa-bars"></i> Nhà đã thuê</span>
                    <span class="badge badge-primary badge-pill">7</span>
                </a>
                <a href="{{ route('user.rentalRequest') }}" class="list-group-item d-flex justify-content-between align-items-center {{ ($route == 'user.rentalRequest') ? 'active' : '' }}"><span><i class="fa fa-fw fa-bars"></i> Yêu cầu thuê nhà</span>
                    <span class="badge badge-primary badge-pill">{{ \Illuminate\Support\Facades\DB::table('rental_requests')->where('owner_house_id', \Illuminate\Support\Facades\Auth::id())->count() }}</span>
                </a>
                <span class="list-group-item heading">Quản lý tài khoản</span>
                <a href="{{ route('user.profile') }}" class="list-group-item {{ ($route == 'user.profile') ? 'active' : '' }}"><i class="fa fa-fw fa-pencil"></i> Thông tin của tôi</a>
                <a href="{{ route('auth.change_password') }}" class="list-group-item {{ ($route == 'auth.change_password') ? 'active' : '' }}"><i class="fa fa-fw fa-lock"></i> Đổi mật khẩu</a>
            </div>
        </div>
    </div>
</div>
