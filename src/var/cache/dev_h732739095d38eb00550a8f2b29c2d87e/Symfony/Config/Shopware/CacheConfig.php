<?php

namespace Symfony\Config\Shopware;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Cache'.\DIRECTORY_SEPARATOR.'InvalidationConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class CacheConfig 
{
    private $invalidation;
    
    public function invalidation(array $value = []): \Symfony\Config\Shopware\Cache\InvalidationConfig
    {
        if (null === $this->invalidation) {
            $this->invalidation = new \Symfony\Config\Shopware\Cache\InvalidationConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "invalidation()" has already been initialized. You cannot pass values the second time you call invalidation().');
        }
    
        return $this->invalidation;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['invalidation'])) {
            $this->invalidation = new \Symfony\Config\Shopware\Cache\InvalidationConfig($value['invalidation']);
            unset($value['invalidation']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->invalidation) {
            $output['invalidation'] = $this->invalidation->toArray();
        }
    
        return $output;
    }
    

}
