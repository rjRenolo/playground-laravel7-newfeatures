<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

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

///////////
// after //
///////////
Route::get('/after', function(){
    ///////////////////////////////////////
    // After Parameter is case-sensitive //
    ///////////////////////////////////////
    $sliced = Str::of('Something to be slice-off')->after('Something to be ');
    dd($sliced);
});

///////////////
// afterLast //
///////////////
Route::get('/afterlast', function(){
    $sliced = Str::of('Illuminate\Support\Str')->afterLast('\\'); // Escaping character with backslach
    dd($sliced);
});

//////////////////////////////////////////////////
// explode                                      //
// kinda important thing to remember            //
// making an array from string with a separator //
//////////////////////////////////////////////////
Route::get('/explode', function(){
    $exploded = Str::of('Something to separate')->explode(' ');
    dd($exploded);
});

//////////////////////////////////////
// limit                            //
// fun function for making excerpts //
//////////////////////////////////////
Route::get('/limit', function(){
    $limited = Str::of('The quick brown fox jumps over the lazy dog')->limit(10, '...');
    dd($limited);
});

//////////////////////////////////////////////////
// and many more kinda useless string functions //
//////////////////////////////////////////////////