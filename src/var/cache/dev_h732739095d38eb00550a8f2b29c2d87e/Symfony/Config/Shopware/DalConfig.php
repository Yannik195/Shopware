<?php

namespace Symfony\Config\Shopware;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Dal'.\DIRECTORY_SEPARATOR.'VersioningConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class DalConfig 
{
    private $batchSize;
    private $versioning;
    
    /**
     * @default 125
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function batchSize($value): self
    {
        $this->batchSize = $value;
    
        return $this;
    }
    
    public function versioning(array $value = []): \Symfony\Config\Shopware\Dal\VersioningConfig
    {
        if (null === $this->versioning) {
            $this->versioning = new \Symfony\Config\Shopware\Dal\VersioningConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "versioning()" has already been initialized. You cannot pass values the second time you call versioning().');
        }
    
        return $this->versioning;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['batch_size'])) {
            $this->batchSize = $value['batch_size'];
            unset($value['batch_size']);
        }
    
        if (isset($value['versioning'])) {
            $this->versioning = new \Symfony\Config\Shopware\Dal\VersioningConfig($value['versioning']);
            unset($value['versioning']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->batchSize) {
            $output['batch_size'] = $this->batchSize;
        }
        if (null !== $this->versioning) {
            $output['versioning'] = $this->versioning->toArray();
        }
    
        return $output;
    }
    

}
