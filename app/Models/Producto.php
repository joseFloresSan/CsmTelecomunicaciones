<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Producto extends Model
{
    use HasFactory;

    protected $table = "producto";
    protected $primaryKey = "id_producto";
    protected $fillable = [
        'codigo',
        'nombre',
        'costoPorOrden',
        'costoDeMantenimiento',
        'unidadesAnuales',
        'unidadesMensuales',
        'stockTeorico',
        'stockReal',
        'precio',
    ];


    
}
