<?php

namespace App\Http\Controllers;

use App\Models\Pastel;
use Illuminate\Http\Request;

class PastelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Pastel::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $inputs = $request->input();
        $e = Pastel::create($inputs);
        return response()->json([
            'data' => $e,
            'message' => 'Guardado exitosamente.',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $e = Pastel::find($id);
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
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $e = Pastel::find($id);
        if(isset($e)){
            $e->nombre = $request->nombre;
            $e->descripcion = $request->descripcion;
            $e->creador = $request->creador;
            $e->f_creado = $request->f_creado;
            $e->f_vencimiento = $request->f_vencimiento;
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
    public function destroy($id)
    {
        //
        $e = Pastel::find($id);
        if(isset($e)){
            $res=Pastel::destroy($id);
            if($res){
                return response()->json([
                    'data' => $e,
                    'message' => 'Eliminado exitosamente.',
                ]);
            }else{
                return response()->json([
                    'data' => $e,
                    'message' => 'No existe dato solicitado',
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
