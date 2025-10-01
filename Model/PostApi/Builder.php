<?php

namespace Arthur\Builders\Model\PostApi;

use Arthur\Builders\Api\BuilderInterface;
use Arthur\Builders\Model\PostApi;

class Builder implements BuilderInterface
{
    protected $connection;

    public function __construct(PostApi $connection)
    {
        $this->connection = $connection;
    }

    public function reset()
    {
        $this->connection->url = null;
        $this->connection->auth = null;
        $this->connection->body = null;
        $this->connection->port = null;
    }

    public function get()
    {
        return $this->connection;
    }

    public function setPort($port)
    {
        $this->connection->port = $port;
    }

    public function setUrl($url)
    {
        $this->connection->url = $url;
    }

    public function setAuth($auth)
    {
        $this->connection->auth = $auth;
    }

    public function setBody($body)
    {
        $this->connection->body = $body;
    }

}