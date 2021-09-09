<?php

namespace Symfony\Config\Shopware;

require_once __DIR__.\DIRECTORY_SEPARATOR.'HtmlSanitizer'.\DIRECTORY_SEPARATOR.'SetsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'HtmlSanitizer'.\DIRECTORY_SEPARATOR.'FieldsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class HtmlSanitizerConfig 
{
    private $cacheDir;
    private $cacheEnabled;
    private $sets;
    private $fields;
    
    /**
     * @default '%kernel.cache_dir%'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cacheDir($value = '%kernel.cache_dir%'): self
    {
        $this->cacheDir = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function cacheEnabled($value): self
    {
        $this->cacheEnabled = $value;
    
        return $this;
    }
    
    public function sets(string $name, array $value = []): \Symfony\Config\Shopware\HtmlSanitizer\SetsConfig
    {
        if (!isset($this->sets[$name])) {
            return $this->sets[$name] = new \Symfony\Config\Shopware\HtmlSanitizer\SetsConfig($value);
        }
        if ([] === $value) {
            return $this->sets[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "sets()" has already been initialized. You cannot pass values the second time you call sets().');
    }
    
    public function fields(string $name, array $value = []): \Symfony\Config\Shopware\HtmlSanitizer\FieldsConfig
    {
        if (!isset($this->fields[$name])) {
            return $this->fields[$name] = new \Symfony\Config\Shopware\HtmlSanitizer\FieldsConfig($value);
        }
        if ([] === $value) {
            return $this->fields[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "fields()" has already been initialized. You cannot pass values the second time you call fields().');
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['cache_dir'])) {
            $this->cacheDir = $value['cache_dir'];
            unset($value['cache_dir']);
        }
    
        if (isset($value['cache_enabled'])) {
            $this->cacheEnabled = $value['cache_enabled'];
            unset($value['cache_enabled']);
        }
    
        if (isset($value['sets'])) {
            $this->sets = array_map(function ($v) { return new \Symfony\Config\Shopware\HtmlSanitizer\SetsConfig($v); }, $value['sets']);
            unset($value['sets']);
        }
    
        if (isset($value['fields'])) {
            $this->fields = array_map(function ($v) { return new \Symfony\Config\Shopware\HtmlSanitizer\FieldsConfig($v); }, $value['fields']);
            unset($value['fields']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->cacheDir) {
            $output['cache_dir'] = $this->cacheDir;
        }
        if (null !== $this->cacheEnabled) {
            $output['cache_enabled'] = $this->cacheEnabled;
        }
        if (null !== $this->sets) {
            $output['sets'] = array_map(function ($v) { return $v->toArray(); }, $this->sets);
        }
        if (null !== $this->fields) {
            $output['fields'] = array_map(function ($v) { return $v->toArray(); }, $this->fields);
        }
    
        return $output;
    }
    

}
