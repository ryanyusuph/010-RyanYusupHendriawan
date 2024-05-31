<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userna extends Model
{
    use HasFactory;
    protected $table = 'user'; 
   
    protected $fillable = [
        'nama_user',
        'username',
        'password', 
    ];

}
