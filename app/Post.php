<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    protected $fillable=
    ['id','title','slug','content'];

    public function author()
    {
        return $this->belongsTo('App\User');
    }

    public function tags()
    {
    	return $this->belongsToMany('App\Tag','post_tags');
    }

    public function categories()
    {
    	return $this->belongsToMany('App\Category','category_posts');
    }

}
