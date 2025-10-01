<?php

namespace Arthur\Builders\Api;

interface BuilderInterface
{
    public function setPort($port);

    public function setUrl($port);

    public function setAuth($data);

    public function reset();

    public function get();
}