<?php

namespace App\Http\Controllers;

use App\Models\Grupo as Grupo;
use App\Http\Resources\Grupo as GrupoResource;
use Illuminate\Http\Request;

class GrupoController extends Controller
{
    public function index()
    {
        $grupo = Grupo::paginate(15);
        return GrupoResource::collection($grupo);
    }

    public function show($id)
    {
        $grupo = Grupo::findOrFail($id);
        return new GrupoResource($grupo);
    }

    public function store(Request $request)
    {
        $grupo = new Grupo;
        $grupo->nome = $request->input('nome');

        if ($grupo->save()) {
            return new GrupoResource($grupo);
        }
    }

    public function update(Request $request)
    {
        $grupo = Grupo::findOrFail($request->id);
        $grupo->nome = $request->input('nome');

        if ($grupo->save()) {
            return new GrupoResource($grupo);
        }
    }

    public function destroy($id)
    {
        $grupo = Grupo::findOrFail($id);
        if ($grupo->delete()) {
            return new GrupoResource($grupo);
        }
    }
}
