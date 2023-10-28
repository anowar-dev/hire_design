<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog_cat extends Model
{
    use HasFactory;
    protected $fillable = [
        'catagory',

    ];

    public function blog()
    {

        return $this->hasMany(blog::class);
    }
}
