<?php
/**
 *
 * User: semihs
 * Date: 24.11.14
 * Time: 14:21
 *
 */


namespace ZfTvkurApiClient\Service;

use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class ZfTvkurApiClientService implements ServiceLocatorAwareInterface
{

    protected $serviceLocator;

    public function setServiceLocator(ServiceLocatorInterface $serviceLocator)
    {
        $this->serviceLocator = $serviceLocator;
    }

    public function getServiceLocator()
    {
        return $this->serviceLocator;
    }
} 