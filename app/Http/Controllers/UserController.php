<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $r) {
        $users = User::all();
        return $users;
    }

    public function findOne(Request $r) {
        $users = User::find($r->id);
        if($r->id != $r) {
            echo 'O Usuario nãoi existe';
        } 
       
        return $users;
    }
}
