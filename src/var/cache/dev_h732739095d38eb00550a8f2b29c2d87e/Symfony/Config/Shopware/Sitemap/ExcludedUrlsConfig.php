<?php

namespace Symfony\Config\Shopware\Sitemap;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class ExcludedUrlsConfig 
{
    private $resource;
    private $identifier;
    private $salesChannelId;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function resource($value): self
    {
        $this->resource = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function identifier($value): self
    {
        $this->identifier = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function salesChannelId($value): self
    {
        $this->salesChannelId = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['resource'])) {
            $this->resource = $value['resource'];
            unset($value['resource']);
        }
    
        if (isset($value['identifier'])) {
            $this->identifier = $value['identifier'];
            unset($value['identifier']);
        }
    
        if (isset($value['salesChannelId'])) {
            $this->salesChannelId = $value['salesChannelId'];
            unset($value['salesChannelId']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->resource) {
            $output['resource'] = $this->resource;
        }
        if (null !== $this->identifier) {
            $output['identifier'] = $this->identifier;
        }
        if (null !== $this->salesChannelId) {
            $output['salesChannelId'] = $this->salesChannelId;
        }
    
        return $output;
    }
    

}
