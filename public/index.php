<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use App\Core\Http\Request;

$request = Request::capture();

echo "Method: " . $request->method() . "<br>";
echo "URI: " . $request->uri() . "<br>";
echo "IP: " . $request->ip() . "<br>";

