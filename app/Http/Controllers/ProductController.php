<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function formCriarProduto(){
        return view("cadastro_produto");
    }
    public function criarProduto(Request $request){
        $produto = new Produto;
        $produto->name = $request->name;
        $produto->descricao = $request->descricao;
        $produto->preco = $request->preco;

        $produto-> save();
        return redirect("/listar_produto");
        
    //
}
    public function listarProduto(){
        $produtos = Produto :: all();
        return view("produtos",["produtos"=> $produtos]);

    }
    public function deletar ($id){
        $produto = new Produto;
        $produto->find($id)->delete();
        return redirect("/listar_produto");
    }
    public function formEditarProduto($id){
        $produto = Produto::find($id);

        return view("editar_produto",["produto"=> $produto]);
    }

    public function editar(Request $request){
        Produto::where("id", $request->id)->update([
            "name"=> $request->name,
            "preco"=> $request->preco,
            "descricao"=> $request->descricao]);

            return redirect("/listar_produto");

    }
}