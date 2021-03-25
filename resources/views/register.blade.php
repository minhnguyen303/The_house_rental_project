@extends('layout.master')
@section('title','Đăng ký')
@section('body')
    <body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
    <div id="main">
        @include('layout.core.nav')
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-md-12 col-lg-10 col-xl-8">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Home</a></li>
                            <li class="breadcrumb-item"><a href="">Account</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Register</li>
                        </ol>
                    </nav>
                    <div class="page-header">
                        <h1>Bạn chưa có tài khoản ?</h1>
                    </div>
                </div>
            </div>
        </div>
        <div id="content">
            <div class="container">
                <div class="row justify-content-md-center align-items-center">
                    <div class="col col-md-6  col-lg-5 col-xl-4">
                        <ul class="nav nav-tabs tab-lg" role="tablist">
                            <li role="presentation" class="nav-item"><a class="nav-link" href="{{route('page.login')}}">Đăng nhập</a></li>
                            <li role="presentation" class="nav-item"><a class="nav-link active" href="{{route('page.register')}}">Đăng Ký</a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="login">
                                <form method="post" action="{{route('register')}}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Tên người dùng</label>
                                        <input id="name" type="text" value="{{ old('username') }}" class="form-control @error('username') is-invalid @enderror" placeholder="User Name" name="username">
                                        @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Mật khẩu</label>
                                        <input type="password" id="password_confirmation" class="form-control form-control-lg @error('password_confirmation') is-invalid @enderror" name="password_confirmation" placeholder="Password">
                                        @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Xác nhận mật khẩu</label>
                                        <input type="password" id="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" placeholder="Confirm Password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Số điện thoại</label>
                                        <input type="text" value="{{ old('phone') }}" class="form-control form-control-lg @error('phone') is-invalid @enderror" name="phone" placeholder="Phone">
                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Địa chỉ email</label>
                                        <input id="email" value="{{ old('email') }}" type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input @error('terms') is-invalid @enderror" type="checkbox"  id="terms" name="terms">
                                            <label class="form-check-label" for="terms">
                                                Bằng cách đăng ký, bạn chấp nhận Điều khoản Sử dụng và Quyền riêng tư của chúng tôi.
                                            </label>
                                                @error('terms')
                                                <div class="invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </div>
                                                @enderror
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-lg">Đăng Ký</button>
                                </form>
                            </div>
                        </div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-primary btn-circle" id="to-top"><i class="fa fa-angle-up"></i></button>
        @include('layout.core.footer')
    </div>
    </body>
@endsection
