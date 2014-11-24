<?php
/**
 *
 * User: semihs
 * Date: 24.11.14
 * Time: 14:21
 *
 */


namespace ZfTvkurApiClient\Service;

use TvkurApiClient\TvkurApiClient;
use Zend\ServiceManager\ServiceLocatorAwareInterface;

class ZfTvkurApiClientService implements ServiceLocatorAwareInterface
{
    use \Zend\ServiceManager\ServiceLocatorAwareTrait;

    public function __invoke() {
        $config = $this->getServiceLocator()->getServiceLocator()->get('Config');
        return new TvkurApiClient($config['tvkur']);
    }
} 