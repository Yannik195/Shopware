<?php

namespace Symfony\Config\Shopware\Api;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class StoreConfig 
{
    private $contextLifetime;
    
    /**
     * @default 'P1D'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function contextLifetime($value): self
    {
        $this->contextLifetime = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['context_lifetime'])) {
            $this->contextLifetime = $value['context_lifetime'];
            unset($value['context_lifetime']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->contextLifetime) {
            $output['context_lifetime'] = $this->contextLifetime;
        }
    
        return $output;
    }
    

}
