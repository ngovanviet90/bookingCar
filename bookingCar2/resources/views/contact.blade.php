@extends('layout')
@section('content')
    <section>
		<div class="form form-spac rows con-page">
			<div class="container">
				<!-- TITLE & DESCRIPTION -->
				<div class="spe-title col-md-12">
					<h2><span>Contact us</span></h2>
					<div class="title-line">
						<div class="tl-1"></div>
						<div class="tl-2"></div>
						<div class="tl-3"></div>
					</div>
					<p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience</p>
				</div>
                <div class="col-md-8 col-sm-8 col-xs-12 form_1 wow fadeInLeft" data-wow-duration="1s">
					<!--====== THANK YOU MESSAGE ==========-->
					<div class="succ_mess">Thank you for contacting us we will get back to you soon.</div>
					<form id="home_form" name="home_form">
						<ul>
							<li>
								<input type="text" name="ename" value="" id="ename" placeholder="Name*" required> </li>
							<li>
								<input type="tel" name="emobile" value="" id="emobile" placeholder="Mobile*" required> </li>
							<li>
								<input type="email" name="eemail" value="" id="eemail" placeholder="Email*" required> </li>
							<li>
								<input type="text" name="esubject" value="" id="esubject" placeholder="Subject*" required> </li>
							<li>
								<input type="text" name="ecity" value="" id="ecity" placeholder="City"> </li>
							<li>
								<input type="text" name="ecount" value="" id="ecount" placeholder="Country"> </li>
							<li>
								<textarea name="emess" cols="40" rows="3" id="text-comment" placeholder="Enter your message*"></textarea>
							</li>
							<li>
								<input type="submit" value="Submit" id="send_button"> </li>
						</ul>
					</form>
				</div>

		<div class="col-md-4 col-sm-4 col-xs-12 form_1 wow fadeInRight">
            <h4>CONTACT INFO:</h4>
            <p> <a href="tel://0099999999" class="contact-icon">Phone: 0935147435</a>
                <br> <a href="mailto:mytestmail@gmail.com" class="contact-icon">Email: ngovanviet90@gmail.com</a>
                <br /><a href="#">Address: 69 Hoi An, Quang Nam, Viet Nam.</a>
                <br /><a href="https://cartravelhoian.com">Website: www.cartravelhoian.com</a>
            </p>
        </div>
		</div>
	</div>
</section>
@endsection
