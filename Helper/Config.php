<?php 

namespace Arthur\Builders\Helper;

use Magento\Framework\App\Helper\AbstractHelper;

class Config extends AbstractHelper
{
    public function retrieveGetMethodUser()
    {
        return $this->scopeConfig->getValue('builder/get/user');
    }

    public function retrieveGetMethodPassword()
    {
        return $this->scopeConfig->getValue('builder/get/password');
    }

    public function retrievePostMethodUser()
    {
        return $this->scopeConfig->getValue('builder/post/user');
    }

    public function retrievePostMethodPassword()
    {
        return $this->scopeConfig->getValue('builder/post/password');
    }

    public function retrievePostMethodPort()
    {
        return $this->scopeConfig->getValue('builder/post/port');
    }

    public function retrievePostMethodUrl()
    {
        return $this->scopeConfig->getValue('builder/post/url');
    }

    public function retrieveGetMethodPort()
    {
        return $this->scopeConfig->getValue('builder/get/port');
    }

    public function retrieveGetMethodUrl()
    {
        return $this->scopeConfig->getValue('builder/get/url');
    }
}