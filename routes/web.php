<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',function (){
    $blogs = [
        [
            'title' => 'Title One',
            'body' => 'this is body'
        ],
        [
            'title' => 'Title Two',
            'body' => 'this is body'
        ],
        [
            'title' => 'Title Three',
            'body' => 'this is body'
        ],
        [
            'title' => 'Title Four',
            'body' => 'this is body'
        ]
    ];
    return view('home',compact('blogs'));
});

Route::get('/about', function (){
    return view('about');
})->name('about');

Route::get('/contact', function (){
    return view('contact');
});
