<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $table =[
        'denumire',
        'data',
        'descriere',
        'locatie',
        'logo',
        'cover',
        'editie',
        'poarta_acces'
    ];
}
