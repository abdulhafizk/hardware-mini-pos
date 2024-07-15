<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    /**
     * fillable
     */
    protected $fillable = ['name', 'slug', 'category_id', 'image', 'quantity', 'price'];

    /**
     * relation to categories table
     */
    public function category()
    {
        return $this->belongsTo(Product::class);
    }
}
