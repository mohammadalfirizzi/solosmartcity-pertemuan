<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dimensi extends Model
{
    use HasFactory;
    protected $fillable = [
        'Judul',
        'Desc',
        'subdimensi',
        'image',
    ];
}

