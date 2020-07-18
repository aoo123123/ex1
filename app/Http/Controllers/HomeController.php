<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return "สวัสดี";
    }
    public function greeting($name){
        return "สวัสดี $name";
    }
    public function calculator($a,$b,$c){
        return ("ผลรวมของเลข$a,$b,$c คือ". ($a+$b+$c) . "นะจ๊ะ");
    }
}
