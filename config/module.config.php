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
        'invokables' => array(
            'ZfTvkurApiClient' => 'ZfTvkurApiClient\Service\ZfTvkurApiClientService',
        ),
    ),
    'controller_plugins' => array(
        'invokables' => array(
            'ZfTvkurApiClient' => 'ZfTvkurApiClient\Mvc\Controller\Plugin\ZfTvkurApiClient',
        ),
    ),
    'view_helpers' => array(
        'invokables' => array(
            'ZfTvkurApiClient' => 'ZfTvkurApiClient\View\Helper\ZfTvkurApiClient',
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