<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'userid',
        'shipping_phoneNumber',
        'shipping_postCode',
        'shipping_city',
        'product_id',
        'quantity',
        'total_price'
    ];
}