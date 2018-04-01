@extends('layout')
@section('content')
    <!--DASHBOARD-->
	<section>
		<div class="tr-register">
			<div class="tr-regi-form v2-search-form">
				<h4>You have choosed tour<br /><span>Hoi An-Ba Na Hills</span></h4>
				<p>We will contact you as soon as you complete the form below.</p>
				<form class="" method="post">
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
                            <input type="submit" value="book a tour" class="waves-effect waves-light tourz-sear-btn v2-ser-btn">
                        </div>
                    </div>
				</form>
			</div>
		</div>
	</section>
	<!--END DASHBOARD-->
@endsection
