<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return"สวัสดีจากหน้าUser index";
    }
    public function show($id){
        return"เธอคือ $id";
    }
    public function update($id){
        return"กำลังupdate $id";
    }
}
