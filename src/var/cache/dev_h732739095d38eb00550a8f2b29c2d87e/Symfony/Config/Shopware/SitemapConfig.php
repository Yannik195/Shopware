<?php

namespace Symfony\Config\Shopware;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Sitemap'.\DIRECTORY_SEPARATOR.'CustomUrlsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Sitemap'.\DIRECTORY_SEPARATOR.'ExcludedUrlsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class SitemapConfig 
{
    private $customUrls;
    private $excludedUrls;
    private $batchsize;
    
    public function customUrls(array $value = []): \Symfony\Config\Shopware\Sitemap\CustomUrlsConfig
    {
        return $this->customUrls[] = new \Symfony\Config\Shopware\Sitemap\CustomUrlsConfig($value);
    }
    
    public function excludedUrls(array $value = []): \Symfony\Config\Shopware\Sitemap\ExcludedUrlsConfig
    {
        return $this->excludedUrls[] = new \Symfony\Config\Shopware\Sitemap\ExcludedUrlsConfig($value);
    }
    
    /**
     * @default 100
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function batchsize($value): self
    {
        $this->batchsize = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['custom_urls'])) {
            $this->customUrls = array_map(function ($v) { return new \Symfony\Config\Shopware\Sitemap\CustomUrlsConfig($v); }, $value['custom_urls']);
            unset($value['custom_urls']);
        }
    
        if (isset($value['excluded_urls'])) {
            $this->excludedUrls = array_map(function ($v) { return new \Symfony\Config\Shopware\Sitemap\ExcludedUrlsConfig($v); }, $value['excluded_urls']);
            unset($value['excluded_urls']);
        }
    
        if (isset($value['batchsize'])) {
            $this->batchsize = $value['batchsize'];
            unset($value['batchsize']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->customUrls) {
            $output['custom_urls'] = array_map(function ($v) { return $v->toArray(); }, $this->customUrls);
        }
        if (null !== $this->excludedUrls) {
            $output['excluded_urls'] = array_map(function ($v) { return $v->toArray(); }, $this->excludedUrls);
        }
        if (null !== $this->batchsize) {
            $output['batchsize'] = $this->batchsize;
        }
    
        return $output;
    }
    

}
