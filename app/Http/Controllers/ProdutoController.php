<?php

namespace App\Http\Controllers;

use App\Models\Produto as Produto;
use App\Http\Resources\Produto as ProdutoResource;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        $produto = Produto::paginate(15);
        return ProdutoResource::collection($produto);
    }

    public function show($id)
    {
        $produto = Produto::findOrFail($id);
        return new ProdutoResource($produto);
    }

    public function store(Request $request)
    {
        $produto = new Produto;
        $produto->nome = $request->input('nome');
        
        if ($produto->save()) {
            return new ProdutoResource($produto);
        }
    }

    public function update(Request $request)
    {
        $produto = Produto::findOrFail($request->id);
        $produto->nome = $request->input('nome');
        
        if ($produto->save()) {
            return new ProdutoResource($produto);
        }
    }

    public function destroy($id)
    {
        $produto = Produto::findOrFail($id);
        if ($produto->delete()) {
            return new ProdutoResource($produto);
        }
    }
}
