<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FoodItem extends Model
{
    use HasFactory, HasUuids;

    
    protected $fillable = ['name', 'description', 'price', 'rating', 'ingredients', 'photo', 'categories_id'];

    public function category(){
        return $this->belongsTo(Category::class, 'categories_id', 'id');
    }
}
