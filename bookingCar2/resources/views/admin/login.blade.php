<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'Admin')</title>
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

    <section>
		<div class="tr-register">
			<div class="tr-regi-form">
				<h4>Login Admin</h4>
				<form class="col s12" method="post">
					<div class="row">
						<div class="input-field col s12">
							<input type="text" class="validate">
							<label>User Name</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input type="password" class="validate">
							<label>Password</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input type="submit" value="submit" class="waves-effect waves-light btn-large full-btn"> </div>
					</div>
				</form>
			</div>
		</div>
	</section>
    <!--====== FOOTER 1 ==========-->
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
</body>
</html>
