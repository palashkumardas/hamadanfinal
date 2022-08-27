<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebContact extends Model
{
        
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
    ];
}