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
}