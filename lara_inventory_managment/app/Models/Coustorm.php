<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coustorm extends Model
{
    use HasFactory;
    protected $fillable = [
        'coustomer_name','email','addres','phone','shope_name','photo','account_helder','account_number','bank_branch','city'
    ];
}