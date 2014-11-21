Tvkur Api Php SDK For Zf2
=======================
Introduction
------------
This module has been written for TVKUR API

Installation
------------

For the installation uses composer composer. Add this project in your composer.json:


    "require": {
        "noc-med/zf2-tvkur-api-php-client": "dev-master"
    }


if you don't have the composer.phar (https://getcomposer.org/download/)

Requirements
------------

Php 5.5 or Higher versions.
Php curl extension is needed.
zendframework/zend-http

Configuration
-------------

    
    module.tvkurapi.global.php

    $configs = array (
        'tvkur' => array(
            'api_url' => 'https://api.tvkur.com',
            'authentication' => array(
                'oauth' => array(
                    'grant_type' => 'client_credentials',
                    'client_id' => '61414062410',
                    'client_secret' => '18f98c0c61d091c985c1f4ebb5439158',
                    // 'username' => '',
                    // 'password' => '',
                )
            )
        )
    )


Using
-----


    $tvkurApiClient = $this->getServiceLocator('TvkurApiClient');
    $response = $tvkurApiClient->video()->get($id, (array) $queryParams);
    
    
Response content


    $response->getJsonResponse(); //salt json body
    $response->getArrayResponse(); //salt array body
    
    $response->getContent(); //array video or stream array content
    $response->getLinks(); //array prev next self links
    $response->getPageCount(); //integer total page count
    $response->getPageSize(); //integer items count per page
    $response->getTotalItems(); //integer total items count

