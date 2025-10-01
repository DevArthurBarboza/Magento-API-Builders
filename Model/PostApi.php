<?php 

namespace Arthur\Builders\Model;

use Arthur\Builders\Helper\Config;

class PostApi {

    public $url;
    public $port;
    public $auth;
    public $body;

    protected $config;

    public function __construct(Config $config)
    {
        $this->config = $config;
    }
    public function send()
    {
        $url = $this->url;

        if ($this->port != null) {
            $url .= ':' . $this->port;
        }

        $auth = $this->auth;
        // $auth = $this->config->retrieveGetMethodUser() . ":" . $this->config->retrieveGetMethodPassword(); 

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPGET, true);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_USERPWD, $auth);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POST, $this->body);

        $response = curl_exec($curl);

        if ($response === false) {
            echo 'Error on curl';
            exit;
        }

        return $response;

    }
}