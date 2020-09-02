<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

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

Route::get('/example', function(){
    // $response = Http::get('https://jsonplaceholder.typicode.com/todos/1');
    // $response = Http::get('https://jsonplaceholder.typicode.com/todos/1')['title'];
    // dd($response);
    // dd($response->body());
    // dd($response->json());
    // dd($response->status());
    // dd($response->ok());
    // dd($response->successful());
    // dd($response->failed());
    // dd($response->serverError());
    // dd($response->clientError());
    // dd($response->header($header));
    // dd($response->headers());
});

Route::get('/post-request', function(){
    $response = Http::post('https://jsonplaceholder.typicode.com/posts', [
        'title'=> 'foo',
        'body'=> 'bar',
        'userId'=> 1
    ]);
    dd($response->json());
});