<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }

    public function greeting($name)
    {
        return "สวัสดี $name";
    }
    public function calculator($a, $b, $c)
    {
        return ("ผลรวมของเลข$a,$b,$c คือ" . ($a + $b + $c) . "นะจ๊ะ");
    }
}
