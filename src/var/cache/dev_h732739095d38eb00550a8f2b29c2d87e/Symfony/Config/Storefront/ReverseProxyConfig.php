<?php

namespace Symfony\Config\Storefront;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class ReverseProxyConfig 
{
    private $enabled;
    private $hosts;
    private $maxParallelInvalidations;
    private $redisUrl;
    private $banMethod;
    
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
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function hosts($value): self
    {
        $this->hosts = $value;
    
        return $this;
    }
    
    /**
     * @default 2
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function maxParallelInvalidations($value): self
    {
        $this->maxParallelInvalidations = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function redisUrl($value): self
    {
        $this->redisUrl = $value;
    
        return $this;
    }
    
    /**
     * @default 'BAN'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function banMethod($value): self
    {
        $this->banMethod = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['enabled'])) {
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }
    
        if (isset($value['hosts'])) {
            $this->hosts = $value['hosts'];
            unset($value['hosts']);
        }
    
        if (isset($value['max_parallel_invalidations'])) {
            $this->maxParallelInvalidations = $value['max_parallel_invalidations'];
            unset($value['max_parallel_invalidations']);
        }
    
        if (isset($value['redis_url'])) {
            $this->redisUrl = $value['redis_url'];
            unset($value['redis_url']);
        }
    
        if (isset($value['ban_method'])) {
            $this->banMethod = $value['ban_method'];
            unset($value['ban_method']);
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
        if (null !== $this->hosts) {
            $output['hosts'] = $this->hosts;
        }
        if (null !== $this->maxParallelInvalidations) {
            $output['max_parallel_invalidations'] = $this->maxParallelInvalidations;
        }
        if (null !== $this->redisUrl) {
            $output['redis_url'] = $this->redisUrl;
        }
        if (null !== $this->banMethod) {
            $output['ban_method'] = $this->banMethod;
        }
    
        return $output;
    }
    

}
