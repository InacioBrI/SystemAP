<?php

namespace App\Services\Operators;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Operators
{
    public function index()
    {
        $operators = User::where('role', 'operator')->get();

        return view('operators.index', compact('operators'));
    }

    public function create()
    {
        return view('operators.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
        ]);

        $temporaryPassword = Str::random(10);

        User::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => Hash::make($temporaryPassword),
            'role'     => 'operator',
        ]);

        // Aqui futuramente você pode disparar e-mail de reset

        return redirect()
            ->route('operators.index')
            ->with('success', 'Operador criado com sucesso.');
    }

    public function edit(int $id)
    {
        $operator = User::findOrFail($id);

        return view('operators.edit', compact('operator'));
    }

    public function update(Request $request, int $id)
    {
        $operator = User::findOrFail($id);

        $data = $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $operator->id,
        ]);

        $operator->update($data);

        return redirect()
            ->route('operators.index')
            ->with('success', 'Operador atualizado.');
    }

    public function destroy(int $id)
    {
        User::findOrFail($id)->delete();

        return redirect()
            ->route('operators.index')
            ->with('success', 'Operador removido.');
    }
}
