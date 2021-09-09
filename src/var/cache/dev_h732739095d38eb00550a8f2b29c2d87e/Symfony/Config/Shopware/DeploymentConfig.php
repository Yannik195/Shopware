<?php

namespace Symfony\Config\Shopware;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class DeploymentConfig 
{
    private $blueGreen;
    
    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function blueGreen($value): self
    {
        $this->blueGreen = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['blue_green'])) {
            $this->blueGreen = $value['blue_green'];
            unset($value['blue_green']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->blueGreen) {
            $output['blue_green'] = $this->blueGreen;
        }
    
        return $output;
    }
    

}
