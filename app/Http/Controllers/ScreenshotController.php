<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Browsershot\Browsershot;

class ScreenshotController extends Controller
{
    public function captureImage(Request $request)
    {
        $url = $request->input('url', 'https://spatie.be/docs/browsershot/v4/introduction');
        $fileName = 'screenshot.png';
        $filePath = storage_path("app/public/{$fileName}");

        Browsershot::url($url)
            ->waitUntilNetworkIdle()
            ->save($filePath);

        return response()->download($filePath);
    }

    public function capturePdf(Request $request)
    {
        $url = $request->input('url', 'https://example.com');
        $fileName = 'webpage.pdf';
        $filePath = storage_path("app/public/{$fileName}");

        Browsershot::url($url)
            ->waitUntilNetworkIdle()
            ->format('A4')
            ->savePdf($filePath);

        return response()->download($filePath);
    }
}
