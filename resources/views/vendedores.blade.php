<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="/css/stely1.css">
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
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($vendedores as $vendedor)
      <tr >
        <td>{{$vendedor->name}}</td>
        <td>{{$vendedor->matricula}}</td>
        <td>R$: {{$vendedor->comissao}}</td>

        <td>
          <form method="POST" action="/delete_vendedor/{{$vendedor->id}}">
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



