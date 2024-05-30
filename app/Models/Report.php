<?php

namespace App\Models;

use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Report extends Model {
    use HasFactory;

    public function order() {
        return $this->belongsTo(Order::class, 'order_id');
    }
    public function product() {
        return $this->belongsTo(Product::class, 'product_id');
    }
}