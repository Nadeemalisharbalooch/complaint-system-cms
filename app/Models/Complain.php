<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complain extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'categorycomplains_id',
        'name',
        'email',
        'phone',
        'id&department',
        'desgination',
        'communication_medium',
        'descriptions'



    ];
}

