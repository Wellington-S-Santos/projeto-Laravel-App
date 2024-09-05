@foreach ($produtos as $produto)
  
  <div>
    <tr>{{$produto->name}} </tr>
    <tr>{{$produto->descricao}}</tr>
    <tr>{{$produto->preco}}</tr>
    
   
  </div>
@endforeach