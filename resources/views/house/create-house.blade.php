@extends('layout.master')
@section('title') Tạo bài đăng cho thuê nhà @endsection
@section('body')
    <body>
    <div id="main">
        @include('layout.core.navbar')
        <div class="clearfix"></div>
        <div id="content">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col col-lg-12 col-xl-10">
                        <div class="row has-sidebar">
                            <div class="col-md-5 col-lg-4 col-xl-4 col-sidebar">
                                <div id="sidebar" class="sidebar-left">
                                    <div class="sidebar_inner">
                                        <div class="list-group no-border list-unstyled">
                                            <span class="list-group-item heading">Manage Listings</span>
                                            <a href="my_listing_add.html" class="list-group-item active"><i class="fa fa-fw fa-plus-square-o"></i> Add Listing</a>
                                            <a href="my_bookmarked_listings.html" class="list-group-item d-flex justify-content-between align-items-center"><span><i class="fa fa-fw fa-bookmark-o"></i> Bookmarked Listing</span>
                                                <span class="badge badge-primary badge-pill">10</span>
                                            </a>
                                            <a href="my_listings.html" class="list-group-item d-flex justify-content-between align-items-center"><span><i class="fa fa-fw fa-bars"></i> My Listings</span>
                                                <span class="badge badge-primary badge-pill">7</span>
                                            </a>
                                            <span class="list-group-item heading">Manage Account</span>
                                            <a href="my_profile.html" class="list-group-item"><i class="fa fa-fw fa-pencil"></i> My Profile</a>
                                            <a href="my_password.html" class="list-group-item"><i class="fa fa-fw fa-lock"></i> Change Password</a>
                                            <a href="my_notifications.html" class="list-group-item"><i class="fa fa-fw fa-bell-o"></i> Notifications</a>
                                            <a href="my_membership.html" class="list-group-item"><i class="fa fa-fw fa-cubes"></i> Membership</a>
                                            <a href="my_payments.html" class="list-group-item"><i class="fa fa-fw fa-credit-card"></i> Payments</a>
                                            <a href="my_account.html" class="list-group-item"><i class="fa fa-fw fa-cog"></i> Account</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-8 col-xl-8">
                                <div class="page-header bordered">
                                    <h1>Thông tin về ngôi nhà đăng tải <small></small></h1>
                                </div>
                                <form action="{{route('house.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Tên ngôi nhà</label>
                                        <input type="text" name="name" class="form-control form-control-lg" id="name" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Loại phòng</label>
                                        <div class="feature-list three_cols">
                                            @foreach($roomTypes as $type)
                                            <div class="radio">
                                                <input type="radio" name="room_type_id" id="{{ $type->id }}" value="{{ $type->id }}">
                                                <label for="{{ $type->id }}">{{ $type->typeName }}</label>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="autocomplete">Địa chỉ</label>
                                        <input type="text" name="address" class="form-control form-control-lg" id="autocomplete">
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="numberBedRoom">Phòng ngủ</label>
                                                <select name="numberBedRoom" id="numberBedRoom" class="form-control form-control-lg ui-select">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="numberBathRoom">Phòng tắm</label>
                                                <select name="numberBathRoom" id="numberBathRoom" class="form-control form-control-lg ui-select">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="desc">Mô tả chung</label>
                                        <textarea id="desc" name="desc" class="form-control form-control-lg text-editor"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="pricePerDay">Giá một ngày (vnđ)</label>
                                        <input type="number" name="pricePerDay" class="form-control form-control-lg" id="pricePerDay">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Ảnh (<strong id="numberImage">0</strong>)</label>
                                        <div class="ui-dropzone">
                                            <div class="icon"></div>
                                            <div>Kéo thả ảnh vào hoặc bấm để chọn</div>
                                            <input type="file" name="images[]" class="form-control form-control-lg" id="gallery" multiple>
                                        </div>
                                        <table class="table v1" id="listImage">

                                        </table>
                                        {{--<ul class="list-group no-border list-unstyled v3" id="listImage">
                                        </ul>--}}
                                        @error('images.*')
                                        <p class="py-2 mb-3 text-danger">{{ $message }}</p>
                                        @enderror
                                        @error('images')
                                        <p class="py-2 mb-3 text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-lg btn-primary">Đăng bài</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-primary btn-circle" id="to-top"><i class="fa fa-angle-up"></i></button>
        @include('layout.core.footer')
    </div>
    <script>
        var placeSearch, autocomplete;
        var componentForm = {
            //street_number: 'short_name',
            //route: 'long_name',
            locality: 'long_name',
            administrative_area_level_1: 'long_name',
            country: 'long_name',
            postal_code: 'long_name'
        };

        function initAutocomplete() {
            autocomplete = new google.maps.places.Autocomplete((document.getElementById('autocomplete')), {types: ['geocode']});
            autocomplete.addListener('place_changed', fillInAddress);
        }

        function fillInAddress() {
            var place = autocomplete.getPlace();
            for (var component in componentForm) {
                document.getElementById(component).value = '';
                document.getElementById(component).disabled = false;
            }

            for (var i = 0; i < place.address_components.length; i++) {
                var addressType = place.address_components[i].types[0];
                if (componentForm[addressType]) {
                    var val = place.address_components[i][componentForm[addressType]];
                    document.getElementById(addressType).value = val;
                }
            }
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvuspZieDAMlpAVAe2qwlvkk8oQU34dtg&libraries=places&callback=initAutocomplete" async defer></script>
    <script>
        tinymce.init({
            selector: '.text-editor',
            height: 200,
            menubar: false,
            branding: false,
            plugins: [
                'lists link image preview',
            ],
            toolbar: 'undo redo | link | formatselect | bold italic underline  | alignleft aligncenter alignright alignjustify | bullist numlist'
        });
    </script>
    <script>
        $(document).ready(function () {
            $('#gallery').on("change", function () {
                let files = $(this)[0].files;
                let fileLength = $(this)[0].files.length;
                $('#numberImage').text(fileLength);

                let listImage = $('#listImage');
                listImage.html('');
                let li;
                for (let i = 0; i < fileLength; i++) {
                    li = '<tr>' + '<th>' + files[i].name + '<th>' + '<td>' + files[i].size + ' bytes' + '</td>' + '</tr>';
                    listImage.append(li);
                }

            });
        })
    </script>
    </body>
@endsection
