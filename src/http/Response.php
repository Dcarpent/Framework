<?php

namespace DMC\Framework\Http;

class Response 
{


    protected ?string $content;
    

    public function __construct
    (
        $content = '',
        int $status = 200,
        array $headers = []
    )
    {
        $this->content = $content;
        http_response_code($status);
    }

    public function send(): void
    {
        echo $this->content;
    }
}