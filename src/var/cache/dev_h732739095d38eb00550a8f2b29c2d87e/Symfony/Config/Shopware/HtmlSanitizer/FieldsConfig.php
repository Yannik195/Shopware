<?php

namespace Symfony\Config\Shopware\HtmlSanitizer;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class FieldsConfig 
{
    private $name;
    private $sets;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function name($value): self
    {
        $this->name = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function sets($value): self
    {
        $this->sets = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['name'])) {
            $this->name = $value['name'];
            unset($value['name']);
        }
    
        if (isset($value['sets'])) {
            $this->sets = $value['sets'];
            unset($value['sets']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->name) {
            $output['name'] = $this->name;
        }
        if (null !== $this->sets) {
            $output['sets'] = $this->sets;
        }
    
        return $output;
    }
    

}
