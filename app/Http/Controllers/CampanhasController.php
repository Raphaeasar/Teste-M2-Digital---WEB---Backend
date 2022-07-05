<?php

namespace App\Http\Controllers;

use App\Models\Campanhas as Campanhas;
use App\Http\Resources\Campanhas as CampanhasResource;
use Illuminate\Http\Request;

class CampanhasController extends Controller
{
    public function index()
    {
        $campanhas = Campanhas::paginate(15);
        return CampanhasResource::collection($campanhas);
    }

    public function show($id)
    {
        $campanhas = Campanhas::findOrFail($id);
        return new CampanhasResource($campanhas);
    }

    public function store(Request $request)
    {
        $campanhas = new Campanhas;
        $campanhas->nome = $request->input('nome');

        if ($campanhas->save()) {
            return new CampanhasResource($campanhas);
        }
    }

    public function update(Request $request)
    {
        $campanhas = Campanhas::findOrFail($request->id);
        $campanhas->nome = $request->input('nome');

        if ($campanhas->save()) {
            return new CampanhasResource($campanhas);
        }
    }

    public function destroy($id)
    {
        $campanhas = Campanhas::findOrFail($id);
        if ($campanhas->delete()) {
            return new CampanhasResource($campanhas);
        }
    }
}
