<html>
<body>
<h1>Let's read some articles!</h1>

{{--<ul>
    @foreach($articles as $articlee)
            <li>{{$articlee}}</li>
        @endforeach

        @if(isset($article))
            <p>{{$article}}</p>
        @endif
</ul>--}}

{{--<p>{{$article}}</p>--}}

<table class="table">
    <thead>
    <tr>
        <th>ID</th>
        <th>Título</th>
        <th>subtitulo</th>
        <th>cuerpo</th>
        <th>Detalle</th>
        <th>Borrar</th>
    </tr>
    </thead>
    <tbody>
    @foreach($articulos as $articulo)
        <tr>
            <td>{{$articulo->id }}</td>
            <td>{{$articulo->titulo }}</td>
            <td> {{$articulo->subtitulo  }}</td>
            <td>{{$articulo->cuerpo  }}</td>
            <td><a href="/article/{{$articulo->id }}">Detalle</a></td>
            <td><a href="/article/{{$articulo->id }}/delete">Borrar</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
