<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'profiles';

    public function getUser()
    {
        return $this->belongsTo(User::class, 'userId','id');
    }
}
