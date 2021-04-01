<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\estudiantes;
use Illuminate\Support\Facades\DB;

class ListaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto=trim($request->get ('texto'));
        $estudiante=DB::table ('estudiantes')
            ->select('Matricula','Nombre','Direccion', 'id')
            ->where ('matricula','like', "%$texto%")
            ->orWhere ('nombre','like', "%$texto%")
            ->orWhere ('direccion','like', "%$texto%")
            ->paginate(10);
        return view ('VistaEstudiantes', compact('estudiante'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estudiante = estudiantes::whereId($id)->firstOrFail();
        return view('EditaEstudiante', compact('estudiante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $estudiante= estudiantes::findOrFail($id);
        $estudiante->Matricula = $request->input('Matricula');
        $estudiante->Nombre =$request->input('Nombre');
        $estudiante->Direccion =$request->input('Direccion');
        $estudiante->save();
        return redirect()->route('Lista.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estudiante= estudiantes::find($id);
        //dd($estudiante);
        $estudiante->delete($id);
        return redirect()->route('Lista.index');
    }

    public function getAll(){
        $estudiante = estudiantes::all();
        return view ('grafica', compact('estudiante'));
    }

}
