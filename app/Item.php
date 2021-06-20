<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'order_id', 'width', 'length'
    ];

    public function order(){
        return $this->belongsTo(Order::class);
    }
}
