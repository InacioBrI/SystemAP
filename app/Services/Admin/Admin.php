<?php

namespace App\Services\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Admin
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function createUser()
    {
        return view('admin.users.create');
    }

    public function storeUser(Request $request)
    {
        $data = $request->validate([
            'name'  => ['required', 'string'],
            'email' => ['required', 'email', 'unique:users,email'],
            'role'  => ['required', 'in:admin,operador'],
        ]);

        User::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'role'     => $data['role'],
            'password' => Hash::make(str()->random(12)), // senha temporária
        ]);

        return redirect()->back()->with('success', 'Usuário criado com sucesso.');
    }
}
