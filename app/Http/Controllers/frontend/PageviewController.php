<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PageviewController extends Controller
{
    public function index(){
        $posts = Post::orderBy('id','desc')->paginate(6);
        return view('frontend.master',compact('posts'));
    }
    public function view($id){
        $posts = Post::findOrFail($id);
        return view('frontend.postview',compact('posts'));
    }
}
