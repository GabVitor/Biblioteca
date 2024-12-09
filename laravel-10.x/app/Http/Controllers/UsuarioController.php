<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller{
    public function index(){
        $usuarios = Usuario::all();
        return view('usuarios.index', compact('usuarios'));
    }

    public function create(){
        return view('usuarios.create');
    }

    public function store(Request $request){
        Usuario::create($request-> all());
        return redirect('/usuarios');
    }
}

?>