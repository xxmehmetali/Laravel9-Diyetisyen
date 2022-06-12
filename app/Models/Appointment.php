<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $casts = [
        'appointmentTime' => 'date:hh:mm'
    ];


    public function getOrder()
    {
        return $this->hasOne(Order::class, 'id','orderId');
    }
}
