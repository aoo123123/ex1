<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function create()
    {
        return view('create');
    }
    public function login()
    {
        return view('login');
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
