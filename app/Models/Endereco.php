<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{

    public $table = 'enderecos';

    protected $fillable = [
        'endereco'
    ];

    protected $hidden = [
        'user_id',
    ];

    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class);
    }

    
    
}
