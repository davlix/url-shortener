<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Shortener</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            background-color: #141414; /* Warna latar belakang tema cyberpunk */
            color: #ffffff; /* Warna teks */
        }

        .card {
            background-color: #292929; /* Warna card tema cyberpunk */
            border: 1px solid #00ff00; /* Border neon */
            border-radius: 10px; /* Sudut melengkung */
            box-shadow: 0 0 10px rgba(0, 255, 0, 0.5); /* Shadow neon */
        }

        .btn-cyberpunk {
            background-color: #00ff00; /* Warna tombol tema cyberpunk */
            color: #000000; /* Warna teks tombol */
            border: 1px solid #00ff00; /* Border neon */
            border-radius: 5px; /* Sudut melengkung */
        }

        .btn-cyberpunk:hover {
            background-color: #000000; /* Warna tombol saat dihover */
            color: #00ff00; /* Warna teks tombol saat dihover */
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">URL Shortener</div>
                    <div class="card-body">
                        <form action="{{ route('shorten.url') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="url">URL Panjang:</label>
                                <input type="url" class="form-control" name="url" required>
                            </div>
                            <button type="submit" class="btn btn-cyberpunk">Pendekkan</button>
                        </form>

                        @isset($shortUrl)
                            <div class="mt-3">
                                <p><strong>URL Pendek:</strong> <a href="{{ route('expand.url', ['shortUrl' => $shortUrl]) }}" target="_blank">{{ $shortUrl }}</a></p>
                                @if(session('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('success') }}
                                    </div>
                                @endif
                            </div>
                        @endisset
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
