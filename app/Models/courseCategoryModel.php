<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courseCategoryModel extends Model
{
    use HasFactory;

    protected $table = 'course_categories';

    public function courseinfoModel()
    {

        return $this->hasMany(courseInfoModel::class, 'course_category_id');
    }
}
