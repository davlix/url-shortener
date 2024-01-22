<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Url; // Pastikan Anda mengimpor model Url

class UrlController extends BaseController
{
    public function shortenUrl(Request $request)
    {
        // Contoh penggunaan Str::random()
        $shortUrl = Str::random(8);

        // ... sisa logika Anda ...

        return view('shorten', ['shortUrl' => $shortUrl]);
    }

    public function expandUrl($shortUrl)
    {
        try {
            $url = Url::where('short_url', $shortUrl)->firstOrFail();
            return redirect($url->original_url);
        } catch (\Exception $e) {
            abort(404);
        }
    }

    // ... metode-metode lainnya ...
}
