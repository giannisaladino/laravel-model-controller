<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    @vite('resources/js/app.js')
</head>
<body>
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie )
            <div class="col-4">
                <div class="card">
                        <div class="card-body">
                            <h3>Titolo: {{ $movie->title }} </h3>
                            <h4>Titolo originale: {{ $movie->original_title }} </h4>
                            <h5>Voto: {{ $movie->vote }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>