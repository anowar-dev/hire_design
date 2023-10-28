<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'dis',
        'blog_cat_id',
        'image',

    ];

    public function blog_cat()
    {

        return $this->belongsTo(blog_cat::class);
    }
}
