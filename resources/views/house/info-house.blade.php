@extends('layout.master')
@section('title') Thông tin nhà @endsection
@section('body')
    <body>
    <div id="main">
        @include('layout.core.navbar')
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-md-12 col-lg-12 col-xl-10">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Nhà cho thuê</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$house->name}}</li>
                    </ol>
                    <div class="page-header bordered mb0">
                        <div class="row">
                            <div class="col-md-8"><a href="{{route('home')}}" class="btn-return" title="Back"><i
                                        class="fa fa-angle-left"></i></a>
                                <h1>{{$house->name}} <span class="label label-bordered text-white"
                                                           style="background-color: #563d7c">
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
                                        {{ (\Illuminate\Support\Facades\DB::table('house_statuses')->find($house->status_id))->status }}</span>
                                    <small>
                                        <i class="fas fa-map-marked-alt"></i>
                                        {{$house->address}}
                                    </small>
                                </h1>
                            </div>
                            <div class="col-md-4">
                                <div class="price">{{ number_format($house->pricePerDay, 0, ',', '.') }}đ / ngày
                                    <small></small></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-md-12 col-lg-12 col-xl-10">
                    <div class="item-gallery">
                        <div class="swiper-container gallery-top" data-pswp-uid="1">
                            <div class="swiper-wrapper lazyload">

                                <div class="swiper-slide">
                                    <figure itemprop="associatedMedia" itemscope
                                            itemtype="http://schema.org/ImageObject"><a
                                            href="{{asset('img/demo/property/1.jpg')}}" itemprop="contentUrl"
                                            data-size="2000x1414"> <img src="{{asset('img/demo/property/1.jpg')}}"
                                                                        class="img-fluid swiper-lazy"
                                                                        alt="Drawing Room"> </a></figure>
                                </div>
                                <div class="swiper-slide">
                                    <figure itemprop="associatedMedia" itemscope
                                            itemtype="http://schema.org/ImageObject"><a
                                            href="{{asset('img/demo/property/2.jpg')}}" itemprop="contentUrl"
                                            data-size="2000x1414"> <img data-src="{{asset('img/demo/property/2.jpg')}}"
                                                                        src="{{asset('img/spacer.png')}}"
                                                                        class="img-fluid swiper-lazy"
                                                                        alt="Drawing Room"> </a></figure>
                                </div>
                                <div class="swiper-slide">
                                    <figure itemprop="associatedMedia" itemscope
                                            itemtype="http://schema.org/ImageObject"><a
                                            href="{{asset('img/demo/property/3.jpg')}}" itemprop="contentUrl"
                                            data-size="2000x1414"> <img data-src="{{asset('img/demo/property/3.jpg')}}"
                                                                        src="{{asset('img/spacer.png')}}"
                                                                        class="img-fluid swiper-lazy"
                                                                        alt="Drawing Room"> </a></figure>
                                </div>
                                <div class="swiper-slide">
                                    <figure itemprop="associatedMedia" itemscope
                                            itemtype="http://schema.org/ImageObject"><a
                                            href="{{asset('img/demo/property/4.jpg')}}" itemprop="contentUrl"
                                            data-size="2000x1414"> <img data-src="{{asset('img/demo/property/4.jpg')}}"
                                                                        src="{{asset('img/spacer.png')}}"
                                                                        class="img-fluid swiper-lazy"
                                                                        alt="Drawing Room"> </a></figure>
                                </div>
                                <div class="swiper-slide">
                                    <figure itemprop="associatedMedia" itemscope
                                            itemtype="http://schema.org/ImageObject"><a
                                            href="{{asset('img/demo/property/5.jpg')}}" itemprop="contentUrl"
                                            data-size="2000x1414"> <img data-src="{{asset('img/demo/property/5.jpg')}}"
                                                                        src="{{asset('img/spacer.png')}}"
                                                                        class="img-fluid swiper-lazy"
                                                                        alt="Drawing Room"> </a></figure>
                                </div>

                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <div class="swiper-container gallery-thumbs">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="{{asset('img/demo/property/thumb/1.jpg')}}"
                                                               class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="{{asset('img/demo/property/thumb/2.jpg')}}"
                                                               class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="{{asset('img/demo/property/thumb/3.jpg')}}"
                                                               class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="{{asset('img/demo/property/thumb/4.jpg')}}"
                                                               class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="{{asset('img/demo/property/thumb/5.jpg')}}"
                                                               class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="{{asset('img/demo/property/thumb/6.jpg')}}"
                                                               class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="{{asset('img/demo/property/thumb/7.jpg')}}"
                                                               class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="{{asset('img/demo/property/thumb/8.jpg')}}"
                                                               class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="{{asset('img/demo/property/thumb/9.jpg')}}"
                                                               class="img-fluid" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="content" class="item-single">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col col-md-12 col-lg-12 col-xl-10">
                        <div class="row row justify-content-md-center has-sidebar">
                            <div class="col-md-7 col-lg-8">
                                <div>
                                    <div class="item-description">
                                        <h3 class="headline">Mô tả về ngôi nhà</h3>
                                        <p><strong>Some</strong> <strong>description</strong>.</p>
                                    </div>

                                    <div class="item-navigation">
                                        <ul class="nav nav-tabs v2" role="tablist">
                                            <li role="presentation"><a href="#map" aria-controls="map" role="tab"
                                                                       data-toggle="tab" class="active"><i
                                                        class="fa fa-map"></i> <span
                                                        class="hidden-xs">Map &amp; nearby</span></a></li>
                                            <li role="presentation"><a href="#streetview" aria-controls="streetview"
                                                                       role="tab" data-toggle="tab"><i
                                                        class="fa fa-road"></i> <span
                                                        class="hidden-xs">Street View</span></a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active" id="map">
                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1215.7401235613713!2d1.4497354260471211!3d52.45232942952154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d9f169c5a088db%3A0x75a6abde48cc5adc!2sKents+Ln%2C+Bungay+NR35+1JF%2C+UK!5e0!3m2!1sen!2sin!4v1489862715790"
                                                    width="600" height="450" style="border:0;" allowfullscreen></iframe>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="streetview">
                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m0!3m2!1sen!2s!4v1489861898447!6m8!1m7!1sGz9bS-GXSJE28jHD19m7KQ!2m2!1d52.45191646727986!2d1.451480542718656!3f0!4f0!5f0.8160813932612223"
                                                    width="600" height="450" style="border:0" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-lg-4">
                                <div id="sidebar" class="sidebar-right">
                                    <div class="sidebar_inner">
                                        <div id="feature-list" role="tablist">
                                            <div class="card">
                                                <div class="card-header" role="tab" id="headingOne">
                                                    <h4 class="panel-title"><a role="button" data-toggle="collapse"
                                                                               href="#specification"
                                                                               aria-expanded="true"
                                                                               aria-controls="specification"> Thông tin
                                                            <i class="fa fa-caret-down float-right"></i> </a></h4>
                                                </div>
                                                <div id="specification" class="panel-collapse collapse show"
                                                     role="tabpanel">
                                                    <div class="card-body">
                                                        <table class="table v1">
                                                            <tr>
                                                                <td>Phòng ngủ</td>
                                                                <td>{{$house->numberBedRoom}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Phòng tắm</td>
                                                                <td>{{$house->numberBathRoom}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Giá một ngày</td>
                                                                <td>{{ number_format($house->pricePerDay, 0, ',', '.') }}
                                                                    <sup>đ</sup></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card shadow">
                                            <h5 class="subheadline mt-0  mb-0">Chủ nhà</h5>
                                            <div class="media">
                                                <div class="media-left"><a href="#"> <img
                                                            class="media-object rounded-circle"
                                                            src="{{asset('img/demo/profile.jpg')}}" width="64"
                                                            height="64" alt=""> </a></div>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><a
                                                            href="#">{{ (\Illuminate\Support\Facades\DB::table('users')->find($house->owner_id))->username }}</a>
                                                    </h4>
                                                    <p><a href="tel:01502392905"><i class="fa fa-phone"
                                                                                    aria-hidden="true"></i> {{ (\Illuminate\Support\Facades\DB::table('users')->find($house->owner_id))->phone }}
                                                        </a></p>
                                                    <p><a href="#" class="btn btn-sm btn-light">Xem thông tin</a></p>
                                                </div>
                                            </div>
                                            <a href="#" class="btn btn-lg btn-primary btn-block" data-toggle="modal"
                                               data-target="#leadform">Yêu cầu thuê nhà</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Lead Form Modal -->
        <div class="modal fade  item-badge-rightm" id="leadform" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="media">
                            <div class="media-left"><img src="{{asset('img/demo/property/thumb/1.jpg')}}" width="60"
                                                         class="img-rounded mt5" alt=""></div>
                            <div class="media-body">
                                <h4 class="media-heading">Yêu cầu thuê nhà</h4>
                                {{ $house->name }} </div>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label>Ngày bắt đầu thuê</label>
                                <input type="date" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Ngày trả phòng</label>
                                <input type="date" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Tổng tiền</label>
                                <div class="input-group mb-2">
                                    <input type="number" class="form-control" placeholder="" disabled>
                                    <div class="input-group-append">
                                        <div class="input-group-text">đ</div>
                                    </div>
                                </div>
                                {{--<input type="tel" class="form-control" placeholder="" disabled>--}}
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-dismiss="modal">Hủy bỏ</button>
                        <button type="button" class="btn btn-primary">Gửi yêu cầu</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Report Listing Modal -->
        <div class="modal fade item-badge-rightm" id="report-listing" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="media">
                            <div class="media-left"><i class="fa fa-3x fa-exclamation-circle" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Report Listing for 2 bed semi-detached bungalow for sale</h4>
                                Kents Lane, Bungay NR35
                            </div>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label>Contact Name</label>
                                <input type="text" class="form-control" placeholder="Contact Name">
                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <label>Nature of report</label>
                                <select class="form-control">
                                    <option value="">Please Select</option>
                                    <option value="no_longer_available">Property is no longer available</option>
                                    <option value="incorrect_price">Price listed is incorrect</option>
                                    <option value="incorrect_last_sold_price">Last sold price incorrect</option>
                                    <option value="incorrect_description">Property description is inaccurate</option>
                                    <option value="incorrect_location">Property location is incorrect</option>
                                    <option value="incorrect_content">Problem with photos, floorplans, etc.</option>
                                    <option value="inappropriate_video">Problem with the video</option>
                                    <option value="agent_not_contactable">Agent is not contactable</option>
                                    <option value="incorrect_running_costs">Running costs is displaying inaccurate
                                        values
                                    </option>
                                    <option value="other">Other (please specify)</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Description of content issue </label>
                                <textarea rows="4" class="form-control"
                                          placeholder="Please provide as much information as possible..."></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">Report Error</button>
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-primary btn-circle" id="to-top"><i class="fa fa-angle-up"></i></button>
        @include('layout.core.footer')
    </div>
    <!-- Root element of PhotoSwipe. Must have class pswp. -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

        <!-- Background of PhotoSwipe.
             It's a separate element, as animating opacity is faster than rgba(). -->
        <div class="pswp__bg"></div>

        <!-- Slides wrapper with overflow:hidden. -->
        <div class="pswp__scroll-wrap">

            <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
            <!-- don't modify these 3 pswp__item elements, data is added later on. -->
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
            <div class="pswp__ui pswp__ui--hidden">

                <div class="pswp__top-bar">

                    <!--  Controls are self-explanatory. Order can be changed. -->

                    <div class="pswp__counter"></div>

                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                    <button class="pswp__button pswp__button--share" title="Share"></button>

                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                    <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
                    <!-- element will get class pswp__preloader--active when preloader is running -->
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>

                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                </button>

                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                </button>

                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>

            </div>

        </div>

    </div>

    <div class="daterangepicker ltr show-calendar opensright"
         style="top: 1526px; left: auto; right: 0px; display: none;">
        <div class="ranges"></div>
        <div class="drp-calendar left">
            <div class="calendar-table">
                <table class="table-condensed">
                    <thead>
                    <tr>
                        <th class="prev available"><span></span></th>
                        <th colspan="5" class="month">Mar 2021</th>
                        <th></th>
                    </tr>
                    <tr>
                        <th>Su</th>
                        <th>Mo</th>
                        <th>Tu</th>
                        <th>We</th>
                        <th>Th</th>
                        <th>Fr</th>
                        <th>Sa</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="weekend off ends available" data-title="r0c0">28</td>
                        <td class="available" data-title="r0c1">1</td>
                        <td class="available" data-title="r0c2">2</td>
                        <td class="available" data-title="r0c3">3</td>
                        <td class="available" data-title="r0c4">4</td>
                        <td class="available" data-title="r0c5">5</td>
                        <td class="weekend available" data-title="r0c6">6</td>
                    </tr>
                    <tr>
                        <td class="weekend available" data-title="r1c0">7</td>
                        <td class="available" data-title="r1c1">8</td>
                        <td class="available" data-title="r1c2">9</td>
                        <td class="available" data-title="r1c3">10</td>
                        <td class="available" data-title="r1c4">11</td>
                        <td class="available" data-title="r1c5">12</td>
                        <td class="weekend available" data-title="r1c6">13</td>
                    </tr>
                    <tr>
                        <td class="weekend available" data-title="r2c0">14</td>
                        <td class="available" data-title="r2c1">15</td>
                        <td class="available" data-title="r2c2">16</td>
                        <td class="available" data-title="r2c3">17</td>
                        <td class="available" data-title="r2c4">18</td>
                        <td class="available" data-title="r2c5">19</td>
                        <td class="weekend available" data-title="r2c6">20</td>
                    </tr>
                    <tr>
                        <td class="weekend available" data-title="r3c0">21</td>
                        <td class="available" data-title="r3c1">22</td>
                        <td class="available" data-title="r3c2">23</td>
                        <td class="available" data-title="r3c3">24</td>
                        <td class="today active start-date active end-date available" data-title="r3c4">25</td>
                        <td class="available" data-title="r3c5">26</td>
                        <td class="weekend available" data-title="r3c6">27</td>
                    </tr>
                    <tr>
                        <td class="weekend available" data-title="r4c0">28</td>
                        <td class="available" data-title="r4c1">29</td>
                        <td class="available" data-title="r4c2">30</td>
                        <td class="available" data-title="r4c3">31</td>
                        <td class="off ends available" data-title="r4c4">1</td>
                        <td class="off ends available" data-title="r4c5">2</td>
                        <td class="weekend off ends available" data-title="r4c6">3</td>
                    </tr>
                    <tr>
                        <td class="weekend off ends available" data-title="r5c0">4</td>
                        <td class="off ends available" data-title="r5c1">5</td>
                        <td class="off ends available" data-title="r5c2">6</td>
                        <td class="off ends available" data-title="r5c3">7</td>
                        <td class="off ends available" data-title="r5c4">8</td>
                        <td class="off ends available" data-title="r5c5">9</td>
                        <td class="weekend off ends available" data-title="r5c6">10</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="calendar-time" style="display: none;"></div>
        </div>
        <div class="drp-calendar right">
            <div class="calendar-table">
                <table class="table-condensed">
                    <thead>
                    <tr>
                        <th></th>
                        <th colspan="5" class="month">Apr 2021</th>
                        <th class="next available"><span></span></th>
                    </tr>
                    <tr>
                        <th>Su</th>
                        <th>Mo</th>
                        <th>Tu</th>
                        <th>We</th>
                        <th>Th</th>
                        <th>Fr</th>
                        <th>Sa</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="weekend off ends available" data-title="r0c0">28</td>
                        <td class="off ends available" data-title="r0c1">29</td>
                        <td class="off ends available" data-title="r0c2">30</td>
                        <td class="off ends available" data-title="r0c3">31</td>
                        <td class="available" data-title="r0c4">1</td>
                        <td class="available" data-title="r0c5">2</td>
                        <td class="weekend available" data-title="r0c6">3</td>
                    </tr>
                    <tr>
                        <td class="weekend available" data-title="r1c0">4</td>
                        <td class="available" data-title="r1c1">5</td>
                        <td class="available" data-title="r1c2">6</td>
                        <td class="available" data-title="r1c3">7</td>
                        <td class="available" data-title="r1c4">8</td>
                        <td class="available" data-title="r1c5">9</td>
                        <td class="weekend available" data-title="r1c6">10</td>
                    </tr>
                    <tr>
                        <td class="weekend available" data-title="r2c0">11</td>
                        <td class="available" data-title="r2c1">12</td>
                        <td class="available" data-title="r2c2">13</td>
                        <td class="available" data-title="r2c3">14</td>
                        <td class="available" data-title="r2c4">15</td>
                        <td class="available" data-title="r2c5">16</td>
                        <td class="weekend available" data-title="r2c6">17</td>
                    </tr>
                    <tr>
                        <td class="weekend available" data-title="r3c0">18</td>
                        <td class="available" data-title="r3c1">19</td>
                        <td class="available" data-title="r3c2">20</td>
                        <td class="available" data-title="r3c3">21</td>
                        <td class="available" data-title="r3c4">22</td>
                        <td class="available" data-title="r3c5">23</td>
                        <td class="weekend available" data-title="r3c6">24</td>
                    </tr>
                    <tr>
                        <td class="weekend available" data-title="r4c0">25</td>
                        <td class="available" data-title="r4c1">26</td>
                        <td class="available" data-title="r4c2">27</td>
                        <td class="available" data-title="r4c3">28</td>
                        <td class="available" data-title="r4c4">29</td>
                        <td class="available" data-title="r4c5">30</td>
                        <td class="weekend off ends available" data-title="r4c6">1</td>
                    </tr>
                    <tr>
                        <td class="weekend off ends available" data-title="r5c0">2</td>
                        <td class="off ends available" data-title="r5c1">3</td>
                        <td class="off ends available" data-title="r5c2">4</td>
                        <td class="off ends available" data-title="r5c3">5</td>
                        <td class="off ends available" data-title="r5c4">6</td>
                        <td class="off ends available" data-title="r5c5">7</td>
                        <td class="weekend off ends available" data-title="r5c6">8</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="calendar-time" style="display: none;"></div>
        </div>
        <div class="drp-buttons"><span class="drp-selected">03/25/2021 - 03/25/2021</span>
            <button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button>
            <button class="applyBtn btn btn-sm btn-primary" type="button">Apply</button>
        </div>
    </div>

    <script type="text/javascript">
        // Photoswipe

        var initPhotoSwipeFromDOM = function (gallerySelector) {
            var parseThumbnailElements = function (el) {
                console.log(el);
                var thumbElements = $(el).closest(main_gallery).find('figure'),
                    numNodes = thumbElements.length,
                    items = [],
                    figureEl,
                    linkEl,
                    size,
                    item;

                for (var i = 0; i < numNodes; i++) {

                    figureEl = thumbElements[i]; // <figure> element

                    // include only element nodes
                    if (figureEl.nodeType !== 1) {
                        continue;
                    }

                    linkEl = figureEl.children[0]; // <a> element

                    size = linkEl.getAttribute('data-size').split('x');

                    // create slide object
                    item = {
                        src: linkEl.getAttribute('href'),
                        w: parseInt(size[0], 10),
                        h: parseInt(size[1], 10)
                    };


                    if (figureEl.children.length > 1) {
                        // <figcaption> content
                        item.title = figureEl.children[1].innerHTML;
                    }

                    if (linkEl.children.length > 0) {
                        // <img> thumbnail element, retrieving thumbnail url
                        item.msrc = linkEl.children[0].getAttribute('src');
                    }

                    item.el = figureEl; // save link to element for getThumbBoundsFn
                    items.push(item);
                }

                return items;
            };

            // find nearest parent element
            var closest = function closest(el, fn) {
                return el && (fn(el) ? el : closest(el.parentNode, fn));
            };

            // triggers when user clicks on thumbnail
            var onThumbnailsClick = function (e) {
                e = e || window.event;
                e.preventDefault ? e.preventDefault() : e.returnValue = false;

                var eTarget = e.target || e.srcElement;

                // find root element of slide
                var clickedListItem = closest(eTarget, function (el) {
                    return (el.tagName && el.tagName.toUpperCase() === 'FIGURE');
                });

                if (!clickedListItem) {
                    return;
                }
                var clickedGallery = clickedListItem.parentNode,
                    childNodes = $(clickedListItem).closest(main_gallery).find('figure'),
                    numChildNodes = childNodes.length,
                    nodeIndex = 0,
                    index;

                for (var i = 0; i < numChildNodes; i++) {
                    if (childNodes[i].nodeType !== 1) {
                        continue;
                    }

                    if (childNodes[i] === clickedListItem) {
                        index = nodeIndex;
                        break;
                    }
                    nodeIndex++;
                }
                if (index >= 0) {
                    // open PhotoSwipe if valid index found
                    openPhotoSwipe(index, clickedGallery);
                }
                return false;
            };

            var openPhotoSwipe = function (index, galleryElement, disableAnimation) {
                var pswpElement = document.querySelectorAll('.pswp')[0],
                    gallery,
                    options,
                    items;

                items = parseThumbnailElements(galleryElement);

                // define options (if needed)
                options = {
                    history: false,
                    bgOpacity: 0.8,
                    loop: false,
                    barsSize: {
                        top: 0,
                        bottom: 'auto'
                    },

                    // define gallery index (for URL)
                    galleryUID: $(galleryElement).closest(main_gallery).attr('data-pswp-uid'),

                    getThumbBoundsFn: function (index) {
                        // See Options -> getThumbBoundsFn section of documentation for more info
                        var thumbnail = document.querySelectorAll(main_gallery + ' img')[index],
                            //var thumbnail = items[index].el.getElementsByTagName('img')[0], // find thumbnail
                            pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
                            rect = thumbnail.getBoundingClientRect();

                        return {
                            x: rect.left,
                            y: rect.top + pageYScroll,
                            w: rect.width
                        };
                    }

                };

                options.index = parseInt(index, 10);

                // exit if index not found
                if (isNaN(options.index)) {
                    return;
                }

                if (disableAnimation) {
                    options.showAnimationDuration = 0;
                }

                // Pass data to PhotoSwipe and initialize it
                gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
                gallery.init();
                gallery.shout('helloWorld', 'John' /* you may pass more arguments */);


                var totalItems = gallery.options.getNumItemsFn();

                function syncPhotoSwipeWithOwl() {
                    var currentIndex = gallery.getCurrentIndex();
                    galleryTop.slideTo(currentIndex);
                    if (currentIndex == (totalItems - 1)) {
                        $('.pswp__button--arrow--right').attr('disabled', 'disabled').addClass('disabled');
                    } else {
                        $('.pswp__button--arrow--right').removeAttr('disabled');
                    }
                    if (currentIndex == 0) {
                        $('.pswp__button--arrow--left').attr('disabled', 'disabled').addClass('disabled');
                    } else {
                        $('.pswp__button--arrow--left').removeAttr('disabled');
                    }
                };
                gallery.listen('afterChange', function () {
                    syncPhotoSwipeWithOwl();
                });
                syncPhotoSwipeWithOwl();
            };

            // loop through all gallery elements and bind events
            var galleryElements = document.querySelectorAll(gallerySelector);

            for (var i = 0, l = galleryElements.length; i < l; i++) {
                galleryElements[i].setAttribute('data-pswp-uid', i + 1);
                galleryElements[i].onclick = onThumbnailsClick;
            }
        };
        var main_gallery = '.gallery-top';
        var galleryTop = new Swiper(main_gallery, {
            spaceBetween: 10,
            lazy: {
                loadPrevNext: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            }
            , on: {
                init: function () {
                    initPhotoSwipeFromDOM(main_gallery);
                },
            }
        });
        var galleryThumbs = new Swiper('.gallery-thumbs', {
            spaceBetween: 10,
            centeredSlides: true,
            slidesPerView: 5,
            touchRatio: 0.2,
            slideToClickedSlide: true,
        });
        galleryTop.controller.control = galleryThumbs;
        galleryThumbs.controller.control = galleryTop;
    </script>
    </body>
@endsection
