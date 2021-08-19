<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
     // Funcion para crear un User 
     public function insert(Request $request)
     {
         $request->validate([
            'name'=> 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed'
         ]);
 
         $User =User::create($request->all());
 
        return response($User, 200);
     }
 
     // Funcion para traer todos los registros 
     public function index(){
         return response()->json(User::all(), 200);
     }
 
     // Funcion para traer registro especifico
     public function show($id)
     {
         $User = User::find($id);
         if(is_null($User)){
             return response()->json(['Mensaje'=>'No encontrado'],404);
         }
         return response()->json($User::find($id),200);
     }
 
     // funcion para actualizar los datos
     public function update(Request $request, $id)
     {
         $User = User::find($id);
         if(is_null($User)){
             return response()->json(['Mensaje'=>'No encontrado'],404);
         }
         $User->update($request->all());
 
         return response($User, 200);
     }
 
 
     //funcion para eliminar los registros
     public function delete(Request $request, $id)
     {
         $User = User::find($id);
         if(is_null($User)){
             return response()->json(['Mensaje'=>'No encontrado'],404);
         }
         $User -> delete();
         return response()->json(['Mensaje'=>'Eliminado Correctamente'],200);
     }
 
}
