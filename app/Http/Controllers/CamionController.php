<?php

namespace App\Http\Controllers;

use App\Models\camion;
use Illuminate\Http\Request;

class CamionController extends Controller
{

    public function index2()
    {
        //pag. inicio
        return view('inicio');
    }


    public function create()
    {
        //Formulario
        return view ('Aqui estara el formulario para agregar Camion');
    }

    public function store(Request $request)
    {
        //guardar datos BD
    }

    public function show(camion $camion)
    {
        //Mostrar registro de la DB
    }

    public function edit(camion $camion)
    {
        //obtener datos para editar y lo coloca en formulario
        return view ('Aqui estara el coso editable');
    }


    public function update(Request $request, camion $camion)
    {
        //actualiza la BD
    }

    public function destroy(camion $camion)
    {
        //Elimina reg en la BD
    }
}
