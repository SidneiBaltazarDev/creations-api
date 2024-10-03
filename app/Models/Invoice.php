<?php

namespace App\Models;

use App\Models\User;
use App\Models\Address;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Invoice extends Model
{
    use HasFactory;

    public $table =  'invoice';

    protected $fillable = [
        "valor", "description", "user_id", "address_id"
    ];


    public function user() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
  
    public function address() {
        return $this->hasOne(Address::class, 'id', 'adress_id');
    }

  

}
