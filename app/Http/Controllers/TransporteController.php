<?php

namespace App\Http\Controllers;

use App\Models\Transporte;
use Illuminate\Http\Request;

class TransporteController extends Controller
{
   
    public function index1()
    {
        $datos = Transporte::all();
        return view('inicio', compact('datos'));


    }

 
    public function create1()
    {
        //
        return view ('agg');
    }

    public function store1(Request $request)
    {
        //
    }

    public function show1(Transporte $transporte)
    {
        //
    }

    public function edit1(Transporte $transporte)
    {
        //
        return view ('Aqui estara el coso editable');
    }

    public function update1(Request $request, Transporte $transporte)
    {
        //
    }

    public function destroy1(Transporte $transporte)
    {
        //
    }
}
