<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class ImgPost extends Model
{
    use HasFactory;

    protected $table = 'img_post';

    protected $fillable = [
        'id_post',
        'img'
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
