
<table>
  <thead>
    <h1>Usuários</h1>
  </thead>
  <tbody>
  <tr><b>Nome</b></tr>
  <tr><b>CPF</b></tr>
  <tr><b>Email</b></tr>
@foreach ($users as $user)
  
  <div>
    <tr>{{$user->name}} </tr>
    <tr>{{$user->cpf}}</tr>
    <tr>{{$user->email}}</tr>
    
   
  </div>
@endforeach
  </tbody>
</table>