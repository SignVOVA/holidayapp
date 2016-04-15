<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use Illuminate\Http\Response;

/*
 *	Missing Class reference class 'User' not found
 *	Quickfix: try to use {$user = new \App\User;} instead {$user = new User;}
 */

Route::resource('country', 'CountryController', ['only' => [
    'index', 'show'
]]);

Route::resource('country', 'CountryController', ['except' => [
    'create', 'store', 'update', 'destroy'
]]);

Route::get('v1/holidays/country/{id}', 'CountryController@show');

Route::get('/', function () {
    return View::make('home');
});

Route::get('home', function () {
	//return redirect('v1/holidays?country=US&year=2016');
    /*return response()->json(['country' => 'US', 'year' => '2016'])
                 ->setCallback($request->input('callback'));*/
    return View::make('home');
});

Route::post('/home', function () {
	/*$holiday = new \App\User;
	$holiday->country = Input::get('country');
	$holiday->year = Input::get('year');
	$holiday->save(); */

	$theCountry = Input::get('country');
	$theYear = Input::get('year');

	$myUrl = 'v1/holidays?country=';
	$myUrl .= $theCountry;
	$myUrl .= '&year=';
	$myUrl .= $theYear;

	return Redirect::to($myUrl);
	//$JSON_data = redirect($myUrl);

	//echo($JSON_data);

	//$theCountry = Input::get('country');
	//return View::make('operate')->with('theCountry', $theCountry);
});

Route::get('/v1/holidays', function () {
    return View::make('api');
});

//UserTableSeeder
