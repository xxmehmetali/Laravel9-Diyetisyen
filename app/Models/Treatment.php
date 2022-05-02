<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'treatments';


    public function getCategory()
    {
        return $this->belongsTo(Category::class, 'categoryId','id');
    }
    public function getUser()
    {
        return $this->belongsTo(User::class, 'userId','id');
    }
}
