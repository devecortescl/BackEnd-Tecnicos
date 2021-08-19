<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Report;

class ReportController extends Controller
{
    // Funcion para crear un Report 
    public function insert(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'status' => 'required',
            'hardware_id' => 'required'
        ]);

        $Report = Report::create($request->all());

       return response($Report, 200);
    }

    // Funcion para traer todos los registros 
    public function index(){
        return response()->json(Report::all(), 200);
    }

    // Funcion para traer registro especifico
    public function show($id)
    {
        $Report = Report::find($id);
        if(is_null($Report)){
            return response()->json(['Mensaje'=>'No encontrado'],404);
        }
        return response()->json($Report::find($id),200);
    }

    // funcion para actualizar los datos
    public function update(Request $request, $id)
    {
        $Report = Report::find($id);
        if(is_null($Report)){
            return response()->json(['Mensaje'=>'No encontrado'],404);
        }
        $Report->update($request->all());

        return response($Report, 200);
    }


    //funcion para eliminar los registros
    public function delete(Request $request, $id)
    {
        $Report = Report::find($id);
        if(is_null($Report)){
            return response()->json(['Mensaje'=>'No encontrado'],404);
        }
        $Report -> delete();
        return response()->json(['Mensaje'=>'Eliminado Correctamente'],200);
    }

}
