<?php

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
use FTX\FTX;
//require('vendor/autoload.php');
Route::get('/', function () {
    //$ftx = FTX::create();

// Authenticated
//$ftx = FTX::create('w-CgQs5Q1icSMaw3SWFIJmTc5SaniXvQJFVXJfBj','ZAanQz_mgR64BXeen_qVGYz_yEeQss6v23akHZKp');
//dd($ftx);
//dd($ftx->account()->get());
	



// Unauthenticated
$ftx = FTX::create();

// Authenticated
$ftx = FTX::create('w-CgQs5Q1icSMaw3SWFIJmTc5SaniXvQJFVXJfBj', 'ZAanQz_mgR64BXeen_qVGYz_yEeQss6v23akHZKp');

// Authenticated with subaccount
//$ftx = $ftx->onSubaccount('sub1');
// or simply
//$ftx = FTX::create('key', 'secret')->onSubaccount('sub1');



//$markets = $ftx->markets()->trades('BTC-0327', 2, new DateTime('2019-12-01'), new DateTime('2019-12-10'));
//$markets = $ftx->onSubaccount('main')->orders()->history();

var_dump($ftx->account()->get());
});
