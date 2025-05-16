<?php

namespace Src;

use Error;
class Request{
    protected array $body;
    public string $method;
    public array $headers;

    public function __construct(){
        $this->body = $_REQUEST;
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->headers = getallheaders() ?? [];
    }

    public function all(): array {
        return $this->body + $this->files();
    }

    public function get($filed){
        return $this->body[$filed];
    }

    public function files(): array {
        return $_FILES;
    }

    public function

}