<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Category extends Model
{
    use HasFactory;

    /**
     * fillable
     */
    protected $fillable = ['name', 'slug', 'image'];

    /**
     * accessor image category
     */
    public function getImageAttribute($image)
    {
        return asset('/storage/categories/' . $image);
    }
}
