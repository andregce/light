<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/light', function(Request $request) {

    $brightness = intval($request->get('brightness'));
    $temperature = intval($request->get('temperature'));

    $response = Http::put(env('LIGHT_URL'), [
        'numberOfLights' => 1,
        'lights' =>
        [
            [
            'on' => 1,
            'brightness' => $brightness,
            'temperature' => $temperature,
            ],
        ],
    ]);

    return back()->with(compact(['brightness', 'temperature']));
});


/**
 * {
    "numberOfLights": 1,
    "lights": [
        {
            "on": 0,
            "brightness": 10,
            "temperature": 212
        }
    ]
}
 */