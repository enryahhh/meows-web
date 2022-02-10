<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;
use App\Models\User;
use App\Models\ImgPost;

class Post extends Model
{
    use HasFactory;

    protected $table = 'post';
    protected $with = ['user:id,name'];
    protected $fillable = [
        'title',
        'content',
        'user_id',
        'total_comments',
        'total_likes',
        'category_id'
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function images()
    {
        return $this->hasMany(ImgPost::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
