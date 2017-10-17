<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mensaje;

class nuevoMensajeController extends Controller
{
    public function insertarNuevoMensaje(){
        $this->validate(request(),['nombre'=>"bail|required|string|max:20",
            'email'=>"bail|required|string|max:30",
            'mensaje'=>"bail|required|string|max:200",]);

        Mensaje::create(request()->all());

        return view('mensajeCorrecto');
    }
}
