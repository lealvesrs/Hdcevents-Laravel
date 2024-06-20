
@extends("layouts.main")
    @section('title', 'Produto')

    @section('content')
    @if($id !=null)
    <h1>Produto exibido, id: {{$id}}</h1>
    @else
    <h1>Exibindo todos os produtos</h1>
    @endif
    

    @endsection
