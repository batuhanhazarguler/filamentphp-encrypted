<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crypt extends Model
{
    use HasFactory;


    protected $casts = [
        'name' => 'encrypted',
        'text' => 'encrypted',
        'email' => 'encrypted',
    ];

    protected $fillable = [
        'name',
        'text',
        'email',
    ];

}
