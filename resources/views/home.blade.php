@extends('layouts.app')

@section('content')
<body>
    <div class="container">
        <div class="row g-4">
            @foreach ($movies as $movie)
                <div class="col-4">
                    <div class="card h-100">
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
@endsection