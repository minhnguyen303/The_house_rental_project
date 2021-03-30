@extends('layout.master')
@section('title') Danh sách nhà @endsection
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
                                            <a href="my_listing_add.html" class="list-group-item"><i class="fa fa-fw fa-plus-square-o"></i> Add Listing</a>
                                            <a href="my_bookmarked_listings.html" class="list-group-item d-flex justify-content-between align-items-center"><span><i class="fa fa-fw fa-bookmark-o"></i> Bookmarked Listing</span>
                                                <span class="badge badge-primary badge-pill">10</span>
                                            </a>
                                            <a href="my_listings.html" class="list-group-item active d-flex justify-content-between align-items-center"><span><i class="fa fa-fw fa-bars"></i> My Listings</span>
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
                                    <h1>My Listings</h1>
                                </div>
                                <div class="item-listing list">
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <div class="item-image">
                                                    <a href="">
                                                        <img src="img/demo/property/1.jpg" class="img-fluid" alt="">
                                                        <div class="item-badges">
                                                            <div class="item-badge-left">Trạng thái</div>
                                                        </div>
                                                    </a>
                                                    <a href="#"></a> </div>
                                                <a href="#" class="remove-item"><i class="fa fa-trash-o"></i> Delete</a>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="item-info">
                                                    <h3 class="item-title"><a href="property_single.html">3 bed semi-detached house for sale</a></h3>
                                                    <div class="item-location"><i class="fa fa-map-marker"></i> Kirkstone Road, Middlesbrough TS3</div>
                                                    <div class="item-details-i"> <span class="bedrooms" data-toggle="tooltip" title="3 Bedrooms">3 <i class="fa fa-bed"></i></span> <span class="bathrooms" data-toggle="tooltip" title="2 Bathrooms">2 <i class="fa fa-bath"></i></span> </div>
                                                    <div class="item-details">
                                                        <ul>
                                                            <li>Sq Ft <span>730-2600</span></li>
                                                            <li>Type <span>Apartments</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="added-on">Listed on 19th Feb 2017 </div>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <a href="#" class="added-by">by John Doe</a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-primary btn-circle" id="to-top"><i class="fa fa-angle-up"></i></button>
        @include('layout.core.footer')
    </div>
    </body>
@endsection
