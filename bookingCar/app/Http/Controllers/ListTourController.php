<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListTourController extends Controller
{
    public function getListTours() {
        return view("list_tours");
    }

    public function getDailyTours() {
        return view("daily_tours");
    }

    public function getSearchTours(Request $request) {
        //return $request->city;
        return view("list_tours");
    }

}
