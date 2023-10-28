<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class about_second extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'position',
        'dis',
        'image',
        'facebook',
        'twitter'

    ];
}
