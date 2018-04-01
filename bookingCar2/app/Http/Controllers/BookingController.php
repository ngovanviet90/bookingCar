<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function getBookingTour() {
        return view("booking");
    }

    public function postBookingTour() {
        return redirect("/thankYou.html");
    }

    public function postBookingCar() {
        return redirect("/thankYou.html");
    }
}
