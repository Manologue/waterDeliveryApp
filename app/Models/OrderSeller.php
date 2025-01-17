<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderSeller extends Model {
    use HasFactory;


    public function order() {
        return $this->belongsTo(Category::class, 'order_id');
    }
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
