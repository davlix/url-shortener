<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Shortener - Shorten and Manage Your URLs</title>
    <meta name="description" content="Shorten and manage your URLs easily with our URL Shortener service. Track link performance and get detailed analytics.">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 60px; /* Adjusted for the fixed navbar */
        }

        .container {
            max-width: 600px;
            margin-top: 50px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .btn-shorten {
            background-color: #007bff;
            color: #fff;
        }

        .btn-shorten:hover {
            background-color: #0056b3;
        }

        .mt-3 {
            margin-top: 20px;
        }

        /* Navbar styling */
        .navbar {
            background-color: #343a40;
        }

        .navbar-dark .navbar-nav .nav-link {
            color: #fff;
        }

        .navbar-dark .navbar-toggler-icon {
            background-color: #fff;
        }

        /* Footer styling */
        footer {
            background-color: #343a40;
            color: #fff;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">URL Shortener</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Content Container -->
    <div class="container">
        <h2 class="mb-4">Shorten Your URL</h2>
        <form action="{{ route('shorten.url') }}" method="post" class="seo-friendly-form">
            @csrf
            <div class="form-group">
                <input type="url" class="form-control" name="url" placeholder="Enter your long URL" required>
            </div>
            <button type="submit" class="btn btn-shorten btn-block">Shorten URL</button>
        </form>

        @isset($shortUrl)
            <div class="mt-3">
                <p class="lead"><strong>Your Shortened URL:</strong></p>
                <a href="{{ route('expand.url', ['shortUrl' => $shortUrl]) }}" target="_blank">{{ $shortUrl }}</a>
            </div>
        @endisset

        <!-- URL Validation Feedback -->
        @error('url')
            <div class="alert alert-danger mt-3">
                {{ $message }}
            </div>
        @enderror

        <!-- URL Statistics -->
        <div class="mt-3">
            <p class="lead"><strong>URL Statistics:</strong></p>
            <ul>
                <li>Total Shortened URLs: 100</li>
                <li>Total Visits: 500</li>
            </ul>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>&copy; 2024 URL Shortener. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>
