<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    use HasFactory;

    protected $table = 'cats';
    protected $fillable = [
        'id_user',
        'nama_kucing',
        'jk',
        'birth',
        'ras',
        'photo'
    ];
    public $timestamps = false;
}
