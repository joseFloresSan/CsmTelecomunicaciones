<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Seeder;

class SeederProducto extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $producto = new Producto();

        $producto->codigo = 12341234;
        $producto->nombre = "producto_1";
        $producto->costoPorOrden = 12.7;
        $producto->costoDeMantenimiento = 4.5;
        $producto->unidadesAnuales = 1234;
        $producto->unidadesMensuales = 123;
        $producto->stock = 1232;
        $producto->precio = 43.50;

        $producto->save();

        $producto = new Producto();

        $producto->codigo = 76345234;
        $producto->nombre = "producto_2";
        $producto->costoPorOrden = 23.5;
        $producto->costoDeMantenimiento = 6.2;
        $producto->unidadesAnuales = 1234;
        $producto->unidadesMensuales = 123;
        $producto->stock = 1232;
        $producto->precio = 23.65;

        $producto->save();

        $producto = new Producto();

        $producto->codigo = 2452454;
        $producto->nombre = "producto_3";
        $producto->costoPorOrden = 345.9;
        $producto->costoDeMantenimiento = 5.12;
        $producto->unidadesAnuales = 1234;
        $producto->unidadesMensuales = 123;
        $producto->stock = 1232;
        $producto->precio = 78.88;

        $producto->save();

    }
}
