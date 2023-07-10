<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Category;
use App\Models\Cart;
use App\Models\CartOrder;


class Product extends Model
{
    use HasFactory;
    protected $table = 'products';


    protected $guarded = [];
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function carts()
    {
        return $this->belongsTo(Cart::class);
    }

    public function cartOrders()
    {
        return $this->hasMany(CartOrder::class, 'product_id');
    }

    public function totalSold($startDate, $endDate)
    {
        return $this->cartOrders()
            ->whereBetween('created_at', [$startDate, $endDate])
            ->sum('qty');
    }
}
