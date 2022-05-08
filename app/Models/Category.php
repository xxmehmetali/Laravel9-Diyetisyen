<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'categories';

    public function getTreatments()
    {
        return $this->hasMany(Treatment::class, 'categoryId','id');
    }

    public function getChildren(){
        return $this->hasMany(Category::class, 'parentId', 'id');
    }
    public function getParent(){
        return $this->belongsTo(Category::class, 'parentId', 'id');
    }
}
