<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class AdminController extends Controller
{
    public function index(){
        return view('admin-zone.index');
    }

    public function posts(){
        $publishedPosts = Post::where('status', 1)->latest()->get();
        $draftPosts = Post::where('status', 0)->latest()->get();

        return view('admin-zone.post',compact('publishedPosts', 'draftPosts'));
    }
}
