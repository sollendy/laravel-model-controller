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
    @include('partials/header')
    <div class="container">
        @foreach ($movies as $film)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h4 class="card-title">{{$film["title"]}}</h4>
              <hr>
              <h5 class="card-title">{{$film["original_title"]}}</h5>
              {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">{{$film["nationality"]}}</li>
              <li class="list-group-item">{{$film["date"]}}</li>
              <li class="list-group-item">{{$film["vote"]}}</li>
            </ul>
        </div>
        @endforeach
    </div> 
    
</body>

</html>