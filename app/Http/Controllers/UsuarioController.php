<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(Request $r) {
        $usuarios = User::all();
        return $usuarios;
    }

    public function unicoUsuario (Request $r) {
        $usuarios = User::find($r->id);
        $usuario['enderecos'] = $usuarios->enderecosMany;
        return $usuarios;
    }

    public function novoUsuario(Request $r) {
        $novo_usuario = $r->only(['name', 'email','password']);
        
        $usuario = User::create($novo_usuario);

        return $usuario;
    }
}
