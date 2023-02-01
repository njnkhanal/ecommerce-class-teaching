<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id', 'name', 'address', 'email', 'phone_number', 'payment_method', 'payment_status', 'shipping_status', 'shipping_address', 'shipping_amount', 'total_amount', 'sub_total_amount'];
}