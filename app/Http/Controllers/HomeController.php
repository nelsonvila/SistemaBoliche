<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $productos = Producto::all();
        $mensaje= 'Este es un mensaje';
//return $productos;
        return view('productos')
            ->with('productos', $productos)
            ->with('pepito', $mensaje);
    }
}
