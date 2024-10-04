<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use Illuminate\Http\Request;

class EnderecosController extends Controller
{
    public function index (Request $r) {
        $enderecos = Endereco::all();

        return $enderecos;
    }

    public function unicoEndereco (Request $r) {
        $endereco = Endereco::find($r->id);
        $endereco['user'] = $endereco->user;
        return $endereco;
    }

    public function novoEndereco(Request $r) {
        $novo_endereco = $r->only(['endereco']);
        
        $endereco = Endereco::create($novo_endereco);

        return $endereco;
    }


}
