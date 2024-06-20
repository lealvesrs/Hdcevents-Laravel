
    @extends("layouts.main")
    @section('title', 'HDC Events')

    @section('content')
    <h1>Hello World</h1>
    <img src="/img/banner.jpg">
    {{ $mensagem}}

    {{--isso é um comentario--}}

    <h1>For</h1>
    @for($i=0;$i<count($array);$i++)
     <p>{{$array[$i]}}</p>
    @endfor

    <h1>Foreach</h1>
    @foreach($array as $arr)
     <p>{{$loop->index}} - {{$arr}}</p>
    @endforeach

    @endsection
