<?php

namespace Symfony\Config\Shopware\Feature;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class FlagsConfig 
{
    private $name;
    private $default;
    private $major;
    private $description;
    
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
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function default($value): self
    {
        $this->default = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function major($value): self
    {
        $this->major = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function description($value): self
    {
        $this->description = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['name'])) {
            $this->name = $value['name'];
            unset($value['name']);
        }
    
        if (isset($value['default'])) {
            $this->default = $value['default'];
            unset($value['default']);
        }
    
        if (isset($value['major'])) {
            $this->major = $value['major'];
            unset($value['major']);
        }
    
        if (isset($value['description'])) {
            $this->description = $value['description'];
            unset($value['description']);
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
        if (null !== $this->default) {
            $output['default'] = $this->default;
        }
        if (null !== $this->major) {
            $output['major'] = $this->major;
        }
        if (null !== $this->description) {
            $output['description'] = $this->description;
        }
    
        return $output;
    }
    

}
