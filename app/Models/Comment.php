<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'comments';

    public function getTreatment()
    {
        return $this->belongsTo(Treatment::class, 'treatmentId','id');
    }

    public function getUser()
    {
        return $this->belongsTo(User::class, 'userId','id');
    }
}
