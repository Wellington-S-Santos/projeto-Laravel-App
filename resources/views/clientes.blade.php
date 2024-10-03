
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/stely1.css">
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
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($clientes as $cliente)
      <tr>
        <td>{{$cliente->name}}</td>
        <td>{{$cliente->cpf}}</td>
        <td>{{$cliente->email}}</td>
        <td>
          <form method="POST" action="/delete_cliente/{{$cliente->id}}">
            @csrf
            {{method_field("DELETE")}}
            <input type="submit" value="delete" class="button">
          </form>
        </td>
        
      </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>

