<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Galery extends Model
{
    use HasFactory ,softDeletes;
    protected $fillable =[
        'judul',
        'photo',
        'deskripsi',
        'user_id',
    ];
}
