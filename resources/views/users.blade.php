
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/stely1.css">
  <title>Usuários</title>
</head>
<body>
@if ($users->isEmpty())
        <h1>Lista vazia</h1>
        <a href="/cadastro_usuario" class="aButtoni">Cadastrar Usuário</a>


      @else
<table>
    <thead>
      <h1>Usuários</h1>
      <tr>
        <th>Nome</th>
        <th>CPF</th>
        <th>Email</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
    
      @foreach ($users as $user)
      <tr>
        <td>{{$user->name}}</td>
        <td>{{$user->cpf}}</td>
        <td>{{$user->email}}</td>
        
        <td>
          <form method="POST" action="/delete_usuario/{{$user->id}}">
            @csrf
            {{method_field("DELETE")}}
            <input type="submit" value="delete" class="button">
          </form>

          <a href="/editar_usuario/{{$user->id}}" class="aButton">Editar</a>
        </td>
      </tr>
      @endforeach
      @endif

    </tbody>
  </table>
</body>
</html>
