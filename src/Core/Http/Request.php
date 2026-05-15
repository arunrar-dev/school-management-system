<?php

declare(strict_types=1);

namespace App\Core\Http;

class Request
{
    private array $get;
    private array $post;
    private array $server;
    private array $files;

    public function __construct(array $get, array $post, array $server, array $files = [])
    {
        $this->get = $get;
        $this->post = $post;
        $this->server = $server;
        $this->files = $files;
    }

    public static function capture(): self
    {
        return new self($_GET, $_POST, $_SERVER, $_FILES);
    }

    public function method(): string
    {
        return strtoupper($this->server['REQUEST_METHOD'] ?? 'GET');
    }

    public function uri(): string
    {
        $uri = $this->server['REQUEST_URI'] ?? '/';
        $uri = parse_url($uri, PHP_URL_PATH);

        return $uri ?: '/';
    }

    public function query(string $key, mixed $default = null): mixed
    {
        return $this->get[$key] ?? $default;
    }

    public function input(string $key, mixed $default = null): mixed
    {
        return $this->post[$key] ?? $default;
    }

    public function all(): array
    {
        return array_merge($this->get, $this->post);
    }

    public function file(string $key): mixed
    {
        return $this->files[$key] ?? null;
    }

    public function ip(): string
    {
        return $this->server['REMOTE_ADDR'] ?? '0.0.0.0';
    }

    public function userAgent(): string
    {
        return $this->server['HTTP_USER_AGENT'] ?? 'unknown';
    }
}