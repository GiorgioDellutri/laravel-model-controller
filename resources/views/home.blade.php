<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <main class="bg-light">
        <div class="container-fluid">
            <div class="row p-3">
                <div class="col-12">
                    <h1>Lista film:</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @forelse ($movies as $movie)
                    <div class="col-4 p-3">
                        <div class="card p-4">
                            <h3>
                                {{ $movie->title }}
                            </h3>
                            <h5> Original title: {{ $movie->original_title }}</h5>
                            <h6>Nationality: {{ $movie->nationality }}</h6>
                            <h6>Release date: {{ $movie->date }}</h6>
                            <h6>Vote: {{ $movie->vote }}</h6>
                        </div>
                    </div>
                @empty
                    <p>Non ci sono film da mostrare</p>
                @endforelse
            </div>
        </div>
    </main>

</body>

</html>
