<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'properties';


    public function getSetting()
    {
        return $this->belongsTo(Setting::class, 'settingId','id');
    }
}
