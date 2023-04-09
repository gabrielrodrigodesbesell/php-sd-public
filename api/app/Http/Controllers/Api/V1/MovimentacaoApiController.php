<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMovimentacaoRequest;
use App\Http\Requests\UpdateMovimentacaoRequest;
use App\Http\Resources\MovimentacaoResource;
use App\Models\Movimentacao;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MovimentacaoApiController extends Controller
{
    
    public function store(StoreMovimentacaoRequest $request)
    {
        $movimentacao = Movimentacao::create($request->all());
        return (new MovimentacaoResource($movimentacao))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }
  
}
