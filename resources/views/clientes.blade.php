
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/stely.css">
  <title>Clientes</title>
</head>
<body>
  <table >
    <thead>
    <h1>Clientes</h1>
    <tr>
        <th>Nome</th>
        <th>CPF</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($clientes as $cliente)
  
  <div >
  <tr class="Divs">
        <td>{{$cliente->name}}</td>
        <td>{{$cliente->cpf}}</td>
        <td>{{$cliente->email}}</td>
      </tr>
  </div>
@endforeach

    </tbody>
  </table>
</body>
</html>

