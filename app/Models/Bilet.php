<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bilet extends Model
{
    use HasFactory;

    protected $table ='bilet';

    protected $fillable =[
        'id_user',
        'id_eveniment',
        'data_generare',
        'lista_de_intrari'
    ];
}
