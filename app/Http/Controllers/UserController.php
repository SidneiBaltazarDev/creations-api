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
        return $users->address;
    }

    public function inserUser(Request $r) {
        $new_user = $r->only(['name', 'email','password', 'address_id	']);

        $user = User::create($new_user);

        return $user;

     
    }

}
