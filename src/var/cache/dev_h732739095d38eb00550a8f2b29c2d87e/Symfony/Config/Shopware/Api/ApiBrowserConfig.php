<?php

namespace Symfony\Config\Shopware\Api;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class ApiBrowserConfig 
{
    private $authRequired;
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function authRequired($value): self
    {
        $this->authRequired = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['auth_required'])) {
            $this->authRequired = $value['auth_required'];
            unset($value['auth_required']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->authRequired) {
            $output['auth_required'] = $this->authRequired;
        }
    
        return $output;
    }
    

}
