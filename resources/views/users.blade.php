
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/stely.css">
  <title>Usuários</title>
</head>
<body>
<table>
    <thead>
      <h1>Usuários</h1>
      <tr>
        <th>Nome</th>
        <th>CPF</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
      <tr>
        <td>{{$user->name}}</td>
        <td>{{$user->cpf}}</td>
        <td>{{$user->email}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>
