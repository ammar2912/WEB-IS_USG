<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sheep extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_domba', 
        'keturunan', 
        'tanggal_lahir'
    ];
}
