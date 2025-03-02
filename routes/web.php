<?php

use App\Models\Poll;
use Illuminate\Http\Request;
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

Route::get('/', function (Request $request) {
    $polls = Poll::with('answers.responders')->get();
    $currentIp = strval($request->ip());
    return view('app', compact(['polls', 'currentIp']));
});
