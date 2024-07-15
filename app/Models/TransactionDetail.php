<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;
    /**
     * fillable
     */
    protected $fillable = ['transaction_id', 'product_id', 'quantity', 'price'];

    /**
     * relation to transaction table
     */
    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }

    /**
     * relation to products table
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
