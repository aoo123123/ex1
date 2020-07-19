<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $post = Post::paginate(5);
        $data =['posts'=>$post];
        return view('home',$data);
    }
    public function create()
    {
        $categories = Category::all();
        $data = ['categories' => $categories];
        return view('create', $data);
    }
    public function login()
    {
        return view('login');
    }

    public function store(Request $request)
    {
        $detail = $request->input('detail');
        $category_id = $request->input('category_id');
        $Post = new Post();
        $Post->user_id = 1;
        $Post->status = 0;
        $Post->detail = $detail;

        $Post->category_id = $category_id;
        $Post->save();

        return redirect('/');
    }
    public function delete($id){
        if($id==""){
            return redirect('/');
        }
        $post = Post::find($id);
        $post -> delete();
        return redirect('/');
    }
}
