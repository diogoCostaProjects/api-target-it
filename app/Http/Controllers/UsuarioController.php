<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Services\UsuarioService;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function __construct(
        protected UsuarioService $service // faz a injeção de dependência do service
    ) {}
    
    public function index(Request $request)
    {
        $usuarios = $this->service->getAll($request->filter);
        return response()->json($usuarios);
    }

    public function show(string $id)
    {
        if (!$usuarios = $this->service->findOne($id))
        {
            $error = [
                'success' => false, 
                'message' => 'Usuário não encontrado'
            ];
            return response()->json($error);
        }
        else {
            return response()->json($usuarios);
        }
    }

    public function destroy(string $id)
    {
        $this->service->delete($id);
        
        $success = [
            'success' => true, 
            'message' => 'Usuário removido com sucesso'
        ];
        
        return response()->json($success);
    }

    public function edit(string $id)
    {
        
    }
}
