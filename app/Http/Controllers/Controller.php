<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class UrlController extends Controller
{
    public function shortenUrl(Request $request)
    {
        // Contoh penggunaan Str::random()
        $shortUrl = Str::random(8);

        // ... sisa logika Anda ...

        return view('shorten', ['shortUrl' => $shortUrl]);
    }

    // ... metode-metode lainnya ...
}
