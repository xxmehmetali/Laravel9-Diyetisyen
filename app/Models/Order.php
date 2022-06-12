<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'orders';

    public function getTreatment()
    {
        return $this->hasOne(Treatment::class, 'id','treatmentId');
    }

    public function getUser()
    {
        return $this->belongsTo(User::class, 'patientId','id');
    }

}
