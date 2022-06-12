<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopCart extends Model
{
    use HasFactory;



    public function getTreatment()
    {
        return $this->hasOne(Treatment::class, 'id','treatment_id');
    }

    public function getUser()
    {
        return $this->hasOne(User::class, 'user_id','id');
    }
}
