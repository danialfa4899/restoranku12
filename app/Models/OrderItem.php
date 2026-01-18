<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Order;
use App\Models\Item;

class OrderItem extends Model
{
    use softDeletes;

    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'price',
        'tax',
        'total_price',
        'created_at',
        'updated_at',
    ];
    protected $dates = ['deleted_at'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
