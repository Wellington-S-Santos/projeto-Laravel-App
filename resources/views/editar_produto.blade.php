<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/stely.css">
    <title>Cadastrar Produto</title>
</head>
<body>
<form class="cadastro" action="/editar_produto/{{$produto->id}}" method="post">
        @csrf
        {{method_field("PATCH")}}
        <label for="name">Nome</label>
        <input type="text" name="name" value="{{$produto->name}}">

        <label for="descricao">Descrição</label>
        <input type="text" name="descricao" value="{{$produto->descricao}}">

        <label for="preco">Preço</label>
        <input type="float" name="preco" value="{{$produto->preco}}">

        <input class="button"  type="submit" value="Salvar">

    </form>
    
</body>
</html>