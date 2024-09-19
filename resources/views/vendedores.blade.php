<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="/css/stely.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vendedores</title>
</head>
<body>
<table>
    <thead>
      <h1>Vendedores</h1>
      <tr>
        <th>Nome</th>
        <th>Matrícula</th>
        <th>Comissão</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($vendedores as $vendedor)
      <tr >
        <td>{{$vendedor->name}}</td>
        <td>{{$vendedor->matricula}}</td>
        <td>{{$vendedor->comissao}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>



