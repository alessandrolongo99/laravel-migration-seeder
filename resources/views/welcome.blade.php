<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>

<body class="bg-dark">
    <header>
        <h1 class="text-warning text-center mt-5">LARAVEL-MIGRATION-SEEDER</h1>
    </header>

    <main class="container mt-5">
        <div class="row">
            @forelse ($trains as $train)
                <div class="col-4">
                    <div class="card text-bg-warning mb-3" style="max-width: 18rem;">
                        <div class="card-header text-capitalize fw-semibold">{{ $train->departure_station }} -
                            {{ $train->arrival_station }}</div>
                        <div class="card-body">
                            <h5 class="card-title text-capitalize">{{ $train->agency }}</h5>
                            <div class="card-text text-capitalize"><span class="fw-semibold">partenza:</span> {{ $train->departure_time }}</div>
                            <div class="card-text text-capitalize"><span class="fw-semibold">arrivo:</span> {{ $train->arrival_time }}</div>
                            <div class="card-text text-capitalize"><span class="fw-semibold">codice treno:</span> {{ $train->train_code }}</div>
                            @if (!$train->in_time)
                                <div class="card-text text-capitalize fw-semibold">in ritardo</div>
                            @endif
                        </div>
                    </div>
                </div>
            @empty
                <div>non pervenuti</div>
            @endforelse
        </div>
    </main>
</body>

</html>
