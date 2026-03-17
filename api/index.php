<?php

use Illuminate\Http\Request;
use Illuminate\Contracts\Http\Kernel;

require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';

// Paksa folder storage ke /tmp agar tidak error Permission Denied
$app->useStoragePath('/tmp/storage');

// Buat folder yang diperlukan secara otomatis
if (!is_dir('/tmp/storage/framework/views')) {
    mkdir('/tmp/storage/framework/views', 0777, true);
}

$kernel = $app->make(Kernel::class);

try {
    $response = $kernel->handle(
        $request = Request::capture()
    );
    $response->send();
    $kernel->terminate($request, $response);
} catch (\Exception $e) {
    // TAMPILKAN ERROR ASLI DI BROWSER
    echo "<h1>Error Terdeteksi:</h1>";
    echo "<pre>" . $e->getMessage() . "</pre>";
    echo "<br><b>File:</b> " . $e->getFile() . " baris " . $e->getLine();
    exit;
}