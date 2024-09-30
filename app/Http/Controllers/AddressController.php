<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index(Request $r) {
        $adresses = Address::all();
        return $adresses;
    }

    public function findOne(Request $r) {
        $adress = Address::find($r->id);
        if($r != $r->id) {
            echo "O endereço não existe!";
        }
        return $adress;
    }
}
