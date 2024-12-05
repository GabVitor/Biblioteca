<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autores;

class AutoresController extends Controller
{
public function index()
{
    $autores = Autores::get();
       
    return view('autores.index', compact('autores'));
}





public function cadastro($id=null)
{
    $resultado = null;
    if($id){
        $resultado = Autores::find($id);
    }
        return view('autores.cadastro',compact('resultado'));
}




public function salvar(Request $request)
{
    if($request->id){
        $a = Autores::find($request->id);
    }else{
        $a = new Autores;
    }   
    $a->nome = $request->nome;
    $a->save();

   return redirect('/autores');


}



public function remover($id){

    $a = Autores::find($id);
    $a->delete();

    return redirect('/autores');
}




}
?>