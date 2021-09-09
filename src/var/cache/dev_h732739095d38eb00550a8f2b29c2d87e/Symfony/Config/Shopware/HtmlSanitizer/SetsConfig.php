<?php

namespace Symfony\Config\Shopware\HtmlSanitizer;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SetsConfig'.\DIRECTORY_SEPARATOR.'OptionsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class SetsConfig 
{
    private $name;
    private $tags;
    private $attributes;
    private $options;
    
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
    public function tags($value): self
    {
        $this->tags = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function attributes($value): self
    {
        $this->attributes = $value;
    
        return $this;
    }
    
    public function options(string $key, array $value = []): \Symfony\Config\Shopware\HtmlSanitizer\SetsConfig\OptionsConfig
    {
        if (!isset($this->options[$key])) {
            return $this->options[$key] = new \Symfony\Config\Shopware\HtmlSanitizer\SetsConfig\OptionsConfig($value);
        }
        if ([] === $value) {
            return $this->options[$key];
        }
    
        throw new InvalidConfigurationException('The node created by "options()" has already been initialized. You cannot pass values the second time you call options().');
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['name'])) {
            $this->name = $value['name'];
            unset($value['name']);
        }
    
        if (isset($value['tags'])) {
            $this->tags = $value['tags'];
            unset($value['tags']);
        }
    
        if (isset($value['attributes'])) {
            $this->attributes = $value['attributes'];
            unset($value['attributes']);
        }
    
        if (isset($value['options'])) {
            $this->options = array_map(function ($v) { return new \Symfony\Config\Shopware\HtmlSanitizer\SetsConfig\OptionsConfig($v); }, $value['options']);
            unset($value['options']);
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
        if (null !== $this->tags) {
            $output['tags'] = $this->tags;
        }
        if (null !== $this->attributes) {
            $output['attributes'] = $this->attributes;
        }
        if (null !== $this->options) {
            $output['options'] = array_map(function ($v) { return $v->toArray(); }, $this->options);
        }
    
        return $output;
    }
    

}
