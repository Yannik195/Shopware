<?php

namespace Symfony\Config\Shopware\Sitemap;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class CustomUrlsConfig 
{
    private $url;
    private $lastMod;
    private $changeFreq;
    private $priority;
    private $salesChannelId;
    
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
    public function lastMod($value): self
    {
        $this->lastMod = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|'always'|'hourly'|'daily'|'weekly'|'monthly'|'yearly' $value
     * @return $this
     */
    public function changeFreq($value): self
    {
        $this->changeFreq = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|float $value
     * @return $this
     */
    public function priority($value): self
    {
        $this->priority = $value;
    
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
    
        if (isset($value['url'])) {
            $this->url = $value['url'];
            unset($value['url']);
        }
    
        if (isset($value['lastMod'])) {
            $this->lastMod = $value['lastMod'];
            unset($value['lastMod']);
        }
    
        if (isset($value['changeFreq'])) {
            $this->changeFreq = $value['changeFreq'];
            unset($value['changeFreq']);
        }
    
        if (isset($value['priority'])) {
            $this->priority = $value['priority'];
            unset($value['priority']);
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
        if (null !== $this->url) {
            $output['url'] = $this->url;
        }
        if (null !== $this->lastMod) {
            $output['lastMod'] = $this->lastMod;
        }
        if (null !== $this->changeFreq) {
            $output['changeFreq'] = $this->changeFreq;
        }
        if (null !== $this->priority) {
            $output['priority'] = $this->priority;
        }
        if (null !== $this->salesChannelId) {
            $output['salesChannelId'] = $this->salesChannelId;
        }
    
        return $output;
    }
    

}
