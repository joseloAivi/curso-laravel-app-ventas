<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; //
use Illuminate\Support\Facades\Redis;

class ProductoController extends Controller
{
    public function listar()
    {
        return "Lista de Productos";
    }

    public function nuevo()
    {
        return view("admin.producto.crear");
    }

    public function guardar(Request $request)
    {
        return $request;
    }

    public function mostrar($id)
    {
        return "Mostrando : ".$id;
    }

    public function editar($id)
    {
        return view('admin.producto.editar');
    }

    public function modificar(Request $request,$id)
    {
        return $request;
    }

    public function eliminar($id)
    {
        return "Eliminando ...".$id;
    }

    
}
