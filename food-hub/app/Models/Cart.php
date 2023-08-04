<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = ['order_id', 'item_id', 'price', 'qty', 'total'];

    public function food(){
        return $this->belongsTo(FoodItem::class, 'item_id', 'id');
    }
}
