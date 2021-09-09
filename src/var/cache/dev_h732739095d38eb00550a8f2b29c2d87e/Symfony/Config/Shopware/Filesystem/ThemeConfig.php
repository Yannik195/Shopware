<?php

namespace Symfony\Config\Shopware\Filesystem;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class ThemeConfig 
{
    private $type;
    private $url;
    private $visibility;
    private $config;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function type($value): self
    {
        $this->type = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function url($value): self
    {
        $this->url = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function visibility($value): self
    {
        $this->visibility = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function config($value): self
    {
        $this->config = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['type'])) {
            $this->type = $value['type'];
            unset($value['type']);
        }
    
        if (isset($value['url'])) {
            $this->url = $value['url'];
            unset($value['url']);
        }
    
        if (isset($value['visibility'])) {
            $this->visibility = $value['visibility'];
            unset($value['visibility']);
        }
    
        if (isset($value['config'])) {
            $this->config = $value['config'];
            unset($value['config']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->type) {
            $output['type'] = $this->type;
        }
        if (null !== $this->url) {
            $output['url'] = $this->url;
        }
        if (null !== $this->visibility) {
            $output['visibility'] = $this->visibility;
        }
        if (null !== $this->config) {
            $output['config'] = $this->config;
        }
    
        return $output;
    }
    

}
