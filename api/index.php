<?php

// 1. Hapus paksa cache yang terbawa dari lokal jika ada
$badCache = [
    __DIR__ . '/../bootstrap/cache/config.php',
    __DIR__ . '/../bootstrap/cache/routes.php'
];
foreach ($badCache as $cacheFile) {
    if (file_exists($cacheFile)) {
        unlink($cacheFile);
    }
}

// 2. Setup folder storage di /tmp
$storageFolders = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache',
    '/tmp/storage/framework/sessions',
];
foreach ($storageFolders as $folder) {
    if (!is_dir($folder)) {
        mkdir($folder, 0777, true);
    }
}

require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';

// Set path storage ke /tmp
$app->useStoragePath('/tmp/storage');

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();
$kernel->terminate($request, $response);
