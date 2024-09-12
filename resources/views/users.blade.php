
<table>
  <thead>
    <h1>Usuários</h1>
  </thead>
  <tbody>
@foreach ($users as $user)
  
  <div>
    
    <tr>{{$user->name}}</tr> 
    <tr>{{$user->cpf}}</tr>
    <tr>{{$user->email}}</tr>
    
   
  </div>
@endforeach
  </tbody>
</table>