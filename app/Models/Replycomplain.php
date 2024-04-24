<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Replycomplain extends Model
{
    protected $fillable=['complains_id','reply'];
    use HasFactory;    
}

