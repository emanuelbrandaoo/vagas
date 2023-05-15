<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function index() {

        $users = User::all();

        return view('user.dashboard', [
            'users' => $users
        ]);
    }

    public function create() {

        $users = User::all();

        return view('user.create', [
            'users' => $users
        ]);
    }

    public function store(Request $request) {

        $user = new User;

        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|confirmed|min:8',
            'password_confirmation' => 'required|min:8',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = password_hash($request->password, PASSWORD_DEFAULT);

        $user->save();

        return redirect('user/dashboard')->with('msg', 'Usuário cadastrado com sucesso.');
    }

    public function show($id) {

        $user = User::findOrFail($id);

        return view('user.show', [
            'user' => $user
        ]);

    }

    public function destroy($id) {

        User::findOrFail($id)->delete();

        return redirect('user/dashboard')->with('msg', 'Usuário deletado com sucesso.');
    }

    public function clearTable() {

        User::where('id', '!=', auth()->id())->delete();

        return redirect('user/dashboard')->with('msg', 'Usuários deletados com sucesso.');
    }

    public function edit($id) {

        $user = User::findOrFail($id);

        return view('user.edit', [
            'user' => $user
        ]);
    }

    public function update(Request $request) {

        User::findOrFail($request->id)->update($request->all());

        return redirect('user/dashboard')->with('msg', 'Usuário atualizado com sucesso.');
    }
}
