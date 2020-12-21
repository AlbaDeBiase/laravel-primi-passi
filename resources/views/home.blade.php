<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>home</title>
        <!-- funzione che specifica che il vpercorso parte dalla cartella public -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <h1>Nome negozio</h1>
        <h2>{{ $nome_negozio }}</h2>
        <h2>Negozio di</h2>
        <h3>{{$descrizione}}</h3>
        <p>Vasto assortimento di:</p>
        @foreach($lista_accessori as $accessorio)
        <p>{{$accessorio}}</p>
        @endforeach
    </body>
</html>
