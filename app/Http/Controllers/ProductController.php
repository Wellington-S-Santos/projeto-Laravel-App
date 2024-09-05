<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function formCriarProduto(){
        return view("cadastro_produto");
    }
    public function criarProduto(Request $request){
        $produto = new Produto;
        $produto->id_produto = $request->id_produto;
        $produto->name = $request->name;
        $produto->descricao = $request->descricao;
        $produto->preco = $request->preco;

        $produto-> save();
        
    //
}
}