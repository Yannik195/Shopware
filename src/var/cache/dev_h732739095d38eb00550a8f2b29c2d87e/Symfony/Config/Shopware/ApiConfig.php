<?php

namespace Symfony\Config\Shopware;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Api'.\DIRECTORY_SEPARATOR.'StoreConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Api'.\DIRECTORY_SEPARATOR.'ApiBrowserConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class ApiConfig 
{
    private $store;
    private $maxLimit;
    private $apiBrowser;
    
    public function store(array $value = []): \Symfony\Config\Shopware\Api\StoreConfig
    {
        if (null === $this->store) {
            $this->store = new \Symfony\Config\Shopware\Api\StoreConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "store()" has already been initialized. You cannot pass values the second time you call store().');
        }
    
        return $this->store;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function maxLimit($value): self
    {
        $this->maxLimit = $value;
    
        return $this;
    }
    
    public function apiBrowser(array $value = []): \Symfony\Config\Shopware\Api\ApiBrowserConfig
    {
        if (null === $this->apiBrowser) {
            $this->apiBrowser = new \Symfony\Config\Shopware\Api\ApiBrowserConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "apiBrowser()" has already been initialized. You cannot pass values the second time you call apiBrowser().');
        }
    
        return $this->apiBrowser;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['store'])) {
            $this->store = new \Symfony\Config\Shopware\Api\StoreConfig($value['store']);
            unset($value['store']);
        }
    
        if (isset($value['max_limit'])) {
            $this->maxLimit = $value['max_limit'];
            unset($value['max_limit']);
        }
    
        if (isset($value['api_browser'])) {
            $this->apiBrowser = new \Symfony\Config\Shopware\Api\ApiBrowserConfig($value['api_browser']);
            unset($value['api_browser']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->store) {
            $output['store'] = $this->store->toArray();
        }
        if (null !== $this->maxLimit) {
            $output['max_limit'] = $this->maxLimit;
        }
        if (null !== $this->apiBrowser) {
            $output['api_browser'] = $this->apiBrowser->toArray();
        }
    
        return $output;
    }
    

}
