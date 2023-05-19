<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Landpage2 extends Model
{
    use HasFactory;
    protected $table='landpage2s';
    protected $fillable=[
        'nombre',
        'email',
        'telefono',
        'asunto',
    ];
}
