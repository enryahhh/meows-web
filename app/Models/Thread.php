<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    use HasFactory;

    // protected $table = 'thread';
    // protected $with = ['user:id,name'];
    // protected $fillable = [
    //     'title',
    //     'content',
    //     'user_id',
    //     'total_comments',
    //     'total_likes',
    //     'category_id'
    // ];

    // public function post()
    // {
    //     return $this->hasMany(Post::class);
    // }
}
