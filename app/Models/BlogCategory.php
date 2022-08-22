<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'image',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'status',
        'blog_category_id',
    ];

    public function parent()
    {
        return $this->belongsTo(BlogCategory::class, 'blog_category_id', 'id');
    }

    public function categories()
    {
        return $this->hasMany(BlogCategory::class, 'blog_category_id', 'id');
    }

    public function posts()
    {
        return $this->hasMany(BlogPost::class, 'blog_category_id', 'id');
    }

}
