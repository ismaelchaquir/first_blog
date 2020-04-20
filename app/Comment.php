<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'name',
        'comment',
        'email',
        'post_id'
    ];


    public function replies()
    {
        return $this->hasMany('App\Reply');
    }

    public function post()
    {
        $this->belongsTo('App\Post');
    }
}
