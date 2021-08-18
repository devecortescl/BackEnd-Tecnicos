<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Client;

class ClientController extends Controller
{


    // Funcion para crear un client 
    public function insert(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|max:255',
            'location' => 'required'
        ]);

        $Client = Client::create($request->all());

       return response($Client, 200);
    }

    // Funcion para traer todos los registros 
    public function index(){
        return response()->json(client::all(), 200);
    }

    // Funcion para traer registro especifico
    public function show($id)
    {
        $client = Client::find($id);
        if(is_null($client)){
            return response()->json(['Mensaje'=>'No encontrado'],404);
        }
        return response()->json($client::find($id),200);
    }

    // funcion para actualizar los datos
    public function update(Request $request, $id)
    {
        $client = Client::find($id);
        if(is_null($client)){
            return response()->json(['Mensaje'=>'No encontrado'],404);
        }
        $client->update($request->all());

        return response($client, 200);
    }


    //funcion para eliminar los registros
    public function delete(Request $request, $id)
    {
        $client = Client::find($id);
        if(is_null($client)){
            return response()->json(['Mensaje'=>'No encontrado'],404);
        }
        $client -> delete();
        return response()->json(['Mensaje'=>'Eliminado Correctamente'],200);
    }

}
