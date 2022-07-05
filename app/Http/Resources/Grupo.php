<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Grupo extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nome' => $this->nome,
            'campanha_id' => $this->campanha_id,
            'cidade_id' => $this->cidade_id
        ];
    }
}
