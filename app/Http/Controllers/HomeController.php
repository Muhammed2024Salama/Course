<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $blogs = [
            [
                'title' => 'Title One',
                'body' => 'this is body one',
                'status' => 1
            ],
            [
                'title' => 'Title Two',
                'body' => 'this is body two',
                'status' => 0
            ],
            [
                'title' => 'Title Three',
                'body' => 'this is body three',
                'status' => 1
            ],
            [
                'title' => 'Title Four',
                'body' => 'this is body four',
                'status' => 0
            ]
        ];
        return view('home',compact('blogs'));
    }
}
