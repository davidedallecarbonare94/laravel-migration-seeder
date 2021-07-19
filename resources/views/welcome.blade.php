<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- Styles -->

</head>

<body>
    <div class="container">
        <div class="journeys">
            @foreach($journeys as $journey)
            <div class="card">
                <div class="upper">
                    <h3>{{$journey->zona}}</h3>
                    <h5><strong>La tua prossima meta</strong></h5>
                </div>
                <h5><strong>Notti comprese: </strong></h5>
                <p>{{$journey->giorni}}</p>
                <h5><strong>A partire da: </strong></h5>
                <p>{{$journey->prezzo}} €</p>
                <h5><strong>La struttura per te: </strong></h5>
                <p>{{$journey->pernottamento}}</p>
                <h5><strong>Cosa ti offriamo: </strong></h5>
                <p>{{$journey->tipologia}}</p>
                <h5><strong>Volo in partenza da: </strong></h5>
                <p>{{$journey->volo}}</p>
                <h5><strong>Cosa comprende il prezzo: </strong></h5>
                <p>{{$journey->pasti}}</p>
            </div>

            @endforeach
        </div>
    </div>
</body>

</html>