@extends('layout.master')
@section('title') Danh sách nhà @endsection
@section('body')
    <body style="transform: none;" data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
    <div id="main" style="transform: none;">
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
                                        <div
                                            class="selectric-wrapper selectric-form-control selectric-form-control-lg selectric-ui-select">
                                            <div class="selectric-hide-select"><select
                                                    class="form-control form-control-lg ui-select"
                                                    data-placeholder="Property Type" tabindex="-1">
                                                    <option value="">Property Type</option>
                                                    <option value="house">House</option>
                                                    <option value="flat">Flat</option>
                                                    <option value="apartment">Apartment</option>
                                                    <option value="land">Land</option>
                                                    <option value="room">Room</option>
                                                </select></div>
                                            <div class="selectric"><span class="label">Property Type</span><b
                                                    class="button">▾</b></div>
                                            <div class="selectric-items" tabindex="-1">
                                                <div class="selectric-scroll">
                                                    <ul>
                                                        <li data-index="0" class="selected">Property Type</li>
                                                        <li data-index="1" class="">House</li>
                                                        <li data-index="2" class="">Flat</li>
                                                        <li data-index="3" class="">Apartment</li>
                                                        <li data-index="4" class="">Land</li>
                                                        <li data-index="5" class="last">Room</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <input class="selectric-input" tabindex="0"></div>
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
        <div id="content" style="transform: none;">
            <div class="container" style="transform: none;">
                <div class="row justify-content-md-center" style="transform: none;">
                    <div class="col col-lg-12 col-xl-10" style="transform: none;">
                        <div class="row has-sidebar" style="transform: none;">
                            <div class="col-md-4 col-lg-3"
                                 style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                                <div class="theiaStickySidebar"
                                     style="padding-top: 0; padding-bottom: 1px; position: static; transform: none;">
                                    <button id="toggle-filters" class="btn btn-primary btn-circle mobile-filter"><i
                                            class="fa fa-filter"></i></button>
                                    <div id="sidebar" class="sidebar-left sidr left"
                                         style="transition: left 0.2s ease 0s;">
                                        <button class="close-panel btn btn-white"><i class="fa fa-long-arrow-left"></i>
                                        </button>
                                        <div class="sidebar_inner">
                                            <div id="filters">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="panel-title"><a role="button" data-toggle="collapse"
                                                                                   data-parent="#accordion"
                                                                                   href="#p_budget" aria-expanded="true"
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
                                                                                   data-parent="#accordion"
                                                                                   href="#p_type" aria-expanded="true"
                                                                                   aria-controls="p_type"> Property Type
                                                                <i class="fa fa-caret-down float-right"></i> </a></h4>
                                                    </div>
                                                    <div id="p_type" class="panel-collapse collapse show"
                                                         role="tabpanel">
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
                                                                                   href="#p_features"
                                                                                   aria-expanded="true"
                                                                                   aria-controls="p_features"> Features
                                                                <i class="fa fa-caret-down float-right"></i> </a></h4>
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
                                    <div class="resize-sensor"
                                         style="position: absolute; inset: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                                        <div class="resize-sensor-expand"
                                             style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                                            <div
                                                style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 250px; height: 1646px;"></div>
                                        </div>
                                        <div class="resize-sensor-shrink"
                                             style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                                            <div
                                                style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-9"
                                 style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">


                                <div class="theiaStickySidebar"
                                     style="padding-top: 0; padding-bottom: 1px; position: static; transform: none;">
                                    <div class="sorting">
                                        <div class="row justify-content-between">
                                            <div class="col-sm-7 col-md-7 col-lg-6 col-xl-5">
                                                <div class="form-group">
                                                    <div
                                                        class="selectric-wrapper selectric-form-control selectric-ui-select">
                                                        <div class="selectric-hide-select"><select
                                                                class="form-control ui-select" tabindex="-1">
                                                                <option selected="selected">Most recent</option>
                                                                <option>Highest price</option>
                                                                <option>Lowest price</option>
                                                                <option>Most reduced</option>
                                                                <option>Most popular</option>
                                                            </select></div>
                                                        <div class="selectric"><span class="label">Most recent</span><b
                                                                class="button">▾</b></div>
                                                        <div class="selectric-items" tabindex="-1">
                                                            <div class="selectric-scroll">
                                                                <ul>
                                                                    <li data-index="0" class="selected">Most recent</li>
                                                                    <li data-index="1" class="">Highest price</li>
                                                                    <li data-index="2" class="">Lowest price</li>
                                                                    <li data-index="3" class="">Most reduced</li>
                                                                    <li data-index="4" class="last">Most popular</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <input class="selectric-input" tabindex="0"></div>
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
                                                            <a href="property_single.html">
                                                                <img src="{{asset('img/demo/property/1.jpg')}}"
                                                                     class="img-fluid" alt="">
                                                                <div class="item-badges">
                                                                    <div class="item-badge-left">
                                                                        @switch($house->status_id)
                                                                            @case(1)
                                                                            <i class="fas fa-check"></i>
                                                                            @break
                                                                            @case(2)
                                                                            <i class="fas fa-user-check"></i>
                                                                            @break
                                                                            @case(3)
                                                                            <i class="fa fa-hammer"></i>
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
                                                                <a href="#">{{$house->name}}</a>
                                                            </h3>
                                                            <div class="item-location">
                                                                <i class="fas fa-map-marked-alt"></i>
                                                                {{$house->address}}
                                                            </div>
                                                            <div class="item-details-i">
                                                            <span class="bedrooms h5" data-toggle="tooltip" title=""
                                                                  data-original-title="{{$house->numberBedRoom}} phòng ngủ">{{$house->numberBedRoom}}
                                                                <i class="fas fa-bed"></i>
                                                            </span> &nbsp; &nbsp; &nbsp;
                                                                <span class="bathrooms h5" data-toggle="tooltip"
                                                                      title=""
                                                                      data-original-title="{{$house->numberBathRoom}} phòng tắm">{{$house->numberBathRoom}}
                                                                <i class="fas fa-bath"></i>
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
                                                                        đăng:<span>{{ $house->created_at->toDateString() }}</span>
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
                                    <nav aria-label="Page navigation">
                                        <ul class="pagination">
                                            <li class="page-item"><a class="page-link" href="#">«</a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">»</a></li>
                                        </ul>
                                    </nav>
                                    <div class="resize-sensor"
                                         style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;">
                                        <div class="resize-sensor-expand"
                                             style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                                            <div
                                                style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 730px; height: 1646px;"></div>
                                        </div>
                                        <div class="resize-sensor-shrink"
                                             style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                                            <div
                                                style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Agent Modal -->
        <div class="modal fade  item-badge-rightm" id="leadform" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="media">
                            <div class="media-left"><a href="property_single.html"><img
                                        src="{{asset('img/demo/property/1.jpg')}}" class="img-rounded" width="64"
                                        alt=""></a></div>
                            <div class="media-body">
                                <h4 class="media-heading">Send Message for<br>
                                    <small><a href="property_single.html">3 bed semi-detached house for sale</a></small>
                                </h4>
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-map-marker"></i> Kirkstone Road, Middlesbrough TS3</li>
                                    <li><a href="tel:01502392905"><i class="fa fa-phone fa-fw" aria-hidden="true"></i>
                                            Call: 01502 392905</a></li>
                                </ul>
                            </div>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="lead_name">Your Name</label>
                                <input type="text" class="form-control" id="lead_name" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <label for="lead_email">Your Email</label>
                                <input type="email" class="form-control" id="lead_email" placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <label for="lead_phone">Your Telephone</label>
                                <input type="tel" class="form-control" id="lead_phone" placeholder="Your Telephone">
                            </div>
                            <div class="form-group">
                                <label for="lead_message">Message</label>
                                <textarea rows="4" class="form-control" id="lead_message"
                                          placeholder="Please include any useful details, i.e. current status, availability for viewings, etc."></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">Send Message</button>
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
