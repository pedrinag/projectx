<?php
// Router for PHP built-in server
// This allows direct access to admin and other folders without going through the cloaker

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Routes that should bypass the cloaker
$bypass_routes = ['/admin', '/landing', '/thankyou', '/tos', '/js', '/404'];

foreach ($bypass_routes as $route) {
    if ($uri === $route || strpos($uri, $route . '/') === 0) {
        // Serve the file directly
        $file = __DIR__ . $uri;
        if (is_dir($file)) {
            $file = rtrim($file, '/') . '/index.php';
        }
        if (file_exists($file) && is_file($file)) {
            return false; // Let PHP built-in server handle it
        }
    }
}

// For all other requests, use index.php (cloaker)
if (file_exists(__DIR__ . '/index.php')) {
    include __DIR__ . '/index.php';
} else {
    return false;
}

