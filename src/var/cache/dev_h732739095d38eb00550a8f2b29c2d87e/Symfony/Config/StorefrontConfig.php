<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Storefront'.\DIRECTORY_SEPARATOR.'CsrfConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Storefront'.\DIRECTORY_SEPARATOR.'HtmlPurifierConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Storefront'.\DIRECTORY_SEPARATOR.'ReverseProxyConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Storefront'.\DIRECTORY_SEPARATOR.'HttpCacheConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class StorefrontConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $csrf;
    private $htmlPurifier;
    private $reverseProxy;
    private $httpCache;
    
    public function csrf(array $value = []): \Symfony\Config\Storefront\CsrfConfig
    {
        if (null === $this->csrf) {
            $this->csrf = new \Symfony\Config\Storefront\CsrfConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "csrf()" has already been initialized. You cannot pass values the second time you call csrf().');
        }
    
        return $this->csrf;
    }
    
    public function htmlPurifier(array $value = []): \Symfony\Config\Storefront\HtmlPurifierConfig
    {
        if (null === $this->htmlPurifier) {
            $this->htmlPurifier = new \Symfony\Config\Storefront\HtmlPurifierConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "htmlPurifier()" has already been initialized. You cannot pass values the second time you call htmlPurifier().');
        }
    
        return $this->htmlPurifier;
    }
    
    public function reverseProxy(array $value = []): \Symfony\Config\Storefront\ReverseProxyConfig
    {
        if (null === $this->reverseProxy) {
            $this->reverseProxy = new \Symfony\Config\Storefront\ReverseProxyConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "reverseProxy()" has already been initialized. You cannot pass values the second time you call reverseProxy().');
        }
    
        return $this->reverseProxy;
    }
    
    public function httpCache(array $value = []): \Symfony\Config\Storefront\HttpCacheConfig
    {
        if (null === $this->httpCache) {
            $this->httpCache = new \Symfony\Config\Storefront\HttpCacheConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "httpCache()" has already been initialized. You cannot pass values the second time you call httpCache().');
        }
    
        return $this->httpCache;
    }
    
    public function getExtensionAlias(): string
    {
        return 'storefront';
    }
            
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['csrf'])) {
            $this->csrf = new \Symfony\Config\Storefront\CsrfConfig($value['csrf']);
            unset($value['csrf']);
        }
    
        if (isset($value['htmlPurifier'])) {
            $this->htmlPurifier = new \Symfony\Config\Storefront\HtmlPurifierConfig($value['htmlPurifier']);
            unset($value['htmlPurifier']);
        }
    
        if (isset($value['reverse_proxy'])) {
            $this->reverseProxy = new \Symfony\Config\Storefront\ReverseProxyConfig($value['reverse_proxy']);
            unset($value['reverse_proxy']);
        }
    
        if (isset($value['http_cache'])) {
            $this->httpCache = new \Symfony\Config\Storefront\HttpCacheConfig($value['http_cache']);
            unset($value['http_cache']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->csrf) {
            $output['csrf'] = $this->csrf->toArray();
        }
        if (null !== $this->htmlPurifier) {
            $output['htmlPurifier'] = $this->htmlPurifier->toArray();
        }
        if (null !== $this->reverseProxy) {
            $output['reverse_proxy'] = $this->reverseProxy->toArray();
        }
        if (null !== $this->httpCache) {
            $output['http_cache'] = $this->httpCache->toArray();
        }
    
        return $output;
    }
    

}
