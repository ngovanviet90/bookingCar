@extends('layout')
@section('content')
    <!--HEADER SECTION-->
	<section>
		<div class="v2-hom-search">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
					<div class="v2-ho-se-ri">
						<h1>Choose a car for your exploration</h1>
						<p>Experience the various exciting tour and travel packages and Make hotel reservations, find vacation packages, search cheap hotels and events</p>
						<div class="tourz-hom-ser v2-hom-ser">
							<ul>
                                <li>
									<a href="booking-car-rentals.html" class="active waves-effect waves-light btn-large tourz-pop-ser-btn"><img src="{{asset('best_travel_hoian/images/icon/30.png')}}" alt=""> Car Rentals</a>
								</li>
								<li>
									<a href="/listTours.html" class="waves-effect waves-light btn-large tourz-pop-ser-btn"><img src="{{asset('best_travel_hoian/images/icon/2.png')}}" alt=""> Tour</a>
								</li>
							</ul>
						</div>
					</div>
					</div>
					<div class="col-md-6">
					<div class="">
						<form class="v2-search-form" method="post">
                            {{csrf_field()}}
							<div class="row">
                                <div class="input-field col s12">
									<input type="text" id="fullname" class="autocomplete">
									<label for="fullname" title="Fullname">Fullname</label>
								</div>
                                <div class="input-field col s12">
									<input type="text" id="phone" class="autocomplete">
									<label for="phone" title="Phone">Phone</label>
								</div>
                                <div class="input-field col s12">
									<input type="text" id="email" class="autocomplete">
									<label for="email" title="Email">Email</label>
								</div>
								<div class="input-field col s12">
									<input type="text" id="from_place" class="autocomplete">
									<label for="from_place"  title="From place">From place</label>
								</div>
								<div class="input-field col s12">
									<input type="text" id="to_place" class="autocomplete">
									<label for="to_place" title="To place">To place</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s6">
									<input type="text" id="from" name="from">
									<label for="from" title="Start Date">Start Date</label>
								</div>
                                <div class="input-field col s6">
                                    <select name="car_type" title="Car Type">
                                        <option value="" disabled selected>Car Type</option>
                                        <option value="1">4 seat</option>
                                        <option value="2">7 seat</option>
                                        <option value="3">16 seat</option>
                                    </select>
                                </div>
							</div>
							<div class="row">
								<div class="input-field col s6">
									<select name="adults" title="No of adults">
										<option value="" disabled selected>No of adults</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="1">4</option>
										<option value="1">5</option>
										<option value="1">6</option>
									</select>
								</div>
								<div class="input-field col s6">
									<select>
										<option value="" disabled selected>No of childrens</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="1">4</option>
										<option value="1">5</option>
										<option value="1">6</option>
									</select>
								</div>
							</div>
                            <div class="row">
								<div class="input-field col s12">
                                    <textarea name="emess" rows="2" id="text-comment" placeholder="Enter your message"></textarea>
                                </div>
                            </div>
							<div class="row">
								<div class="input-field col s12">
									<input type="submit" value="book a car" class="waves-effect waves-light tourz-sear-btn v2-ser-btn">
								</div>
							</div>
						</form>
					</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--END HEADER SECTION-->

    <section>
        <div class="rows pad-bot-redu tb-space">
            <div class="container">
                <!-- TITLE & DESCRIPTION -->
                <div class="spe-title">
                    <h2>Top <span>Tour Packages</span></h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide.</p>
                </div>
                <div>
                    <!-- TOUR PLACE 1 -->
                    <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow slideInUp" data-wow-duration="0.5s">
                        <!-- OFFER BRAND -->
                        <div class="band"> <img src="{{asset('best_travel_hoian/images/band.png')}}" alt="" /> </div>
                        <!-- IMAGE -->
                        <div class="v_place_img"> <img src="{{asset('best_travel_hoian/images/t5.png')}}" alt="Tour Booking" title="Tour Booking" /> </div>
                        <!-- TOUR TITLE & ICONS -->
                        <div class="b_pack rows">
                            <!-- TOUR TITLE -->
                            <div class="col-md-8 col-sm-8">
                                <h4><a href="/tourDetails/hoi-an-to-ba-na.html">Cu Lao Cham<span class="v_pl_name">(Brazil)</span></a></h4>
                            </div>
                            <!-- TOUR ICONS -->
                            <div class="col-md-4 col-sm-4 pack_icon">
                                <ul>
                                    <li>
                                        <a href="#"><img src="{{asset('best_travel_hoian/images/clock.png')}}" alt="Date" title="Tour Timing" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{asset('best_travel_hoian/images/info.png')}}" alt="Details" title="View more details" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{asset('best_travel_hoian/images/price.png')}}" alt="Price" title="Price" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{asset('best_travel_hoian/images/map.png')}}" alt="Location" title="Location" /> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- TOUR PLACE 2 -->
                    <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="0.7s">
                        <!-- OFFER BRAND -->
                        <div class="band"> <img src="{{asset('best_travel_hoian/images/band1.png')}}" alt="" /> </div>
                        <!-- IMAGE -->
                        <div class="v_place_img"> <img src="{{asset('best_travel_hoian/images/t1.png')}}" alt="Tour Booking" title="Tour Booking" /> </div>
                        <!-- TOUR TITLE & ICONS -->
                        <div class="b_pack rows">
                            <!-- TOUR TITLE -->
                            <div class="col-md-8 col-sm-8">
                                <h4><a href="/tourDetails/hoi-an-to-ba-na.html">Hoi An<span class="v_pl_name">(England)</span></a></h4>
                            </div>
                            <!-- TOUR ICONS -->
                            <div class="col-md-4 col-sm-4 pack_icon">
                                <ul>
                                    <li>
                                        <a href="#"><img src="{{asset('best_travel_hoian/images/clock.png')}}" alt="Date" title="Tour Timing" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{asset('best_travel_hoian/images/info.png')}}" alt="Details" title="View more details" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{asset('best_travel_hoian/images/price.png')}}" alt="Price" title="Price" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{asset('best_travel_hoian/images/map.png')}}" alt="Location" title="Location" /> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- TOUR PLACE 3 -->
                    <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="0.9s">
                        <div class="v_place_img"><img src="{{asset('best_travel_hoian/images/t2.png')}}" alt="Tour Booking" title="Tour Booking" /> </div>
                        <div class="b_pack rows">
                            <div class="col-md-8 col-sm-8">
                                <h4><a href="/tourDetails/hoi-an-to-ba-na.html">Ba Na Hills<span class="v_pl_name">(India)</span></a></h4>
                            </div>
                            <div class="col-md-4 col-sm-4 pack_icon">
                                <ul>
                                    <li>
                                        <a href="#"><img src="{{asset('best_travel_hoian/images/clock.png')}}" alt="Date" title="Tour Timing" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{asset('best_travel_hoian/images/info.png')}}" alt="Details" title="View more details" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{asset('best_travel_hoian/images/price.png')}}" alt="Price" title="Price" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{asset('best_travel_hoian/images/map.png')}}" alt="Location" title="Location" /> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- TOUR PLACE 4 -->
                    <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="1.1s">
                        <div class="v_place_img"><img src="{{asset('best_travel_hoian/images/t3.png')}}" alt="Tour Booking" title="Tour Booking" /> </div>
                        <div class="b_pack rows">
                            <div class="col-md-8 col-sm-8">
                                <h4><a href="/tourDetails/hoi-an-to-ba-na.html">Asia Pack<span class="v_pl_name">(China)</span></a></h4>
                            </div>
                            <div class="col-md-4 col-sm-4 pack_icon">
                                <ul>
                                    <li>
                                        <a href="#"><img src="{{asset('best_travel_hoian/images/clock.png')}}" alt="Date" title="Tour Timing" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{asset('best_travel_hoian/images/info.png')}}" alt="Details" title="View more details" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{asset('best_travel_hoian/images/price.png')}}" alt="Price" title="Price" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{asset('best_travel_hoian/images/map.png')}}" alt="Location" title="Location" /> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- TOUR PLACE 5 -->
                    <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="1.3s">
                        <div class="v_place_img"><img src="{{asset('best_travel_hoian/images/t4.png')}}" alt="Tour Booking" title="Tour Booking" /> </div>
                        <div class="b_pack rows">
                            <div class="col-md-8 col-sm-8">
                                <h4><a href="/tourDetails/hoi-an-to-ba-na.html">Hue City<span class="v_pl_name">(Andaman)</span></a></h4>
                            </div>
                            <div class="col-md-4 col-sm-4 pack_icon">
                                <ul>
                                    <li>
                                        <a href="#"><img src="{{asset('best_travel_hoian/images/clock.png')}}" alt="Date" title="Tour Timing" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{asset('best_travel_hoian/images/info.png')}}" alt="Details" title="View more details" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{asset('best_travel_hoian/images/price.png')}}" alt="Price" title="Price" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{asset('best_travel_hoian/images/map.png')}}" alt="Location" title="Location" /> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- TOUR PLACE 6 -->
                    <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow fadeInUp" data-wow-duration="1.5s">
                        <div class="v_place_img"><img src="{{asset('best_travel_hoian/images/t6.png')}}" alt="Tour Booking" title="Tour Booking" /> </div>
                        <div class="b_pack rows">
                            <div class="col-md-8 col-sm-8">
                                <h4><a href="/tourDetails/hoi-an-to-ba-na.html">Phong Nha Ke Bang<span class="v_pl_name">(Indiana)</span></a></h4>
                            </div>
                            <div class="col-md-4 col-sm-4 pack_icon">
                                <ul>
                                    <li>
                                        <a href="#"><img src="{{asset('best_travel_hoian/images/clock.png')}}" alt="Date" title="Tour Timing" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{asset('best_travel_hoian/images/info.png')}}" alt="Details" title="View more details" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{asset('best_travel_hoian/images/price.png')}}" alt="Price" title="Price" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{asset('best_travel_hoian/images/map.png')}}" alt="Location" title="Location" /> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== HOME HOTELS ==========-->
@endsection
