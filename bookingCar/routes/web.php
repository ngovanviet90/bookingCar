<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@getIndex')->name('home');

Route::post('/', 'BookingController@postBookingCar');

Route::get('/tourDetails/{slug}.html', 'TourDetailController@getIndex')->name('tourDetail');

Route::get('/listTours.html', 'ListTourController@getListTours')->name('listTours');

Route::get('/searchTours', 'ListTourController@getSearchTours')->name('searchTours');

Route::get('/carServices.html', 'CarServicesController@getIndex')->name('carServices');

Route::get('/dailyTours.html', 'ListTourController@getDailyTours')->name('dailyTours');

Route::get('/contact.html', 'ContactController@getIndex')->name('contact');

Route::get('/tourDetails/{slug}/booking.html', 'BookingController@getBookingTour')->name('bookingTour');

Route::post('/tourDetails/{slug}/booking.html', 'BookingController@postBookingTour');


Route::get('/thankYou.html', function () {
    return view('thankyou');
});

Route::get('/priceList.html', function () {
    return view('price_list');
});

Route::prefix('/admin')->group(function() {
    Route::get('/', function () {
        return redirect('/admin/dashboard');
    });

    Route::get('/login', function () {
        return view('admin/login');;
    });
});
