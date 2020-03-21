<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Carbon;
use App\Tag;
use App\post_tag;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::where('status',1)->latest()->get(); 
        // $posts = Post::all();

        return view('home', compact( 'posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Post $post)
    {
        $tags = Tag::latest()->get();
        return view('post.create', compact('tags', 'post'));
    }
 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // echo $request->file('image')->store('public'); 
        
             
        // dd($request);
        $post = new Post();
        $post->title = $request->title;
        $post->slug = str_slug($request->title);
        if($request->hasFile('image')) {
        //    $filename = $request->image->getClientOriginalName();
            $filename = $request->image->store('public');
        }
        $post->image = $filename;
        
        $post->posted_at = Carbon\Carbon::now();
        $post->content = $request->content;
        $post->save();
       if($request->tag_id) {
            $post->tags()->sync($request->tag_id);
        }
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $tags = Tag::all();
        $posts = Post::first()->get();
        return view('post.show',compact('post','tags','posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $tags = Tag::all();
        return view('post.edit',compact('post','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->slug = str_slug($request->title);
        // if($request->hasFile('image')) {
        // //    $filename = $request->image->getClientOriginalName();
        //     $filename = $request->image->store('public');
        // }
        // $post->image = $filename;
        
        $post->posted_at = Carbon\Carbon::now();
        $post->content = $request->content;
        $post->save();
       if($request->tag_id) {
            $post->tags()->sync($request->tag_id);
        }
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }

    public function postag($id)
    {
        //  $tags = Tag::first()->get();
        // $tags = Tag::with('posts')->where('name', '=', 'laratube')->get();
        $tags = Tag::with('posts')->where('id', '=',$id)->get();
    //  dd($tags);
        return view('post.post-tag',compact('tags'));
        
    }
   
}
