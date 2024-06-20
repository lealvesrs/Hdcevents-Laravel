@extends("layouts.main")
@section('title', 'Contato')

@section('content')
<h1>Página de contato</h1>
@if($busca!='')
    <p>o usuário está buscando por {{$busca}}</p>
@endif


@endsection