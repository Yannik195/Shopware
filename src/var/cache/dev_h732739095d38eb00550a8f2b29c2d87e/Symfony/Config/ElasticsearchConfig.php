<?php

namespace Symfony\Config;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class ElasticsearchConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $enabled;
    private $indexingEnabled;
    private $indexingBatchSize;
    private $hosts;
    private $indexPrefix;
    private $throwException;
    private $loggerLevel;
    
    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): self
    {
        $this->enabled = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function indexingEnabled($value): self
    {
        $this->indexingEnabled = $value;
    
        return $this;
    }
    
    /**
     * @default 100
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function indexingBatchSize($value): self
    {
        $this->indexingBatchSize = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function hosts($value): self
    {
        $this->hosts = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function indexPrefix($value): self
    {
        $this->indexPrefix = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function throwException($value): self
    {
        $this->throwException = $value;
    
        return $this;
    }
    
    /**
     * @default 100
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function loggerLevel($value): self
    {
        $this->loggerLevel = $value;
    
        return $this;
    }
    
    public function getExtensionAlias(): string
    {
        return 'elasticsearch';
    }
            
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['enabled'])) {
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }
    
        if (isset($value['indexing_enabled'])) {
            $this->indexingEnabled = $value['indexing_enabled'];
            unset($value['indexing_enabled']);
        }
    
        if (isset($value['indexing_batch_size'])) {
            $this->indexingBatchSize = $value['indexing_batch_size'];
            unset($value['indexing_batch_size']);
        }
    
        if (isset($value['hosts'])) {
            $this->hosts = $value['hosts'];
            unset($value['hosts']);
        }
    
        if (isset($value['index_prefix'])) {
            $this->indexPrefix = $value['index_prefix'];
            unset($value['index_prefix']);
        }
    
        if (isset($value['throw_exception'])) {
            $this->throwException = $value['throw_exception'];
            unset($value['throw_exception']);
        }
    
        if (isset($value['logger_level'])) {
            $this->loggerLevel = $value['logger_level'];
            unset($value['logger_level']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->enabled) {
            $output['enabled'] = $this->enabled;
        }
        if (null !== $this->indexingEnabled) {
            $output['indexing_enabled'] = $this->indexingEnabled;
        }
        if (null !== $this->indexingBatchSize) {
            $output['indexing_batch_size'] = $this->indexingBatchSize;
        }
        if (null !== $this->hosts) {
            $output['hosts'] = $this->hosts;
        }
        if (null !== $this->indexPrefix) {
            $output['index_prefix'] = $this->indexPrefix;
        }
        if (null !== $this->throwException) {
            $output['throw_exception'] = $this->throwException;
        }
        if (null !== $this->loggerLevel) {
            $output['logger_level'] = $this->loggerLevel;
        }
    
        return $output;
    }
    

}
