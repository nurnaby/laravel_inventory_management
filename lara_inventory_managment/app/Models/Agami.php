<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agami extends Model
{
    use HasFactory;
    protected $fillable =[
                'pro_name','jar','poly'
    ];
}