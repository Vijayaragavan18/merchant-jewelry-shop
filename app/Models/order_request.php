<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_request extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'wishlist_id',
        'Requests',
    ];
}
