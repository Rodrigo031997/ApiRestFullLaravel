<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'quantity',
        'buyer_id',
        'product_id'
    ];

    public function buyer()
    {
        return $this->belongsTo('App\Buyer', 'buyer_id');
    }

    public function product()
    {
        return $this->belongsTo('App\Product', 'product_id');
    }
}
