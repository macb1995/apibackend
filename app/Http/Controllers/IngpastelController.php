<?php

namespace App\Http\Controllers;

use App\Models\Ingpastel;
use Illuminate\Http\Request;

class IngpastelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Ingpastel::all();
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
        return $inputs;
    }

    /**
     * Display the specified resource.
     */
    public function show(Ingpastel $ingpastel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ingpastel $ingpastel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ingpastel $ingpastel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ingpastel $ingpastel)
    {
        //
    }
}
