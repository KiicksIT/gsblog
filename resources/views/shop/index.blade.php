@extends('master')
@section('content')
    <div class="wrapper">
        <!-- HEADER -->
        <header>
            <nav class="navbar-default navbar-fixed-top">
                <div class="container">
                    <a href="#" class="nav-trigger hidden-xs" data-toggle="modal" data-target="#myModal"></a>
                    <div class="navbar-header"> <a href="./index.html" class="navbar-brand">L<span>oo</span>call</a> </div>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li> <a href="index.html">Home</a> </li>
                            <li class=" dropdown"> <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="directory_profile.html">Profile (Booking)</a> </li>
                                    <li><a href="directory_profile_2.html">Profile (Discount Sale)</a> </li>
                                    <li><a href="directory_coupons.html">Profile (Coupons)</a> </li>
                                    <li><a href="directory_search_list.html">Search results list</a> </li>
                                    <li><a href="directory_search.html">Search results grid</a> </li>
                                    <li><a href="faq.html">Faq Page</a> </li>
                                    <li><a href="wizard.html">Form Wizard</a> </li>
                                </ul>
                            </li>
                            <li> <a href="directory_pricing.html">Pricing</a> </li>
                            <li class=" dropdown"> <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">News <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="directory_blog.html">Blog</a> </li>
                                    <li><a href="directory_blog_single.html">Blog single</a> </li>
                                </ul>
                            </li>
                            <li> <a href="directory_contact.html">Contact</a> </li>
                        </ul>
                    </div>
                    <div class="header-widget pull-right"> <a href="#" class="h-cart dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Cart <span class="item-count">0</span></a>
                        <ul class="dropdown-menu dropdown-menu-lg">
                            <li class="notifi-title">My Coupons</li>
                            <li class="list-group">
                                <!-- list item-->
                                <a href="javascript:void(0);" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left"> <img src="http://placehold.it/120x80" alt=""> </div>
                                        <div class="media-body clearfix">
                                            <div class="media-heading">Up to 30%</div>
                                            <p class="m-0"> <small>Shopname coupon</small> </p>
                                        </div>
                                    </div>
                                </a>
                                <!-- list item-->
                                <a href="javascript:void(0);" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left"> <img src="http://placehold.it/120x80" alt=""> </div>
                                        <div class="media-body clearfix">
                                            <div class="media-heading">Up to 30%</div>
                                            <p class="m-0"> <small>Shopname coupon</small> </p>
                                        </div>
                                    </div>
                                </a>
                                <!-- list item-->
                                <a href="javascript:void(0);" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left"> <img src="http://placehold.it/120x80" alt=""> </div>
                                        <div class="media-body clearfix">
                                            <div class="media-heading">Up to 30%</div>
                                            <p class="m-0"> <small>Shopname coupon</small> </p>
                                        </div>
                                    </div>
                                </a>
                                <!-- last list item -->
                                <a href="javascript:void(0);" class="list-group-item"> <small>Print all coupons</small> </a>
                            </li>
                        </ul> <a href="#" class="h-login" data-toggle="modal" data-target="#myModal2" data-tab="login">Sign In</a> </div>
                </div>
            </nav>
        </header>
        <div class="page_header"> <img src="http://placehold.it/1780x400" class="img-responsive" alt="" />
            <div class="container">
                <ul class="bcrumbs">
                    <li><a href="#">Loocall guide</a> </li>
                    <li>Blog</li>
                </ul>
            </div>
        </div>
        <div class="search-content blog-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="side-widget space30">
                            <h5>Filter Listings</h5>
                            <div class="side-cat2">
                                <form>
                                    <select class="categorie">
                                        <option>Categories</option>
                                        <option>Restaurants</option>
                                        <option>Caffe</option>
                                        <option>Sport</option>
                                    </select>
                                    <input class="keyword" type="search" placeholder="Keyword">
                                    <input class="location" type="search" placeholder="Location">
                                    <input class="radius" type="search" placeholder="Radius (5 km)">
                                    <input class="reviews" type="search" placeholder="Reviews count (2)" disabled>
                                    <input type="checkbox" class="cbox" name="r-cbox" id="r-cbox1" />
                                    <label for="r-cbox1"> <span class="star-ratings">
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								</span> </label>
                                    <br/>
                                    <input type="checkbox" class="cbox" name="r-cbox" id="r-cbox2" />
                                    <label for="r-cbox2"> <span class="star-ratings">
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o no"></i>
								</span> </label>
                                    <br/>
                                    <input type="checkbox" class="cbox" name="r-cbox" id="r-cbox3" />
                                    <label for="r-cbox3"> <span class="star-ratings">
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o no"></i>
								<i class="fa fa-star-o no"></i>
								</span> </label>
                                    <br/>
                                    <button type="submit">Search listings</button>
                                </form>
                            </div>
                        </div>
                        <div class="side-widget space30">
                            <h5>Recently rated listings</h5>
                            <ul class="rlistings">
                                <li>
                                    <a href="#"> <img src="http://placehold.it/80x80" alt="" /> </a>
                                    <h4><a href="#">Caffe bar Trattoria Due</a></h4>
                                    <p>Italian restaurant and caffe</p> <span class="star-ratings">
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o no"></i>
								</span> </li>
                                <li>
                                    <a href="#"> <img src="http://placehold.it/80x80" alt="" /> </a>
                                    <h4><a href="#">Group deal -70%</a></h4>
                                    <p>Awesome offer</p> <span class="star-ratings">
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								</span> </li>
                                <li>
                                    <a href="#"> <img src="http://placehold.it/80x80" alt="" /> </a>
                                    <h4><a href="#">Room booking deal</a></h4>
                                    <p>Book your hotel room for $40</p> <span class="star-ratings">
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o no"></i>
								<i class="fa fa-star-o no"></i>
								<i class="fa fa-star-o no"></i>
								</span> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8 dir-search dir-search-list">
                        <div class="search-filter">
                            <ul>
                                <li><a href="#">Featured</a> </li>
                                <li><a href="#">Popular</a> </li>
                                <li><a href="#">Best rated</a> </li>
                                <li><a href="#">Most recent</a> </li>
                                <li>
                                    <a href="directory_search.html"> <img src="images/icons/grid.png" alt="" /> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="images/icons/list.png" alt="" /> </a>
                                </li>
                            </ul>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="listing space30">
                                    <div class="listing-img bg-image" data-image-src="http://placehold.it/350x300">
                                        <div class="li-overlay">
                                            <div class="li-overlay-inner">
                                                <a href="#" class="mail"></a>
                                                <a href="#" class="menu"></a>
                                                <a href="#" class="link"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="listing-info">
                                        <h4 class="li-name"><a href="#">Relae Caffe, Copenhagen, <br>Denmark</a></h4>
                                        <p class="li-category">Caffe,restaurant</p>
                                        <p class="li-location">73 Sarajevska,Zagreb Croatia</p>
                                    </div>
                                    <div class="list-ratings-wrap">
                                        <div class="list-ratings2">4.9</div>
                                        <p>143 ratings</p> <a href="#">Message</a> </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="listing space30">
                                    <div class="listing-img bg-image" data-image-src="http://placehold.it/350x300">
                                        <div class="li-overlay">
                                            <div class="li-overlay-inner">
                                                <a href="#" class="mail"></a>
                                                <a href="#" class="menu"></a>
                                                <a href="#" class="link"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="listing-info">
                                        <h4 class="li-name"><a href="#">Marrakech Magic Theater, <br>Croatia</a></h4>
                                        <p class="li-category">Caffe,Bakeries</p>
                                        <p class="li-location">73 Sarajevska,Zagreb Croatia</p>
                                    </div>
                                    <div class="list-ratings-wrap">
                                        <div class="list-ratings2">4.6</div>
                                        <p>28 ratings</p> <a href="#">Message</a> </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="listing space30">
                                    <div class="listing-img bg-image" data-image-src="http://placehold.it/350x300">
                                        <div class="li-overlay">
                                            <div class="li-overlay-inner">
                                                <a href="#" class="mail"></a>
                                                <a href="#" class="menu"></a>
                                                <a href="#" class="link"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="listing-info">
                                        <h4 class="li-name"><a href="#">Tadu Ethiopian Kitchen and <br>late night caffe</a></h4>
                                        <p class="li-category">Caffe,restaurant</p>
                                        <p class="li-location">73 Sarajevska,Zagreb Croatia</p>
                                    </div>
                                    <div class="list-ratings-wrap">
                                        <div class="list-ratings2">5.0</div>
                                        <p>12 ratings</p> <a href="#">Message</a> </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="listing space30">
                                    <div class="listing-img bg-image" data-image-src="http://placehold.it/350x300">
                                        <div class="li-overlay">
                                            <div class="li-overlay-inner">
                                                <a href="#" class="mail"></a>
                                                <a href="#" class="menu"></a>
                                                <a href="#" class="link"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="listing-info">
                                        <h4 class="li-name"><a href="#">Michael Bruno Luggage & <br>outlet store</a></h4>
                                        <p class="li-category">Caffe,restaurant</p>
                                        <p class="li-location">73 Sarajevska,Zagreb Croatia</p>
                                    </div>
                                    <div class="list-ratings-wrap">
                                        <div class="list-ratings2">5.0</div>
                                        <p>12 ratings</p> <a href="#">Message</a> </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="listing space30">
                                    <div class="listing-img bg-image" data-image-src="http://placehold.it/350x300">
                                        <div class="li-overlay">
                                            <div class="li-overlay-inner">
                                                <a href="#" class="mail"></a>
                                                <a href="#" class="menu"></a>
                                                <a href="#" class="link"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="listing-info">
                                        <h4 class="li-name"><a href="#">Captain Kirk's San Francisco <br>Sailing</a></h4>
                                        <p class="li-category">Caffe,restaurant</p>
                                        <p class="li-location">73 Sarajevska,Zagreb Croatia</p>
                                    </div>
                                    <div class="list-ratings-wrap">
                                        <div class="list-ratings2">5.0</div>
                                        <p>12 ratings</p> <a href="#">Message</a> </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="listing space30">
                                    <div class="listing-img bg-image" data-image-src="http://placehold.it/350x300">
                                        <div class="li-overlay">
                                            <div class="li-overlay-inner">
                                                <a href="#" class="mail"></a>
                                                <a href="#" class="menu"></a>
                                                <a href="#" class="link"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="listing-info">
                                        <h4 class="li-name"><a href="#">San Francisco Fishing Charter <br>relax</a></h4>
                                        <p class="li-category">Caffe,restaurant</p>
                                        <p class="li-location">73 Sarajevska,Zagreb Croatia</p>
                                    </div>
                                    <div class="list-ratings-wrap">
                                        <div class="list-ratings2">5.0</div>
                                        <p>12 ratings</p> <a href="#">Message</a> </div>
                                </div>
                            </div>
                        </div>
                        <ul class="dpr-pager">
                            <li><a href="#">1</a> </li>
                            <li><a href="#">2</a> </li>
                            <li><a href="#">3</a> </li>
                            <li><a href="#">...</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="cta-wrap">
            <div class="container">
                <div class="row center-content">
                    <div class="col-md-8 col-sm-7">
                        <p>Get Loocal PSD template on themeforest</p>
                    </div>
                    <div class="col-md-4 col-sm-5 text-right"> <a href="#" class="cta-btn">Buy for $12 only</a> </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 footer-widget">
                        <h5>About Us</h5>
                        <p> <a href="#">Questions? 080-123-4564</a>
                            <br> <a href="#">Our History</a>
                            <br> <a href="#">Entrepreneurship</a>
                            <br> <a href="#">Finance</a>
                            <br> <a href="#">Human Resources</a>
                            <br> <a href="#">Marketing</a>
                            <br> <a href="#">Sales</a> </p>
                    </div>
                    <div class="col-md-3 col-sm-3 footer-widget">
                        <h5>How it works</h5>
                        <p> <a href="#">What we do</a>
                            <br> <a href="#">Who we are</a>
                            <br> <a href="#">Join the team</a>
                            <br> <a href="#">Press</a>
                            <br> <a href="#">Contact Us</a>
                            <br> <a href="#">Contribute Content</a> </p>
                    </div>
                    <div class="col-md-3 col-sm-3 footer-widget">
                        <h5>Advertise</h5>
                        <p> <a href="#">Advertise With Us</a>
                            <br> <a href="#">Account Login</a>
                            <br> <a href="#">Case Studies</a>
                            <br> <a href="#">Partner With Us</a> </p>
                    </div>
                    <div class="col-md-3 col-sm-3 footer-widget last">
                        <ul class="payment-methods">
                            <li> <img src="images/other/1/1.png" class="img-responsive" alt="" /> </li>
                            <li> <img src="images/other/1/2.png" class="img-responsive" alt="" /> </li>
                            <li> <img src="images/other/1/3.png" class="img-responsive" alt="" /> </li>
                        </ul>
                        <p>Stay in the loop on all upcoming promotions,discounts and latest updates</p>
                        <form class="f-newsletter">
                            <input type="email" placeholder="E-mail address"> </form>
                        <p class="copy">&copy; 2016 Loocal. All rights reserved 2015.</p>
                    </div>
                </div>
            </div>
            <div class="footer-social">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-2 col-xs-2"> <a href="#"><span class="hidden-xs hidden-sm ">Contact</span><span class="visible-xs visible-sm hidden-md hidden-lg"><i class="fa fa-envelope-o"></i></span></a> </div>
                        <div class="col-md-2 col-sm-2 col-xs-2"> <a href="#"><span class="hidden-xs hidden-sm ">Facebook</span><span class="visible-xs visible-sm hidden-md hidden-lg"><i class="fa fa-facebook"></i></span></a> </div>
                        <div class="col-md-2 col-sm-2 col-xs-2"> <a href="#"><span class="hidden-xs hidden-sm ">Twitter</span><span class="visible-xs visible-sm hidden-md hidden-lg"><i class="fa fa-twitter"></i></span></a> </div>
                        <div class="col-md-2 col-sm-2 col-xs-2"> <a href="#"><span class="hidden-xs hidden-sm ">Google+</span><span class="visible-xs visible-sm hidden-md hidden-lg"><i class="fa fa-google-plus"></i></span></a> </div>
                        <div class="col-md-2 col-sm-2 col-xs-2"> <a href="#"><span class="hidden-xs hidden-sm ">Pinterest</span><span class="visible-xs visible-sm hidden-md hidden-lg"><i class="fa fa-pinterest"></i></span></a> </div>
                        <div class="col-md-2 col-sm-2 col-xs-2"> <a href="#"><span class="hidden-xs hidden-sm ">Linkedin</span><span class="visible-xs visible-sm hidden-md hidden-lg"><i class="fa fa-linkedin"></i></span></a> </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

@endsection
