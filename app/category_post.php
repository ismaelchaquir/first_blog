<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category_post extends Model
{
    public function posts() {
        return $this->belongsTo('posts');
    }

    public function categories() {
        return $this->belongsTo('categories');
    }
}
