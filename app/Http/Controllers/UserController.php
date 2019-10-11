<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('user.index.blade.php', ['users' => $users]);
    }

    public function show(User $user)
    {
        return view('user.show.blade.php', ['user' => $user]);
    }

    public function store(Request $request)
    {
        //there is a place for validation
        $user = new User();
        $user->name = $request->get('name');
        $user->age = $request->get('age');

        $user->save();
    }
}
