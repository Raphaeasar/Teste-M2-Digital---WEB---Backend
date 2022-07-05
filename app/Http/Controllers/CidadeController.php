<?php

namespace App\Http\Controllers;

use App\Models\Cidade as Cidade;
use App\Http\Resources\Cidade as CidadeResource;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
    public function index()
    {
        $cidades = Cidade::paginate(15);
        return CidadeResource::collection($cidades);
    }

    public function show($id)
    {
        $cidades = Cidade::findOrFail($id);
        return new CidadeResource($cidades);
    }

    public function store(Request $request)
    {
        $cidades = new Cidade;
        $cidades->nome = $request->input('nome');
    
        if ($cidades->save()) {
            return new CidadeResource($cidades);
        }
    }

    public function update(Request $request)
    {
        $cidades = Cidade::findOrFail($request->id);
        $cidades->nome = $request->input('nome');
       
        if ($cidades->save()) {
            return new CidadeResource($cidades);
        }
    }

    public function destroy($id)
    {
        $cidades = Cidade::findOrFail($id);
        if ($cidades->delete()) {
            return new CidadeResource($cidades);
        }
    }
}
