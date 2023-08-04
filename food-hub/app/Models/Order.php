<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = ['user_id', 'status', 'payment'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function carts(){
        return $this->hasMany(Cart::class);
    }



}
