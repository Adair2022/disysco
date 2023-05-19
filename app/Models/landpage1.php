<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class landpage1 extends Model
{
    use HasFactory;
    protected $table='landpage1s';
    protected $fillable=[
        'nombre',
        'email',
        'telefono',
        'asunto',
    ];
}
