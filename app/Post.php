<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tag;


class Post extends Model
{
    protected $fillable=
    ['id','title','slug','content','status'];

    public function author()
    {
        return $this->belongsTo('App\User');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'post_tags');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category', 'category_posts');
    }

    public function scopeSearch($query,$s)
    {
        if (trim($s) != " ") {
                return $query->where('title', 'like', '%' .$s. '%')
                    ->orWhere('content', 'like', '%' .$s. '%');
        }
    }

    public function comments() 
    {
        return $this->hasMany('App\Comment');
    }
}
