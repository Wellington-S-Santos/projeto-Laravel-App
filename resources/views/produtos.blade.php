
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../resources/css/stely.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Produtos</title>
</head>
<body>
  <table >
    <thead>
      <h1>Produtos</h1>
    </thead>
    <tbody>
      @foreach ($produtos as $produto)
        <div>
          <b>Nome: </b><tr>{{$produto->name}}</tr> <br>
          <b>Descrição: </b><tr>{{$produto->descricao}}</tr><br>
          <b> R$: </b><tr>{{$produto->preco}}</tr>
          <p>    </p>
   
        </div>
      @endforeach
    </tbody>
  </table>
</body>
</html>
