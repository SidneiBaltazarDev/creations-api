<?php

namespace App\Models;

use App\Models\User;
use App\Models\Endereco;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cobranca extends Model
{

    public $table = 'invoice';

    protected $fillable = [
        'valor',
        'endereco_id',
        'usuario_id'
    ];

    use HasFactory;

    public function enderecos() {
        return $this->hasOne(Endereco::class, 'id','endereco_id');
    }

    public function user() {
        return $this->hasOne(User::class, 'id','usuario_id');
    }
}
