<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests\validateRequest;

class datosController extends Controller
{
    public function mostrar(){
        return view ('datos');
    }

    public function store(validateRequest $request){
        return $request->all();
    }
}
