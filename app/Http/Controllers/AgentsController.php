<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

// MODELS
use App\Models\User;

class AgentsController extends Controller
{
    public function index() {
        // $agents = User::where('id_type_user', '=', 2)->get();
        return response()->json([
            'status' => 'success',
            'msg' => 'Registro creado correctamente.',
            'data' =>  User::where('id_type_user', '=', 2)->where('status', '=', 1)->get()
        ]);
    }


    public function create(Request $request){
        try {




            $agent = User::create([
                'id_type_user'      =>  $request['id_type_user'],
                'name'              =>  $request['name'],
                'surname'           =>  $request['surname'],
                'second_surname'    =>  $request['second_surname'],
                'status'            =>  $request['status'],
                'user'              =>  $request['user'],
                'email'             =>  $request['email'],
                'password'          =>  Hash::make($request['password']),
            ]);
            return response()->json([
                'status' => 'success',
                'msg' => 'Registro creado correctamente.',
                'data' => $agent
            ]);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }


    public function delete( Request $request) {
        $id = $request['id'];
        $usuario = User::find($id);
        $usuario->status = 2;


        $usuario->save();
        /*$usuario->delete();*/
        return response()->json([
            'status' => 'success',
            'msg' => 'Usuario eliminado correctamente.',
            'data' => $usuario
        ]);

    }
}
