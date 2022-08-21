<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $fillable = ["productable_id", "productable_type", "price", "amount", "order_id"];
    public function order(){
        return $this->belongsTo(Order::class);
    }
    public function productable(){
        $this->morphTo();
    }
}
