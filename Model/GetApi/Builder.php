<?php

namespace Arthur\Builders\Model\GetApi;

use Arthur\Builders\Api\BuilderInterface;
use Arthur\Builders\Model\GetApi;

class Builder implements BuilderInterface
{
    protected $connection;

    public function __construct(GetApi $connection)
    {
        $this->connection = $connection;
    }

    public function reset()
    {
        $this->connection->url = null;
        $this->connection->port = null;
        $this->connection->params = null;
        $this->connection->auth = null;
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

    public function setParams($params)
    {
        $this->connection->params = $params;
    }
}