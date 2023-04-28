<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'category_id', 'status'];

    public function categories(){
        return $this->belongsTo(Category::class, 'category_id');
    }
}