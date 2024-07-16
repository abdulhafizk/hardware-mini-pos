<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;

    /**
     * fillable
     */
    protected $fillable = ['name', 'slug', 'category_id', 'image', 'quantity', 'price'];

    /**
     * accessor image product
     */
    public function getImageAttribute($image)
    {
        return Storage::url('/products/' . $image);
    }

    /**
     * relation to categories table
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
