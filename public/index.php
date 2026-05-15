<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use App\Core\Http\Request;
use App\Core\Http\Response;

$request = Request::capture();

if ($request->uri() === '/json') {
    Response::json([
        'status' => 'ok',
        'message' => 'ERP API working',
        'method' => $request->method(),
        'uri' => $request->uri(),
    ]);
}

if ($request->uri() === '/redirect') {
    Response::redirect('/');
}

Response::html("
    <h2>Residential School ERP Running</h2>
    <p><b>Method:</b> {$request->method()}</p>
    <p><b>URI:</b> {$request->uri()}</p>
    <p><b>IP:</b>{$request->ip()}</p>
    <hr>
    <a href='/json'>Test JSON</a>
    <a href='/redirect'>Test Redirect</a>
");

echo "Method: " . $request->method() . "<br>";
echo "URI: " . $request->uri() . "<br>";
echo "IP: " . $request->ip() . "<br>";

