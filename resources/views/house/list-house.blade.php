@extends('layout.master')
@section('title') Danh sách nhà @endsection
@section('body')
    <body>
    <div id="main">
            @include('layout.core.navbar')
        <div class="container">
            <div class="search-form">
                <div class="card">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg"
                                       placeholder="Country, State, County, City, Zip, Title, Address, ID.">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <select class="form-control form-control-lg ui-select"
                                                data-placeholder="Property Type">
                                            <option value="">Property Type</option>
                                            <option value="house">House</option>
                                            <option value="flat">Flat</option>
                                            <option value="apartment">Apartment</option>
                                            <option value="land">Land</option>
                                            <option value="room">Room</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-lg btn-primary btn-block">Search</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-lg-12 col-xl-10">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Property for sale</a></li>
                            <li class="breadcrumb-item active" aria-current="page">North Yorkshire</li>
                        </ol>
                    </nav>
                    <div class="page-header">
                        <h1>Danh sách tất cả các căn nhà đang cho thuê</h1>
                    </div>
                </div>
            </div>
        </div>
        <div id="content">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col col-lg-12 col-xl-10">
                        <div class="row has-sidebar">
                            <div class="col-md-4 col-lg-3">
                                <button id="toggle-filters" class="btn btn-primary btn-circle mobile-filter"><i
                                        class="fa fa-filter"></i></button>
                                <div id="sidebar" class="sidebar-left">
                                    <button class="close-panel btn btn-white"><i class="fa fa-long-arrow-left"></i>
                                    </button>
                                    <div class="sidebar_inner">
                                        <div id="filters">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="panel-title"><a role="button" data-toggle="collapse"
                                                                               data-parent="#accordion" href="#p_budget"
                                                                               aria-expanded="true"
                                                                               aria-controls="p_type"> Budget <i
                                                                class="fa fa-caret-down float-right"></i> </a></h4>
                                                </div>
                                                <div id="p_budget" class="panel-collapse collapse" role="tabpanel">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control input-sm"
                                                                           placeholder="Min">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control input-sm"
                                                                           placeholder="Max">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="panel-title"><a role="button" data-toggle="collapse"
                                                                               data-parent="#accordion" href="#p_type"
                                                                               aria-expanded="true"
                                                                               aria-controls="p_type"> Property Type <i
                                                                class="fa fa-caret-down float-right"></i> </a></h4>
                                                </div>
                                                <div id="p_type" class="panel-collapse collapse show" role="tabpanel">
                                                    <div class="card-body">
                                                        <div class="checkbox ">
                                                            <input type="checkbox" value="1" id="house">
                                                            <label for="house">House</label>
                                                        </div>
                                                        <div class="checkbox ">
                                                            <input type="checkbox" value="1" id="flat">
                                                            <label for="flat">Flat</label>
                                                        </div>
                                                        <div class="checkbox ">
                                                            <input type="checkbox" value="1" id="appartment">
                                                            <label for="appartment">Appartment</label>
                                                        </div>
                                                        <div class="checkbox ">
                                                            <input type="checkbox" value="1" id="farms">
                                                            <label for="farms">Farms/Lands</label>
                                                        </div>
                                                        <div class="checkbox ">
                                                            <input type="checkbox" value="1" id="room">
                                                            <label for="room">Room</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="panel-title"><a role="button" data-toggle="collapse"
                                                                               data-parent="#accordion"
                                                                               href="#p_features" aria-expanded="true"
                                                                               aria-controls="p_features"> Features <i
                                                                class="fa fa-caret-down float-right"></i> </a></h4>
                                                </div>
                                                <div id="p_features" class="panel-collapse collapse show"
                                                     role="tabpanel">
                                                    <div class="card-body">
                                                        <div class="checkbox">
                                                            <input type="checkbox" value="" id="garden">
                                                            <label for="garden"> Garden</label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" value="" id="parking">
                                                            <label for="parking"> Parking</label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" value="" id="fireplace">
                                                            <label for="fireplace"> Fireplace</label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" value="" id="restaurant">
                                                            <label for="restaurant"> Restaurant</label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" value="" id="school">
                                                            <label for="school"> School</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-9">
                                @if(isset($houses) && count($houses))
                                    <div class="sorting">
                                        <div class="row justify-content-between">
                                            <div class="col-sm-7 col-md-7 col-lg-6 col-xl-5">
                                                <div class="form-group">
                                                    <select class="form-control ui-select">
                                                        <option selected="selected">Most recent</option>
                                                        <option>Highest price</option>
                                                        <option>Lowest price</option>
                                                        <option>Most reduced</option>
                                                        <option>Most popular</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="item-listing list">
                                        @foreach($houses as $house)
                                            <div class="item">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="item-image">
                                                                <a href="{{route('house.info', $house->id)}}">
                                                                <img src="{{ asset('/storage/images/' . (\Illuminate\Support\Facades\DB::table('house_images')->where('house_id', $house->id)->first())->src) }}" class="img-fluid" alt="">
                                                                <div class="item-badges">
                                                                    <div class="item-badge-left">
                                                                        @switch($house->status_id)
                                                                            @case(1)
                                                                            <i class="fa fa-check"></i>
                                                                            @break
                                                                            @case(2)
                                                                            <i class="fa fa-flag-checkered"></i>
                                                                            @break
                                                                            @case(3)
                                                                            <i class="fa fa-wrench"></i>
                                                                            @break
                                                                        @endswitch
                                                                        {{ (\Illuminate\Support\Facades\DB::table('house_statuses')->find($house->status_id))->status }}
                                                                    </div>
                                                                    {{--<div class="item-badge-right">For Sale</div>--}}
                                                                </div>
                                                                <div class="item-meta">
                                                                    <div class="item-price">
                                                                        <small>
                                                                            {{--5
                                                                            <i class="fa fa-star"></i>--}}
                                                                        </small>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            {{--<a href="#" class="save-item"><i class="fa fa-star"></i></a>--}}
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="item-info">
                                                            <h3 class="item-title">
                                                                <a href="{{route('house.info', $house->id)}}">{{$house->name}}</a>
                                                            </h3>
                                                            <div class="item-location">
                                                                <i class="fas fa-map-marked-alt"></i>
                                                                {{$house->address}}
                                                            </div>
                                                            <div class="item-details-i">
                                                            <span class="bedrooms h5" data-toggle="tooltip" title=""
                                                                  data-original-title="{{$house->numberBedRoom}} phòng ngủ">{{$house->numberBedRoom}}
                                                                <i class="fa fa-bed"></i>
                                                            </span> &nbsp; &nbsp; &nbsp;
                                                                <span class="bathrooms h5" data-toggle="tooltip"
                                                                      title=""
                                                                      data-original-title="{{$house->numberBathRoom}} phòng tắm">{{$house->numberBathRoom}}
                                                                <i class="fa fa-bath"></i>
                                                            </span>
                                                            </div>
                                                            <div class="item-details">
                                                                <ul>
                                                                    <li>Giá phòng <span>{{ number_format($house->pricePerDay, 0, ',', '.') }}<sup>đ</sup> / ngày</span>
                                                                    </li>
                                                                    <li>Loại
                                                                        phòng<span>{{ (\Illuminate\Support\Facades\DB::table('room_types')->find($house->room_type_id))->typeName }}</span>
                                                                    </li>
                                                                    <li>Ngày
                                                                        đăng:<span>{{ date('d/m/Y', strtotime($house->created_at)) }}</span>
                                                                    </li>
                                                                    <li>Chủ nhà:
                                                                        <span>
                                                                            <a href="#"
                                                                               class="added-by font-weight-bold">{{ (\Illuminate\Support\Facades\DB::table('users')->find($house->owner_id))->username }}</a>
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="added-on"></div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <a href="#" class="added-by"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    {{ $houses->links() }}
                                @else
                                    <h1 class="text-center">Không có dữ liệu</h1>
                                @endif
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
        $(document).ready(function () {
            $('#toggle-filters').sidr({
                side: 'left',
                displace: false,
                renaming: false,
                name: 'sidebar',
                source: function () {
                    AOS.refresh();
                },

            });
        });
    </script>
    </body>
@endsection
