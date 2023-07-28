<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return User::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $inputs = $request->input();
        $inputs["password"] = Hash::make(trim($request->password));
        $e = User::create($inputs);
        return response()->json([
            'data' => $e,
            'message' => 'Guardado exitosamente.',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $e = User::find($id);
        if(isset($e)){
            return response()->json([
                'data' => $e,
                'message' => 'Encontrado exitosamente.',
            ]);
        }else{
            return response()->json([
                'error'=> true,
                'message' => 'No existe el dato solicitado.',
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $e = User::find($id);
        if(isset($e)){
            $e->first_name = $request->first_name;
            $e->last_name = $request->last_name;
            $e->email = $request->email;
            $e->password = Hash::make($request->password);
            if ($e->save()){
                return response()->json([
                    'data' => $e,
                    'message' => 'Actualizado exitosamente.',
                ]);
            }else{
                return response()->json([
                    'error' => true,
                    'message' => 'No se actualizó correctamente.',
                ]);
            }
        }else{
            return response()->json([
                'error'=> true,
                'message' => 'No existe el dato solicitado.',
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $e = User::find($id);
        if(isset($e)){
            $res=User::destroy($id);
            if($res){
                return response()->json([
                    'data' => $e,
                    'message' => 'Eliminado exitosamente.',
                ]);
            }else{
                return response()->json([
                    'data' => $e,
                    'message' => 'No existe el dato solicitado',
                ]);
            }
        }else{
            return response()->json([
                'error'=> true,
                'message' => 'No existe el dato solicitado.',
            ]);
        }
    }
}
