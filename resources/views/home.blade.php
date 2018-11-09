@extends('layouts.app')

@section('content')
<div class="main-container">
    <section class="cover pt240 pb240 pt-xs-120 pb-xs-80 image-bg">
        <div class="background-image-holder">
            <img alt="image" class="background-image" src="img/landing_page_background.png"/>
        </div>
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <input type="text" name="website" placeholder="Find Everything"/>
                    </div>
                </div>
                <div class="height"></div>
                <div class="row mb24 mb-xs-0">
                    <div class="col-sm-10 col-sm-offset-1 text-center">
                        <h2 class="large uppercase">Yellow Pages<br>with direction</h2>
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
                        <h2 class="uppercase">How to use</h2>
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
            <!--end of container-->
    </section>

    <section class="bg-light image-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-6">
                    <h2 class="uppercase">
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
            <!--end of container-->
    </section>

    <footer class="footer-1 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <img alt="Logo" class="logo" src="img/logo-light.png"/>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h6 class="title">Recent Posts</h6>
                        <hr>
                        <ul class="link-list recent-posts">
                            <li>
                                <a href="#">Hugging pugs is super trendy</a>
                                <span class="date">February
                                            <span class="number">14, 2015</span>
                                        </span>
                            </li>
                            <li>
                                <a href="#">Spinning vinyl is oh so cool</a>
                                <span class="date">February
                                            <span class="number">9, 2015</span>
                                        </span>
                            </li>
                            <li>
                                <a href="#">Superior theme design by pros</a>
                                <span class="date">January
                                            <span class="number">27, 2015</span>
                                        </span>
                            </li>
                        </ul>
                    </div>
                    <!--end of widget-->
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h6 class="title">Latest Updates</h6>
                        <hr>
                        <div class="twitter-feed">
                            <div class="tweets-feed" data-feed-name="mrareweb">
                            </div>
                        </div>
                    </div>
                    <!--end of widget-->
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h6 class="title">Instagram</h6>
                        <hr>
                        <div class="instafeed" data-user-name="mrareweb">
                            <ul></ul>
                        </div>
                    </div>
                    <!--end of widget-->
                </div>
            </div>
            <!--end of row-->
            <div class="row">
                <div class="col-sm-6">
                    <span class="sub">&copy; Copyright 2016 - Medium Rare</span>
                </div>
                <div class="col-sm-6 text-right">
                    <ul class="list-inline social-list">
                        <li>
                            <a href="#">
                                <i class="ti-twitter-alt"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ti-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ti-dribbble"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ti-vimeo-alt"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--end of container-->
        <a class="btn btn-sm fade-half back-to-top inner-link" href="#top">Top</a>
    </footer>
</div>
@endsection
