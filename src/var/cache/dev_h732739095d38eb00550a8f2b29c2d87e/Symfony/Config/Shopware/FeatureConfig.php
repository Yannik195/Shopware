<?php

namespace Symfony\Config\Shopware;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Feature'.\DIRECTORY_SEPARATOR.'FlagsConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class FeatureConfig 
{
    private $flags;
    
    public function flags(string $name, array $value = []): \Symfony\Config\Shopware\Feature\FlagsConfig
    {
        if (!isset($this->flags[$name])) {
            return $this->flags[$name] = new \Symfony\Config\Shopware\Feature\FlagsConfig($value);
        }
        if ([] === $value) {
            return $this->flags[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "flags()" has already been initialized. You cannot pass values the second time you call flags().');
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['flags'])) {
            $this->flags = array_map(function ($v) { return new \Symfony\Config\Shopware\Feature\FlagsConfig($v); }, $value['flags']);
            unset($value['flags']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->flags) {
            $output['flags'] = array_map(function ($v) { return $v->toArray(); }, $this->flags);
        }
    
        return $output;
    }
    

}
