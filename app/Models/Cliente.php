<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';

    protected $fillable = [
        'id_usuario',
        'nombres',
        'primerApellido',
        'segundoApellido',
        'fechaNacimiento',
        'curp',
        'rfc',
        'nss'        
    ];
}
