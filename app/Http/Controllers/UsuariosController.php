<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index()
    {
        $usuario = Usuario::all();

        return view('usuarios.index', compact('usuario'));
    }

    public function create()
    {
        return view('usuarios.create');
    }

    public function store(Request $requisicao)
    {
        $usuario = new Usuario();

        $usuario->nome = $requisicao->nome;
        $usuario->email = $requisicao->email;
        $usuario->endereco = $requisicao->endereco;
        $usuario->telefone = $requisicao->telefone;
        $usuario->senha = $requisicao->senha;

        $usuario->save();

        return redirect()->route('usuarios.show', $usuario->id);
    }

    public function show(Usuario $usuario)
    {
        return view('usuarios.view', compact('usuario'));
    }

    public function edit(Usuario $usuario)
    {
        return view('usuarios.edit', compact('usuario'));
    }

    public function update(Request $requisicao, Usuario $usuario)
    {
        $usuario->update($requisicao->all());

        return redirect()->route('usuarios.show', $usuario->id);
    }

    public function destroy(Usuario $usuario)
    {
        $usuario->delete();

        return redirect()->route('usuarios.index');
    }
}
