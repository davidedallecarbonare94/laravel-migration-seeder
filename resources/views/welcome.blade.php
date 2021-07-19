<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <body>
    @foreach($journeys as $journey)
        <div class="card">
            <dl>
                <dt><strong>La tua prossima meta: </strong></dt>
                <dd>{{$journey->zona}}</dd>
                <dt><strong>Notti comprese: </strong></dt>
                <dd>{{$journey->giorni}}</dd>
                <dt><strong>A partire da: </strong></dt>
                <dd>{{$journey->prezzo}}</dd>
                <dt><strong>La struttura per te: </strong></dt>
                <dd>{{$journey->pernottamento}}</dd>
                <dt><strong>Cosa ti offriamo: </strong></dt>
                <dd>{{$journey->tipologia}}</dd>
                <dt><strong>Volo in partenza da: </strong></dt>
                <dd>{{$journey->volo}}</dd>
                <dt><strong>Cosa comprende il prezzo: </strong></dt>
                <dd>{{$journey->pasti}}</dd>
            </dl>
        </div>

        @endforeach
    </body>
</html>
