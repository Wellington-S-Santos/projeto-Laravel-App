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
    <form class="cadastro" action="/criar_produto" method= "post">
        @csrf
        <label for="name">Nome</label>
        <input type="text" name="name">

        <label for="descricao">Descrição</label>
        <input type="text" name="descricao">

        <label for="preco">Preço</label>
        <input type="float" name="preco">

        <input class="button"  type="submit" value="Salvar">

    </form>
    
</body>
</html>