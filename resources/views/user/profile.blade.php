@extends('layout.user_page')
@section('title', 'Tài khoản của tôi')
@section('bodyUserPage')
    <div class="col-md-7 col-lg-8 col-xl-8">
        <div class="page-header bordered">
            <h1>My profile <small>Manage your public profile</small></h1>
        </div>
        <form method="post">
            @csrf
            <div class="row gutters-sm">
                <div class="col-md-30">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="{{ \Illuminate\Support\Facades\Auth::user()->avatar }}" alt="Admin" class="rounded-circle" width="150">
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
                                <input type="text" class="form-control" name="username" value="{{ \Illuminate\Support\Facades\Auth::user()->username }}" disabled required>
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
    </div>
@endsection
