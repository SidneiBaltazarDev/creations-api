<?php

namespace App\Http\Controllers;

use App\Models\Cobranca;
use Illuminate\Http\Request;

class CobrancaController extends Controller
{
    public function index(Request $r) {
        $cobranca = Cobranca::all();
        return $cobranca;
    }

    public function cobrancaId(Request $r) {
        $cobranca = Cobranca::find($r->id);
        // $cobrancas = [$cobranca->enderecos, $cobranca->user];
        return $cobranca;
    }

    public function novaCobranca(Request $r) {
        $new_cobranca = $r->only([ 'valor','endereco_id','usuario_id']);

        $cobranca = Cobranca::create($new_cobranca);
        return $cobranca;
    }

}
