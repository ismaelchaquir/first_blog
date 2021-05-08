<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Carbon;
use App\Tag;
use App\post_tag;
use DB;
use Session;
use App\Comment;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $s = $request->input('s');
        $posts = Post::where('status', 1)->latest()
            ->search($s)->get(); 
        $post_carousel = Post::where('status', 1)->latest()->get();

        return view('home', compact('posts', 's', 'post_carousel'));
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
        $post = new Post();
        $post->title = $request->title;
        $post->slug = str_slug($request->title);
        if ($request->hasFile('image')) {
            $filename = $request->image->store('public');
        }
        $post->image = $filename;
        
        $post->posted_at = Carbon\Carbon::now();
        $post->content = $request->content;
        $post->save();
        if ($request->tag_id) {
            $post->tags()->sync($request->tag_id);
        }
        return redirect('/admin/post');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        // $Key = 'blog' . $post->id;
        //      if (\Session::has($Key)) {
 
        //      \DB::table('posts')
        //         ->where('id', $post->id)
        //         ->increment('view_count', 1);
        //       \Session::put($Key, 1);
        //     }
        $blogKey = 'blog_' . $post->id;
        $post->blogkey = $blogKey;
        $post->save();
        // dd($blogKey);

// Check if blog session key exists
// If not, update view_count and create session key
if (!Session::has($blogKey)) {
    Post::where('id', $post->id)->increment('view_count');
    Session::put($blogKey, 1);
}


        $comments = Comment::where('post_id', $post->id)->get();
        $tags = Tag::all();
        // $posts = Post::first()->get();
        $posts = Post::paginate(7);

        
        return view('post.show', compact('post', 'tags', 'posts', 'comments'));
    }

    
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $tags = Tag::all();
        return view('post.edit', compact('post', 'tags'));
    }

    
    public function update(Request $request, $id)
    {
        $input=$request->all();
        $post = Post::findOrFail($id);
        $post->update($input);
        if ($request->tag_id) {
            $post->tags()->sync($request->tag_id);
        }
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post $post apaga um post
     * @return \Illuminate\Http\Response is a delete
     */
    public function destroy(Post $post)
    {
        //
    }

    /**
     * Define template file.
     * 
     * @param string $id returns the id
     * 
     * @return tags for the 
     */
    public function postag($id)
    { 
        $tags = Tag::with('posts')->where('id', $id)->get();
        return view('post.post-tag', compact('tags'));
    }

    /**
     * Define template file.
     * 
     * @return page view count
     */
    public function getIp() 
    {
        $pdo = DB::connection()->getPdo();
        $ip = $_SERVER['REMOTE_ADDR'];
        $sql = "SELECT ip FROM visits WHERE ip='$ip'";
        $check = $pdo->prepare($sql);
        $check->execute();
        $checkIp = $check->rowCount();
        //  dd($checkIp);

        if ($checkIp==0) {
            $query = "INSERT INTO visits(id,ip) VALUES(NULL,'$ip')";
            $insertIp=$pdo->prepare($query);
            $insertIp->execute();
        }

        $number = $pdo->prepare("SELECT ip FROM visits");
        $number->execute();
        $visitor=$number->rowCount();
        echo $visitor;
    } 
}
