<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessageSubject extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'message_subjects';

    public function getMessages()
    {
        return $this->hasMany(Message::class, 'messageSubjectId','id');
    }
}
