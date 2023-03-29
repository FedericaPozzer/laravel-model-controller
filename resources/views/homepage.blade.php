<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Model e Controller</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        @if(isset($movies))
        <h1 class="mt-3">MOVIES:</h1>

        <div class="row row-cols-5">
            @foreach($movies as $movie)
            <div class="col mt-3">

                <div class="card text-bg-secondary mb-3 h-100">
                    <h5 class="card-header"> {{ $movie->title }} </h5>
                    <div class="card-body">
                        <p class="card-title">Titolo originale: {{ $movie->original_title }} </p>
                        <p class="card-text">Nazionalità: {{ $movie->nationality }} <br>Data d'uscita: {{ $movie->date }} </p>
                        <p>Voto medio: {{ $movie->vote }} </p>
                    </div>
                </div>

            </div>
            @endforeach
        </div>
        @else <div class="mt-5">nessun film trovato :( </div> 
        @endif
    </div>
</body>
</html>