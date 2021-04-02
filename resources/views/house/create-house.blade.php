@extends('layout.user_page')
@section('title', 'Tạo bài đăng cho thuê nhà')
@section('bodyUserPage')
    <div class="col-md-7 col-lg-8 col-xl-8">
        <div class="page-header bordered">
            <h1>Thông tin về ngôi nhà đăng tải <small></small></h1>
        </div>
        <form action="{{ route('house.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Tên ngôi nhà (<strong class="text-danger">*</strong>)</label>
                <input type="text" name="name" class="form-control form-control-lg inpName" id="name" autofocus value="{{ old('name') }}">
                @error('name')
                <p class="py-2 mb-3 text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Loại phòng (<strong class="text-danger">*</strong>)</label>
                <div class="feature-list three_cols">
                    @foreach($roomTypes as $type)
                        <div class="radio">
                            <input type="radio" name="room_type_id" class="inpRoomType" id="{{ $type->id }}" value="{{ $type->id }}">
                            <label for="{{ $type->id }}">{{ $type->typeName }}</label>
                        </div>
                    @endforeach
                </div>
                @error('room_type_id')
                <p class="py-2 mb-3 text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="autocomplete">Địa chỉ (<strong class="text-danger">*</strong>)</label>
                <input type="text" name="address" class="form-control form-control-lg inpAddress" id="autocomplete" value="{{ old('address') }}">
                @error('address')
                <p class="py-2 mb-3 text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="numberBedRoom">Phòng ngủ(<strong class="text-danger">*</strong>)</label>
                        <select name="numberBedRoom" id="numberBedRoom" class="form-control form-control-lg ui-select inpNumberBedRoom">
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
                        @error('numberBedRoom')
                        <p class="py-2 mb-3 text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="numberBathRoom">Phòng tắm(<strong class="text-danger">*</strong>)</label>
                        <select name="numberBathRoom" id="numberBathRoom" class="form-control form-control-lg ui-select inpNumberBathRoom">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                        @error('numberBathRoom')
                        <p class="py-2 mb-3 text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="desc">Mô tả chung</label>
                <textarea id="desc" name="desc" class="form-control form-control-lg text-editor inpDesc">{{ old('desc') }}</textarea>
                @error('desc')
                <p class="py-2 mb-3 text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="pricePerDay">Giá một ngày (vnđ)(<strong class="text-danger">*</strong>)</label>
                <input type="number" name="pricePerDay" class="form-control form-control-lg inpPrice" id="pricePerDay" required>
                @error('pricePerDay')
                <p class="py-2 mb-3 text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Ảnh (<strong id="numberImage">0</strong>)(<strong class="text-danger">*</strong>)</label>
                <div class="ui-dropzone">
                    <div class="icon"></div>
                    <div>Kéo thả ảnh vào hoặc bấm để chọn</div>
                    <input type="file" name="images[]" class="form-control form-control-lg inpImage" id="gallery" multiple>
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
                <button type="submit" id="btnSubmit" class="btn btn-lg btn-primary">Đăng bài</button>
                <button type="button" id="btnAjaxSubmit" data-toggle="modal" data-target="#createSuccess" hidden></button>
            </div>
        </form>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="createSuccess" tabindex="-1" role="dialog" aria-labelledby="createSuccess" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h3>Đăng bài viết thành công</h3>
                    <p>Tự động về trang bài đăng cho thuê sau 3 giây</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary">Về trang danh sách nhà cho thuê</button>
                </div>
            </div>
        </div>
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
            $("#autocomplete").attr("placeholder", "");

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

            @error('success')
            $("#btnAjaxSubmit").click();
            setTimeout(function () {
                window.location.href = '{{ route('house.list') }}';
            }, 3000)
            @enderror

            /*$("#btnSubmit").on("click", function () {
                let _name = $(".inpName").val();
                let _roomType = $(".inpRoomType").val();
                let _address = $(".inpAddress").val();
                let _numBedRoom = $(".inpNumberBedRoom").val();
                let _numBathRoom = $(".inpNumberBathRoom").val();
                let _desc = $(".inpDesc").val();
                let _price = $(".inpPrice").val();
                let _img= $(".inpImage").val();

                console.log(_roomType);

                $.ajax({
                    url: '',
                    method: 'POST',
                    data: {
                        name: _name,
                        room_type_id: _roomType,
                        address: _address,
                        numberBedRoom: _numBedRoom,
                        numberBathRoom: _numBathRoom,
                        desc: _desc,
                        pricePerDay: _price,
                        images: _img,
                    },
                    success: function (res) {
                        console.log(res);
                        $("#btnAjaxSubmit").click();
                        return;
                        setTimeout(function () {
                            window.location.href = '';
                        }, 3000)
                    },
                    error: function (err) {
                        console.log(err)
                    }
                })
            })*/

        })
    </script>
@endsection

