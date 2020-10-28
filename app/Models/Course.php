<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'category_id',
        'title',
        'description',
        'resume',
        'requirements',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
