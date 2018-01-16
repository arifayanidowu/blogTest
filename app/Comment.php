<?php

namespace App;


class Comment extends Model
{
    // creating a link between comment and post

    public function post()
    {

        return $this->belongsTo(Post::class);
    
    }

    public function user()
    {

        return $this->belongsTo(User::class);
    
    }
}
