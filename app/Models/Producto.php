<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'observacion',
        'precio',
        'cantidad',
        'stock',
        'imagen',
        'estado',
        'categoria_id',
        'subcategoria_id',
    ];
}
