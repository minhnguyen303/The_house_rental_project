@extends('layout.master')
@section('title') Login @endsection
@section('body')
    <body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0" style="margin-top: 0px;">
    <div id="main">
        @include('layout.core.nav')
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-md-12 col-lg-10 col-xl-8">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a
                                    href="http://uilove.in/realestate/listo/preview/signin.html#">Home</a></li>
                            <li class="breadcrumb-item"><a
                                    href="http://uilove.in/realestate/listo/preview/signin.html#">Account</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Login</li>
                        </ol>
                    </nav>
                    <div class="page-header">
                        <h1>Vui lòng đăng nhập</h1>
                    </div>
                </div>
            </div>
        </div>
        <div id="content">
            <div class="container">
                <div class="row justify-content-md-center align-items-center">
                    <div class="col col-md-6  col-lg-5 col-xl-4">
                        <ul class="nav nav-tabs tab-lg" role="tablist">
                            <li role="presentation" class="nav-item">
                                <a class="nav-link active" href="{{route('page.login')}}">Đăng nhập</a></li>
                            <li role="presentation" class="nav-item">
                                <a class="nav-link" href="{{route('page.register')}}">Đăng ký</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="login">
                                <form action="{{route('login')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="username">Tên người dùng</label>
                                        <input type="text" value="{{ old('username') }}" name="username" id="username" class="form-control form-control-lg @error('username') is-invalid @enderror "
                                               placeholder="User name" required>
                                        @error('username')
                                        <p class="py-2 mb-3 text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Mật khẩu</label>
                                        <input type="password" value="{{ old('password') }}" name="password" id="password" class="form-control form-control-lg @error('password') is-invalid @enderror"
                                               placeholder="Password" required minlength="6" maxlength="32">
                                        @error('password')
                                        <p class="py-2 mb-3 text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    {{--<p class="text-lg-right"><a href="#">Quên mật khẩu</a></p>--}}
                                    <div class="checkbox">
                                        <input type="checkbox" name="remember_me" id="remember_me">
                                        <label for="remember_me">Ghi nhớ đăng nhập</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg">Đăng nhập</button>
                                    <div class="socal-login-buttons mt-4">
                                        <a href="{{route('login.google')}}" class="btn btn-social btn-block btn-google">
                                            <i class="icon fa fa-google"></i> Đăng nhập với tài khoản Google</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-primary btn-circle" id="to-top" style="visibility: hidden; opacity: 0;"><i
                class="fa fa-angle-up"></i></button>
        @include('layout.core.footer')
    </div>

    </body>
@endsection
