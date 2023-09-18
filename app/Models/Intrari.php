<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intrari extends Model
{
    use HasFactory;

    protected $table=[
        'id_user',
        'id_event',
        'id_gate',
        'data'
    ];
}
