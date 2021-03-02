<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\estudiantes;

class ControllerEstudiantes extends Controller
{

    public function mostrar()
    {
        return view ('AgregarEstudiantes');
    }

    public function store(Request $request)
    {
        $estudiantes=new estudiantes();
        $estudiantes->Matricula=$request->Matricula;
        $estudiantes->Nombre=$request->Nombre;
        $estudiantes->Direccion=$request->Direccion;
        $estudiantes-> save();
        return redirect('estudiantes');
        //return $request->all();
    }

}
