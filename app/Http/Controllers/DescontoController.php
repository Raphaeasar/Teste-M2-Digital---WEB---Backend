<?php

namespace App\Http\Controllers;

use App\Models\Desconto as Desconto;
use App\Http\Resources\Desconto as DescontoResource;
use Illuminate\Http\Request;

class DescontoController extends Controller
{
    public function index()
    {
        $desconto = Desconto::paginate(15);
        return DescontoResource::collection($desconto);
    }

    public function show($id)
    {
        $desconto = Desconto::findOrFail($id);
        return new DescontoResource($desconto);
    }

    public function store(Request $request)
    {
        $desconto = new Desconto;
        $desconto->nome = $request->input('nome');
        $desconto->campanha_id = $request->input('campanha_id');

        if ($desconto->save()) {
            return new DescontoResource($desconto);
        }
    }

    public function update(Request $request)
    {
        $desconto = Desconto::findOrFail($request->id);
        $desconto->nome = $request->input('nome');
        $desconto->campanha_id = $request->input('campanha_id');

        if ($desconto->save()) {
            return new DescontoResource($desconto);
        }
    }

    public function destroy($id)
    {
        $desconto = Desconto::findOrFail($id);
        if ($desconto->delete()) {
            return new DescontoResource($desconto);
        }
    }
}
