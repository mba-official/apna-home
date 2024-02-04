<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;

    protected $table = 'bookings';
    protected $fillable = [
        'room_user_name',
        'room_user_email',
        'room_user_phone',
        'room_number',
        'room_title',
        'room_sdate',
        'room_edate',
        'room_price',
    ];
}
