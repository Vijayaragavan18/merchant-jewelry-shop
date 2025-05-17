<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userOrder extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'wishlist_id',
        'orderUser',
        'orderQty',
        'OrderPrice',
        'Description',
        'Gender',
        'Material',
        'TypeOfJewel',
        'finalPrice',
        'image',

    ];
}
