<?php
/**
 * 
 * User: semihs
 * Date: 21.11.14
 * Time: 17:37
 * 
 */
 

namespace TvkurApiClient\Factory;

use TvkurApiClient\TvkurApiClient;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class TvkurApiClientFactory implements FactoryInterface
{
    /**
     * {@inheritDoc}
     * @return TvkurApiClient
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $filters = null;
        $config  = array();

        if ($serviceLocator->has('Config')) {
            $config = $serviceLocator->get('Config');
        }

        return new TvkurApiClient(array('configs' => $config));
    }
}
