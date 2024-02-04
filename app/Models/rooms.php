<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rooms extends Model
{
    use HasFactory;

    protected $table = 'rooms';
    protected $fillable = [
        'room_title',
        'room_price',
        'room_desc',
        'room_img',
    ];
}
