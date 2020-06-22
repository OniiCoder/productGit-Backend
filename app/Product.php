<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = [
        'user_id', 'name', 'tagline', 'description', 'thumbnail', 'link', 'status', 'upvotes', 'category', 'banner_id', 'youtube_video_link',
    ];


}
