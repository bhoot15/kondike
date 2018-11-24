@extends('layouts.app')

@section('content')
<div class="main-container">
    <section style="margin-top: 65px;" class="cover pt240 pb240 pt-xs-120 pb-xs-80 image-bg" id="about">
        <div class="background-image-holder">
            <img alt="image" class="background-image" src="../img/landing_page_background.png"/>
        </div>
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 input-group">
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" name="website" placeholder="Find Everything"/>
                            <img src="img/logo.png" alt="" class="form-control-feedback" style="margin: 5px; margin-right: 15px;">
                        </div>
                    </div>
                </div>

                {{--<div class="input-group col-md-5 offset-md-1">
                        <span class="input-group-append">
                            <div class="input-group-text  bg-white border-white">
                                <i class="fas fa fa-search"></i>
                            </div>
                        </span>
                    <input class="form-control py-2 border-left-0 border rounded-0 padding-0" type="search"
                           placeholder="Search" id="example-search-input">
                </div>--}}
                <div class="height"></div>
                <div class="row mb24 mb-xs-0">
                    <div class="col-sm-10 col-sm-offset-1 text-center">
                        <h2 class="large uppercase h2Color">Yellow Pages<br>with direction</h2>
                    </div>
                </div>
                <div class="row mb24 mb-xs-0">
                    <div class="col-sm-10 col-sm-offset-1 text-center">
                        <p class="lead">
                            Download the Kondike app on Android and iOS
                        </p>
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-3">
                                <img src="img/playstore_badge.png">
                            </div>
                            <div class="col-md-3">
                                <img src="img/app_store_badge.png">
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </div>
                </div>
                <!--end of row-->
            </div>
        </div>
            <!--end of container-->
    </section>

    <section class="bg-primary cover pt240 pb240 pt-xs-120 pb-xs-80 image-bg">
        <div class="background-image-holder">
            <img alt="image" class="background-image" src="img/how_to.png"/>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-2">
                    <img src="img/phone_mock.png">
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-7">
                    <div class="row">
                        <h2 class="uppercase h2Color">How to use</h2>
                        <h5 class="uppercase">1. Install and open app</h5>
                        <h5 class="uppercase">2. Search for your desired entity or location</h5>
                        <h5 class="uppercase">3. select to view more details</h5>
                    </div>
                    <div class="row">
                        <div class="col-md-7 text-center">
                            <img src="img/logo.png" height="100" width="100">
                        </div>
                        <div class="col-md-5"></div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
            <!--end of container-->
    </section>

    <section class="bg-light image-bg">
        <div class="background-image-holder">
            <img alt="image" class="background-image" src="img/features_background.png"/>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-6">
                    <h2 class="uppercase h2Color">
                        Features
                    </h2>

                    <div class="row">
                        <table class="table cart mb48">
                            <tr>
                                <td class="td_custom">
                                    <a href="#">
                                        <img alt="Product" class="product-thumb" src="img/map.png" height="50"
                                             width="50"/>
                                    </a>
                                </td>
                                <td class="td_custom">
                                    <span><h5 class="uppercase">Up to date map</h5></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="td_custom">
                                    <a href="#">
                                        <img alt="Product" class="product-thumb" src="img/destination.png" height="50"
                                             width="50"/>
                                    </a>
                                </td>
                                <td class="td_custom">
                                    <span><h5 class="uppercase">Actual directions</h5></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="td_custom">
                                    <a href="#">
                                        <img alt="Product" class="product-thumb" src="img/location.png" height="50"
                                             width="50"/>
                                    </a>
                                </td>
                                <td class="td_custom">
                                    <span><h5 class="uppercase">Real-time Updates</h5></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="td_custom">
                                    <a href="#">
                                        <img alt="Product" class="product-thumb" src="img/placeholder.png" height="50"
                                             width="50"/>
                                    </a>
                                </td>
                                <td class="td_custom">
                                    <span><h5 class="uppercase">Optimal for local users</h5></span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
            <!--end of container-->
    </section>
    <section class="bg-secondary image-bg" style="background-color: #ebebeb;">
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <h2 class="uppercase h2Color">
                        Categories
                    </h2>
                </div>
                <div class="col-md-4"></div>
            </div>

            <div class="row text-center">
                <div class="col-md-2">
                    <img alt="Product" class="product-thumb" src="img/map.png" height="100" width="100"/>
                    <h6 class="uppercase h2ColorBlack">Money</h6>
                </div>
                <div class="col-md-2">
                    <img alt="Product" class="product-thumb" src="img/map.png" height="100" width="100"/>
                    <h6 class="uppercase h2ColorBlack">Hardware<br>Store</h6>
                </div>
                <div class="col-md-2">
                    <img alt="Product" class="product-thumb" src="img/map.png" height="100" width="100"/>
                    <h6 class="uppercase h2ColorBlack">Entertainment</h6>
                </div>
                <div class="col-md-2">
                    <img alt="Product" class="product-thumb" src="img/map.png" height="100" width="100"/>
                    <h6 class="uppercase h2ColorBlack">Education</h6>
                </div>
                <div class="col-md-2">
                    <img alt="Product" class="product-thumb" src="img/map.png" height="100" width="100"/>
                    <h6 class="uppercase h2ColorBlack">Shopping<br>Malls</h6>
                </div>
                <div class="col-md-2">
                    <img alt="Product" class="product-thumb" src="img/map.png" height="100" width="100"/>
                    <h6 class="uppercase h2ColorBlack">Grooming</h6>
                </div>
            </div>
            <div class="height-70"></div>
            <div class="row text-center">
                <div class="col-md-2">
                    <img alt="Product" class="product-thumb" src="img/hospital.jpg" height="100" width="100"/>
                    <h6 class="uppercase h2ColorBlack">Healthcare</h6>
                </div>
                <div class="col-md-2">
                    <img alt="Product" class="product-thumb" src="img/map.png" height="100" width="100"/>
                    <h6 class="uppercase h2ColorBlack">Sports</h6>
                </div>
                <div class="col-md-2">
                    <img alt="Product" class="product-thumb" src="img/map.png" height="100" width="100"/>
                    <h6 class="uppercase h2ColorBlack">Big-Brands</h6>
                </div>
                <div class="col-md-2">
                    <img alt="Product" class="product-thumb" src="img/map.png" height="100" width="100"/>
                    <h6 class="uppercase h2ColorBlack">Food</h6>
                </div>
                <div class="col-md-2">
                    <img alt="Product" class="product-thumb" src="img/map.png" height="100" width="100"/>
                    <h6 class="uppercase h2ColorBlack">Utilities</h6>
                </div>
                <div class="col-md-2">
                    <img alt="Product" class="product-thumb" src="img/map.png" height="100" width="100"/>
                    <h6 class="uppercase h2ColorBlack">Rent</h6>
                </div>
            </div>
        </div>
    </section>
</div>


@endsection
