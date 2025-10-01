<?php

namespace Arthur\Builders\Model;

use Arthur\Builders\Helper\Config;
use Arthur\Builders\Model\PostApi\Builder as PostApiBuilder;
use Arthur\Builders\Model\GetApi\Builder as GetApiBuilder;

class Director
{

    protected $getApiBuilder;
    protected $postApiBuilder;

    protected $configHelper;

    public function __construct(
        Config $configHelper,
        PostApiBuilder $postApiBuilder,
        GetApiBuilder $getApiBuilder
    ) {
        $this->configHelper = $configHelper;
        $this->postApiBuilder = $postApiBuilder;
        $this->getApiBuilder = $getApiBuilder;
    }

    public function createPostApiInstance()
    {
        $this->postApiBuilder->setPort($this->configHelper->retrievePostMethodPort());
        $this->postApiBuilder->setAuth($this->configHelper->retrievePostMethodUser() . ":" . $this->configHelper->retrievePostMethodPassword());
        $this->postApiBuilder->setUrl($this->configHelper->retrievePostMethodUrl());
        $this->postApiBuilder->setBody(['data' => ['firstName' => 'John', 'lastName' => 'Doe']]);
        $this->postApiBuilder->get();
        $this->postApiBuilder->reset();
    }

    public function createGetApiInstance()
    {
        $this->getApiBuilder->setPort($this->configHelper->retrieveGetMethodPort());
        $this->getApiBuilder->setAuth($this->configHelper->retrieveGetMethodUser() . ":" . $this->configHelper->retrieveGetMethodPassword());
        $this->getApiBuilder->setUrl($this->configHelper->retrieveGetMethodUrl());
        $this->getApiBuilder->setParams(['data' => ['firstName' => 'John', 'lastName' => 'Doe']]);
        $this->getApiBuilder->get();
        $this->getApiBuilder->reset();
    }
}