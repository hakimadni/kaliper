<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Models\Transaction;
use App\Models\User;
use App\Models\CartOrder;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';

    public function cartOrder()
    {
        return $this->hasMany(CartOrder::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
}
