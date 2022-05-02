<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $guarded = []; // TABLOMUZUN HER HUCRESİNDE VERİ İŞLEMLERİ YAPMAMIZA YARAR
    protected $table = 'settings';


    public function getProperties()
    {
        //return $this->hasMany(Property::class,"settingId","id");
        return $this->hasMany(Property::class, 'settingId','id');
    }
}
