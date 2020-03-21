<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['slug','name'];

    public function posts()
    {
    	return $this->belongsToMany('App\Post','category_posts');
    }
}
