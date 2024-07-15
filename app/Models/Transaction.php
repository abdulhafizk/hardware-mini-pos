<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    /**
     * fillable
     */
    protected $fillable = ['invoice', 'user_id', 'grand_total', 'cash', 'change'];

    /**
     * relation to users table
     */

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
