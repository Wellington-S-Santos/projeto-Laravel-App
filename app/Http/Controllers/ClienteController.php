<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function formCriarCliente(){
        return view("cadastro_cliente");

    }
    public function criarCliente(Request $request) {
        $cliente = new Cliente;
        $cliente->name = $request->name;
        $cliente->cpf = $request->cpf;
        $cliente->email = $request->email;

        $cliente->save();
        return redirect('/listar_cliente');
    }

    public function listarCliente() {
        $clientes = Cliente::all();

        return view("clientes", ["clientes"=> $clientes]);
    }
    public function deletar($id) {
        $cliente = new Cliente;
        $cliente->find($id)->delete();
        return redirect("/listar_cliente");
    }
    public function formEditarCliente($id){
        $cliente = Cliente::find($id);
       
        return view("editar_cliente",["cliente"=>$cliente]);
    }
    public function editar(Request $request){
       Cliente::where('id',$request->id)->update([
        'name'=> $request->name,
       'cpf'=> $request->cpf,
       'email' => $request->email]);
       return redirect("/listar_cliente");
    }

}
