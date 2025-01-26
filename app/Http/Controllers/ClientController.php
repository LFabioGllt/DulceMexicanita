<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.   -- READ --
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.   -- CREATE (Crear recurso nuevo) --
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.   -- CREATE (Almacenar) --
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.  -- READ (Individual) --
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.    -- UPDATE (Obtener datos) --
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.    -- UPDATE (Actualizar) --
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.  -- DELETE (directo) --
     */
    public function destroy(Client $client)
    {
        //
    }
}
