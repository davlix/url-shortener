<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Shortener</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                <div class="card-body">
    <form action="{{ route('shorten.url') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="url">URL Panjang:</label>
            <input type="url" class="form-control" name="url" required>
        </div>
        <button type="submit" class="btn btn-primary">Pendekkan</button>
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
