<?php
/**
 *
 * User: semihs
 * Date: 21.11.14
 * Time: 17:48
 *
 */


return array(
    'service_manager' => array(
        'factories' => array(
            'TvkurApiClient' => 'TvkurApiClient\Factory\TvkurApiClientFactory',
        ),
    ),
    'controller_plugins' => array(
        'invokables' => array(
            'TvkurApiClient' => 'TvkurApiClient\Mvc\Controller\Plugin\TvkurApiClient',
        ),
    ),
    'view_helpers' => array(
        'invokables' => array(
            'TvkurApiClient' => 'TvkurApiClient\View\Helper\TvkurApiClient',
        ),
    ),
    'tvkur' => array(
        'api_url' => 'https://api.tvkur.com',
        'authentication' => array(
            'oauth' => array(
                'grant_type' => 'client_credentials',
                'client_id' => '',
                'client_secret' => '',
                // 'username' => '',
                // 'password' => '',
            )
        )
    )
);