<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/stely.css">
    <title>Criar Vendedor</title>
</head>
<body>
    <form class="cadastro" action="/editar_vendedor/{{$vendedor->id}}" method="post">
        @csrf
        {{method_field("PATCH")}}
        <label for="name">Nome</label>
        <input type="text" name="name" value="{{$vendedor->name}}">

        <label for="matricula">Matricula</label>
        <input type="text" name="matricula" value="{{$vendedor->matricula}}">

        <label for="comissao">Comissão</label>
        <input type="float" name="comissao" value="{{$vendedor->comissao}}">

        <input class="button"  type="submit" value="Salvar">
    </form>
</body>
</html>