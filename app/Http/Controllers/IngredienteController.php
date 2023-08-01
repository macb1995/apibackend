<?php

namespace App\Http\Controllers;

use App\Models\Ingrediente;
use Illuminate\Http\Request;

class IngredienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Ingrediente::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $inputs = $request ->input();
        $e  = Ingrediente::create($inputs);
        return response()->json([
            'data'=>$e,
            'mensaje'=>"Dato guardado exitosamente",
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $e = Ingrediente::find($id);
        if (isset($e)){
            return response()->json([
                'data' => $e,
                'mensaje' => "Dato encontrado satisfactoriamente."
            ]);
        }else{
            return response()->json([
                'error' => true,
                'mensaje' => "Dato no encontrado."
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $e = Ingrediente::find($id);
        if (isset($e)){
            $e->nombre = $request->nombre;
            $e->descripcion= $request->descripcion;
            $e->f_ingreso = $request-> f_ingreso;
            $e->f_vencimiento = $request-> f_vencimiento;
            if ($e->save()){
                return response()->json([
                    'data' => $e,
                    'mensaje' => "Dato actualizado correctamente",
                ]);
            }else{
                return response()->json([
                    'error'=>true,
                    'mensaje'=>"Dato no actualizado correctamente",
                ]);
            }
        }else{
            return response()->json([
                'error' => true,
                'mensaje' => "No existe el dato solicitado",
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $e = Ingrediente::find($id);
        if(isset($e)){
            $res = Ingrediente::destroy($id);
            if ($res){
                return response()->json([
                    'data' => $e,
                    'mensaje' => "Dato eliminado satisfactoriamente"
                ]);
            }else{
                return response()->json([
                    'data' => $e,
                    'mensaje' => "Dato no eliminado",
                ]);
            }
        }else{
            return response()->json([
                'error' => true,
                'mensaje' => "Dato inexistente"
            ]);
        }
    }
}
