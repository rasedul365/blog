<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'status',
        'is_approve',
        'image',
        'description',
        'yt-iframe',
        'category_id',
        'sub_category_id',
        'user_id',
        'admin_comment',
    ];

    public function categories() {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function sub_categories() {
        return $this->belongsTo(SubCategory::class, 'sub_category_id');
    }

    public function users()
    {
        return $this->belongsTo(Users::class, 'user_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

}