<?php

namespace Symfony\Config\Shopware\HtmlSanitizer\SetsConfig;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class OptionsConfig 
{
    private $key;
    private $value;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function key($value): self
    {
        $this->key = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function value($value): self
    {
        $this->value = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['key'])) {
            $this->key = $value['key'];
            unset($value['key']);
        }
    
        if (isset($value['value'])) {
            $this->value = $value['value'];
            unset($value['value']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->key) {
            $output['key'] = $this->key;
        }
        if (null !== $this->value) {
            $output['value'] = $this->value;
        }
    
        return $output;
    }
    

}
