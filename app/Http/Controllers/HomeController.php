<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $current_time = date('h:i A');
        $data = [
            'time' => $current_time,
        ];

        return view('public.home', compact('data'));
    }
}
