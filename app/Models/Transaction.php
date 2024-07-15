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
}
