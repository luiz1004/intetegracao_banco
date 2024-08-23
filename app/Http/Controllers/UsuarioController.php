<?php

namespace App\Http\Controllers;

use App\Service\UsuarioService;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{   
    protected $usuarioService;

    public function __construct(UsuarioService $novoUsuarioService)
    {
      $this->usuarioService = $novoUsuarioService;
    }
    public function store(Request $request){
$user = $this->usuarioService->create($request->All());
    }
}   
