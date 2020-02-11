<?php

class Request {
    protected $uri;

    public static function uri() {
        return trim($_SERVER['REQUEST_URI'], '/');

    }
}