<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TourDetailController extends Controller
{
    public function getIndex() {
        return view("tour_detail");
    }
}
