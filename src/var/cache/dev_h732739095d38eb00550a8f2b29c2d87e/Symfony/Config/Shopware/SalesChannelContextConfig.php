<?php

namespace Symfony\Config\Shopware;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class SalesChannelContextConfig 
{
    private $expireDays;
    
    /**
     * @default 120
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function expireDays($value): self
    {
        $this->expireDays = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['expire_days'])) {
            $this->expireDays = $value['expire_days'];
            unset($value['expire_days']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->expireDays) {
            $output['expire_days'] = $this->expireDays;
        }
    
        return $output;
    }
    

}
