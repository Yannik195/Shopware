<?php

namespace Symfony\Config\Shopware;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class StoreConfig 
{
    private $frw;
    
    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function frw($value): self
    {
        $this->frw = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['frw'])) {
            $this->frw = $value['frw'];
            unset($value['frw']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->frw) {
            $output['frw'] = $this->frw;
        }
    
        return $output;
    }
    

}
