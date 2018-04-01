<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'CarTravelHoiAn.Com - Best Tour Travel Hoi An, Da Nang, Hue')</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- FAV ICON -->
    <link rel="shortcut icon" href="{{asset('best_travel_hoian/images/fav.ico')}}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins%7CQuicksand:400,500,700" rel="stylesheet">
    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="{{asset('best_travel_hoian/css/font-awesome.min.css')}}">
    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="{{asset('best_travel_hoian/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('best_travel_hoian/css/materialize.css')}}">
    <link rel="stylesheet" href="{{asset('best_travel_hoian/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('best_travel_hoian/css/mob.css')}}">
    <link rel="stylesheet" href="{{asset('best_travel_hoian/css/animate.css')}}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

    <!-- MOBILE MENU -->
    <section>
        <div class="ed-mob-menu">
            <div class="ed-mob-menu-con">
                <div class="ed-mm-left">
                    <div class="wed-logo">
                        <a href="/"><img src="{{asset('best_travel_hoian/images/logo.png')}}" alt="" />
						</a>
                    </div>
                </div>
                <div class="ed-mm-right">
                    <div class="ed-mm-menu">
                        <a href="#!" class="ed-micon"><i class="fa fa-bars"></i></a>
                        <div class="ed-mm-inn">
                            <a href="#!" class="ed-mi-close"><i class="fa fa-times"></i></a>
                            <h4>Car Travel Hoi An</h4>
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="/carServices.html">Car Services</a></li>
                                <li><a href="/dailyTours.html">Daily Tours</a></li>
                                <!--<li><a href="/priceList.html">Price List</a></li>-->
                                <li><a href="/about.html">About us</a></li>
                                <li><a href="/contact.html">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--HEADER SECTION-->
    <section>
        <!-- TOP BAR -->
        <div class="ed-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ed-com-t1-left">
                            <ul>
                                <li><a href="#">Contact: Mr.Long, 69 Hoi An, Quang Nam, Viet Nam.</a>
                                </li>
                                <li><a href="#">Phone: +84909.999.666</a>
                                </li>
                                <li><a href="#">Email: ngovanviet90@gmail.com</a>
                                </li>
                            </ul>
                        </div>
                        <div class="ed-com-t1-right">
                            <ul>
                                <li><img src="{{asset('best_travel_hoian/images/english.png')}}" style="width: 32px;" alt="English" title="English"></a>
                                </li>
                                <li><img src="{{asset('best_travel_hoian/images/vietnam.png')}}" style="width: 32px;" alt="Vietnamese" title="Vietnamese"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="ed-com-t1-social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- LOGO AND MENU SECTION -->
        <div class="top-logo" data-spy="affix" data-offset-top="250">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wed-logo">
                            <a href="/"><img src="{{asset('best_travel_hoian/images/logo.png')}}" alt="" />
                            </a>
                        </div>
                        <div class="main-menu">
                            <ul>
                                <li><a href="/" class="active">Home</a></li>
                                <li><a href="/carServices.html">Car Services</a></li>
                                <li><a href="/dailyTours.html">Daily Tours</a></li>
                                <!--<li><a href="/priceList.html">Price List</a></li>-->
                                <li><a href="/about.html">About Us</a></li>
                                <li><a href="/contact.html">Contact us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- TOP SEARCH BOX -->
            <div class="search-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="search-form">
    						<form class="tourz-search-form" method="get" action="/searchTours">
    							<div class="input-field">
    								<input type="text" id="select-city" name="city" value="{{(isset($_GET['city']))?$_GET['city']:""}}" class="autocomplete">
    								<label for="select-city">Enter city</label>
    							</div>
    							<div class="input-field">
    								<input type="text" id="select-search" name="keyword" value="{{(isset($_GET['keyword']))?$_GET['keyword']:""}}" class="autocomplete">
    								<label for="select-search" class="search-hotel-type">Search over a million tour and travels, sight seeings, hotels and more</label>
    							</div>
    							<div class="input-field">
    								<input type="submit" value="search" class="waves-effect waves-light tourz-sear-btn"> </div>
    						</form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    		<!-- END TOP SEARCH BOX -->
    </section>
    <!--END HEADER SECTION-->
    @yield('content')
    <!--====== TIPS BEFORE TRAVEL ==========-->
    <section>
        <div class="rows tips tips-home tb-space home_title">
            <div class="container tips_1">
                <!-- TIPS BEFORE TRAVEL -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <h3>Tips Before Travel</h3>
                    <div class="tips_left tips_left_1">
                        <h5>Bring copies of your passport</h5>
                        <p>Aliquam pretium id justo eget tristique. Aenean feugiat vestibulum blandit.</p>
                    </div>
                    <div class="tips_left tips_left_2">
                        <h5>Register with your embassy</h5>
                        <p>Mauris efficitur, ante sit amet rhoncus malesuada, orci justo sollicitudin.</p>
                    </div>
                    <div class="tips_left tips_left_3">
                        <h5>Always have local cash</h5>
                        <p>Donec et placerat ante. Etiam et velit in massa. </p>
                    </div>
                </div>
                <!-- CUSTOMER TESTIMONIALS -->
                <div class="col-md-8 col-sm-6 col-xs-12 testi-2">
                    <!-- TESTIMONIAL TITLE -->
                    <h3>Customer Testimonials</h3>
                    <div class="testi">
                        <h4>Viet Ngo</h4>
                        <p>Ut sed sem quis magna ultricies lacinia et sed tortor. Ut non tincidunt nisi, non elementum lorem. Aliquam gravida sodales</p> <address>Illinois, United States of America</address> </div>
                    <!-- ARRANGEMENTS & HELPS -->
                    <h3>Arrangement & Helps</h3>
                    <div class="arrange">
                        <ul>
                            <!-- LOCATION MANAGER -->
                            <li>
                                <a href="#"><img src="{{asset('best_travel_hoian/images/Location-Manager.png')}}" alt=""> </a>
                            </li>
                            <!-- PRIVATE GUIDE -->
                            <li>
                                <a href="#"><img src="{{asset('best_travel_hoian/images/Private-Guide.png')}}" alt=""> </a>
                            </li>
                            <!-- ARRANGEMENTS -->
                            <li>
                                <a href="#"><img src="{{asset('best_travel_hoian/images/Arrangements.png')}}" alt=""> </a>
                            </li>
                            <!-- EVENT ACTIVITIES -->
                            <li>
                                <a href="#"><img src="{{asset('best_travel_hoian/images/Events-Activities.png')}}" alt=""> </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== FOOTER 1 ==========-->
    <section>
        <div class="rows">
            <div class="footer1 home_title tb-space">
                <div class="pla1 container">
                    <!-- FOOTER OFFER 1 -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="disco">
                            <h3>30%<span>OFF</span></h3>
                            <h4>Hoi An</h4>
                            <p>valid only for 24th Dec</p> <a href="booking.html">Book Now</a> </div>
                    </div>
                    <!-- FOOTER OFFER 2 -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="disco1 disco">
                            <h3>42%<span>OFF</span></h3>
                            <h4>Da Nang</h4>
                            <p>valid only for 18th Nov</p> <a href="booking.html">Book Now</a> </div>
                    </div>
                    <!-- FOOTER MOST POPULAR VACATIONS -->
                    <div class="col-md-6 col-sm-12 col-xs-12 foot-spec footer_places">
                        <h4><span>Most Popular</span> Vacations</h4>
                        <ul>
                            <li><a href="/tour_details/hoi-an-to-ba-na.html">Tour Cù Lao Chàm</a> </li>
                            <li><a href="/tour_details/hoi-an-to-ba-na.html">Tour Đà Nẵng (Ngũ Hành Sơn - Hội An - Bà Nà - Huế)</a> </li>
                            <li><a href="/tour_details/hoi-an-to-ba-na.html">Tour Đà Nẵng (Hội An - Bà Nà - Huế City - Quảng Bình)</a> </li>
                            <li><a href="/tour_details/hoi-an-to-ba-na.html">Tour Hội An - Bà Nà Hills</a> </li>
                            <li><a href="/tour_details/hoi-an-to-ba-na.html">Tour suối khoáng nóng núi Thần Tài</a> </li>
                            <li><a href="/tour_details/hoi-an-to-ba-na.html">Tour Đà Nẵng - Huế</a> </li>
                            <li><a href="/tour_details/hoi-an-to-ba-na.html">Tour Bạch Mã</a> </li>
                            <li><a href="/tour_details/hoi-an-to-ba-na.html">Tour Huế - Phong Nha - Thiên Đường </a> </li>
                            <li><a href="/tour_details/hoi-an-to-ba-na.html">Tour Động Phong Nha – Suối Moọc</a> </li>
                            <li><a href="/tour_details/hoi-an-to-ba-na.html">Động Phong Nha – Sông Chày – Hang Tối</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== FOOTER 2 ==========-->
    <section>
        <div class="rows">
            <div class="footer">
                <div class="container">
                    <div class="foot-sec2">
                        <div>
                            <div class="row">
                                <div class="col-sm-3 foot-spec foot-com">
                                    <h4><span>Hoi An</span> Tour & Travels</h4>
                                    <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide.</p>
                                </div>
                                <div class="col-sm-3 foot-spec foot-com">
                                    <h4><span>Address</span> & Contact Info</h4>
                                    <p>Mr.Long, 69 Hoi An, Quang Nam, Viet Nam</p>
                                    <p> <span class="strong">Phone: </span> <span class="highlighted">+84909.999.666</span> </p>
                                </div>
                                <div class="col-sm-3 col-md-3 foot-spec foot-com">
                                    <h4><span>SUPPORT</span> & HELP</h4>
                                    <ul class="two-columns">
                                        <li> <a href="#">About Us</a> </li>
                                        <li> <a href="#">FAQ</a> </li>
                                        <li> <a href="#">Feedbacks</a> </li>
                                        <li> <a href="#">Blog </a> </li>
                                        <li> <a href="#">Use Cases</a> </li>
                                        <li> <a href="#">Advertise us</a> </li>
                                        <li> <a href="#">Discount</a> </li>
                                        <li> <a href="#">Vacations</a> </li>
                                        <li> <a href="#">Branding Offers </a> </li>
                                        <li> <a href="#">Contact Us</a> </li>
                                    </ul>
                                </div>
                                <div class="col-sm-3 foot-social foot-spec foot-com">
                                    <h4><span>Follow</span> with us</h4>
                                    <p>Join the thousands of other There are many variations of passages of Lorem Ipsum available</p>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
                                        <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== FOOTER - COPYRIGHT ==========-->
    <section>
        <div class="rows copy">
            <div class="container">
                <p>Copyrights © 2018 CarTravelHoiAn.Com. All Rights Reserved</p>
            </div>
        </div>
    </section>
    <!--========= Scripts ===========-->
    <script src="{{asset('best_travel_hoian/js/jquery-latest.min.js')}}"></script>
    <script src="{{asset('best_travel_hoian/js/bootstrap.js')}}"></script>
    <script src="{{asset('best_travel_hoian/js/wow.min.js')}}"></script>
    <script src="{{asset('best_travel_hoian/js/materialize.min.js')}}"></script>
    <script src="{{asset('best_travel_hoian/js/jquery-ui.js')}}"></script>
    <script src="{{asset('best_travel_hoian/js/custom.js')}}"></script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5abdd98a4b401e45400e3319/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
</body>
</html>
