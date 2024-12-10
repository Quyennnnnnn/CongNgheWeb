<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    

    // Liên kết model với bảng `posts`
    protected $table = 'posts';
    protected $fillable = [
        'title',
        'content',
        
    ];
}
