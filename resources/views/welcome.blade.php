<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel model controller</title>
    @vite('resources/js/app.js')
</head>

<body>
    <main class="d-flex flex-wrap justify-content-center ">
        @foreach ($movies as $movie)
            <div class="card col-4 text-center mt-3 mx-2" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">
                        titolo:
                        <h5>
                            {{ $movie['title'] }}
                        </h5>
                    </h5>
                    <h3>original title:
                        {{ $movie['original_title'] }}
                    </h3>
                    <h5>
                        nazionality:
                        {{ $movie['nationality'] }}
                    </h5>
                    <div>
                        <h5>date:</h5>
                        <h5>{{ $movie['date'] }}</h5>
                    </div>
                    <div>
                        <h5>vote:</h5>
                        <h5>{{ $movie['vote'] }}</h5>
                    </div>
                </div>
            </div>
        @endforeach
    </main>
</body>

</html>
