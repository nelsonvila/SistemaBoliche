<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all();

        return view('producto.productos')
            ->with('productos', $productos);


    }

    public function crearProducto(Request $request)
    {
        $producto = new Producto();
        $producto->codigo = $request->get('codigo');
        $producto->descripcion = $request->get('descripcion');
        $producto->precio = $request->get('descripcion');
        $producto->created_at = now();
        $producto->updated_at = now();
        $producto->save();

        return back();
    }
}
