<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarServicesController extends Controller
{
    public function getIndex() {
        return view("car_services");
    }
}
