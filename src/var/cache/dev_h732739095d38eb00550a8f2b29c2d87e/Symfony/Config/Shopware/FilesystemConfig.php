<?php

namespace Symfony\Config\Shopware;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Filesystem'.\DIRECTORY_SEPARATOR.'PrivateConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Filesystem'.\DIRECTORY_SEPARATOR.'PublicConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Filesystem'.\DIRECTORY_SEPARATOR.'TempConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Filesystem'.\DIRECTORY_SEPARATOR.'ThemeConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Filesystem'.\DIRECTORY_SEPARATOR.'AssetConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Filesystem'.\DIRECTORY_SEPARATOR.'SitemapConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class FilesystemConfig 
{
    private $private;
    private $public;
    private $temp;
    private $theme;
    private $asset;
    private $sitemap;
    private $allowedExtensions;
    
    public function private(array $value = []): \Symfony\Config\Shopware\Filesystem\PrivateConfig
    {
        if (null === $this->private) {
            $this->private = new \Symfony\Config\Shopware\Filesystem\PrivateConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "private()" has already been initialized. You cannot pass values the second time you call private().');
        }
    
        return $this->private;
    }
    
    public function public(array $value = []): \Symfony\Config\Shopware\Filesystem\PublicConfig
    {
        if (null === $this->public) {
            $this->public = new \Symfony\Config\Shopware\Filesystem\PublicConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "public()" has already been initialized. You cannot pass values the second time you call public().');
        }
    
        return $this->public;
    }
    
    public function temp(array $value = []): \Symfony\Config\Shopware\Filesystem\TempConfig
    {
        if (null === $this->temp) {
            $this->temp = new \Symfony\Config\Shopware\Filesystem\TempConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "temp()" has already been initialized. You cannot pass values the second time you call temp().');
        }
    
        return $this->temp;
    }
    
    public function theme(array $value = []): \Symfony\Config\Shopware\Filesystem\ThemeConfig
    {
        if (null === $this->theme) {
            $this->theme = new \Symfony\Config\Shopware\Filesystem\ThemeConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "theme()" has already been initialized. You cannot pass values the second time you call theme().');
        }
    
        return $this->theme;
    }
    
    public function asset(array $value = []): \Symfony\Config\Shopware\Filesystem\AssetConfig
    {
        if (null === $this->asset) {
            $this->asset = new \Symfony\Config\Shopware\Filesystem\AssetConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "asset()" has already been initialized. You cannot pass values the second time you call asset().');
        }
    
        return $this->asset;
    }
    
    public function sitemap(array $value = []): \Symfony\Config\Shopware\Filesystem\SitemapConfig
    {
        if (null === $this->sitemap) {
            $this->sitemap = new \Symfony\Config\Shopware\Filesystem\SitemapConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "sitemap()" has already been initialized. You cannot pass values the second time you call sitemap().');
        }
    
        return $this->sitemap;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function allowedExtensions($value): self
    {
        $this->allowedExtensions = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['private'])) {
            $this->private = new \Symfony\Config\Shopware\Filesystem\PrivateConfig($value['private']);
            unset($value['private']);
        }
    
        if (isset($value['public'])) {
            $this->public = new \Symfony\Config\Shopware\Filesystem\PublicConfig($value['public']);
            unset($value['public']);
        }
    
        if (isset($value['temp'])) {
            $this->temp = new \Symfony\Config\Shopware\Filesystem\TempConfig($value['temp']);
            unset($value['temp']);
        }
    
        if (isset($value['theme'])) {
            $this->theme = new \Symfony\Config\Shopware\Filesystem\ThemeConfig($value['theme']);
            unset($value['theme']);
        }
    
        if (isset($value['asset'])) {
            $this->asset = new \Symfony\Config\Shopware\Filesystem\AssetConfig($value['asset']);
            unset($value['asset']);
        }
    
        if (isset($value['sitemap'])) {
            $this->sitemap = new \Symfony\Config\Shopware\Filesystem\SitemapConfig($value['sitemap']);
            unset($value['sitemap']);
        }
    
        if (isset($value['allowed_extensions'])) {
            $this->allowedExtensions = $value['allowed_extensions'];
            unset($value['allowed_extensions']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->private) {
            $output['private'] = $this->private->toArray();
        }
        if (null !== $this->public) {
            $output['public'] = $this->public->toArray();
        }
        if (null !== $this->temp) {
            $output['temp'] = $this->temp->toArray();
        }
        if (null !== $this->theme) {
            $output['theme'] = $this->theme->toArray();
        }
        if (null !== $this->asset) {
            $output['asset'] = $this->asset->toArray();
        }
        if (null !== $this->sitemap) {
            $output['sitemap'] = $this->sitemap->toArray();
        }
        if (null !== $this->allowedExtensions) {
            $output['allowed_extensions'] = $this->allowedExtensions;
        }
    
        return $output;
    }
    

}
