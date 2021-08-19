<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Hardware;

class HardwareController extends Controller
{
    
    // Funcion para crear un Hardware 
    public function insert(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'brand' => 'required',
            'model' => 'required',
            'serial' => 'required|max:255',
            'entry' =>  'required|date',
            'egress' => 'date',
            'status' => 'required',
            'client_id' => 'required',
        ]);

        $Hardware = Hardware::create($request->all());

       return response($Hardware, 200);
    }

    // Funcion para traer todos los registros 
    public function index(){
        return response()->json(Hardware::all(), 200);
    }

    // Funcion para traer registro especifico
    public function show($id)
    {
        $Hardware = Hardware::find($id);
        if(is_null($Hardware)){
            return response()->json(['Mensaje'=>'No encontrado'],404);
        }
        return response()->json($Hardware::find($id),200);
    }

    // funcion para actualizar los datos
    public function update(Request $request, $id)
    {
        $Hardware = Hardware::find($id);
        if(is_null($Hardware)){
            return response()->json(['Mensaje'=>'No encontrado'],404);
        }
        $Hardware->update($request->all());

        return response($Hardware, 200);
    }


    //funcion para eliminar los registros
    public function delete(Request $request, $id)
    {
        $Hardware = Hardware::find($id);
        if(is_null($Hardware)){
            return response()->json(['Mensaje'=>'No encontrado'],404);
        }
        $Hardware -> delete();
        return response()->json(['Mensaje'=>'Eliminado Correctamente'],200);
    }
}
