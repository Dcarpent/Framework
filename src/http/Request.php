<?php

namespace DMC\Framework\Http;

class Request
{
    private static $instance = null;
    private array $server;
    private array $get;
    private array $post;
    private array $files;
    private array $cookie;
    private array $env; 

    // Private constructor to prevent direct object creation
    private function __construct() {
        $this->server = $_SERVER;
        $this->get = $_GET;
        $this->post = $_POST;
        $this->files = $_FILES;
        $this->cookie = $_COOKIE;
        $this->env = $_ENV;
    }

    // Static method to get the singleton instance
    public static function create()  {
        if (self::$instance === null) {
            self::$instance = new Request();
        }
        return self::$instance;
    }

    public function displayArguments() {
        print_r("Argument 1: " . $this->server['REQUEST_URI'] . "\n");
        print_r( "Argument 2: " . $this->server['DOCUMENT_ROOT'] . "\n");
        print_r( "Argument 3: " . $this->server['REQUEST_URI'] . "\n");
    }

    public function getMethod(): void
    {
        echo $this->server['REQUEST_METHOD'];
    }

    public function getUri(): void
    {
        echo $this->server['REQUEST_URI'];
    }
    
}
