<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>home</title>
        <!-- funzione che specifica che il vpercorso parte dalla cartella public -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <header>
            <span>{{ $nome_negozio }}</span>
            <a href="{{ route ('contacts') }}">Contatti</a>
            <a href="{{ route ('do') }}">Cosa facciamo</a>
            <a href="{{ route ('who') }}">Chi siamo</a>
        </header>
        <div class="container">
            <span>Negozio di</span>
            <span>{{$descrizione}}</span>
            <p>Vasto assortimento di:</p>
            @foreach($lista_accessori as $accessorio)
            <p>{{$accessorio}}</p>
            @endforeach
        </div>
    </body>
</html>
