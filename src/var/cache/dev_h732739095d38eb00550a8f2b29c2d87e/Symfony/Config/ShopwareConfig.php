<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Shopware'.\DIRECTORY_SEPARATOR.'FilesystemConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Shopware'.\DIRECTORY_SEPARATOR.'CdnConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Shopware'.\DIRECTORY_SEPARATOR.'ApiConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Shopware'.\DIRECTORY_SEPARATOR.'StoreConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Shopware'.\DIRECTORY_SEPARATOR.'CartConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Shopware'.\DIRECTORY_SEPARATOR.'SalesChannelContextConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Shopware'.\DIRECTORY_SEPARATOR.'AdminWorkerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Shopware'.\DIRECTORY_SEPARATOR.'AutoUpdateConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Shopware'.\DIRECTORY_SEPARATOR.'SitemapConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Shopware'.\DIRECTORY_SEPARATOR.'DeploymentConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Shopware'.\DIRECTORY_SEPARATOR.'MediaConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Shopware'.\DIRECTORY_SEPARATOR.'DalConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Shopware'.\DIRECTORY_SEPARATOR.'FeatureConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Shopware'.\DIRECTORY_SEPARATOR.'LoggerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Shopware'.\DIRECTORY_SEPARATOR.'CacheConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Shopware'.\DIRECTORY_SEPARATOR.'HtmlSanitizerConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class ShopwareConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $filesystem;
    private $cdn;
    private $api;
    private $store;
    private $cart;
    private $salesChannelContext;
    private $adminWorker;
    private $autoUpdate;
    private $sitemap;
    private $deployment;
    private $media;
    private $dal;
    private $feature;
    private $logger;
    private $cache;
    private $htmlSanitizer;
    
    public function filesystem(array $value = []): \Symfony\Config\Shopware\FilesystemConfig
    {
        if (null === $this->filesystem) {
            $this->filesystem = new \Symfony\Config\Shopware\FilesystemConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "filesystem()" has already been initialized. You cannot pass values the second time you call filesystem().');
        }
    
        return $this->filesystem;
    }
    
    public function cdn(array $value = []): \Symfony\Config\Shopware\CdnConfig
    {
        if (null === $this->cdn) {
            $this->cdn = new \Symfony\Config\Shopware\CdnConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "cdn()" has already been initialized. You cannot pass values the second time you call cdn().');
        }
    
        return $this->cdn;
    }
    
    public function api(array $value = []): \Symfony\Config\Shopware\ApiConfig
    {
        if (null === $this->api) {
            $this->api = new \Symfony\Config\Shopware\ApiConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "api()" has already been initialized. You cannot pass values the second time you call api().');
        }
    
        return $this->api;
    }
    
    public function store(array $value = []): \Symfony\Config\Shopware\StoreConfig
    {
        if (null === $this->store) {
            $this->store = new \Symfony\Config\Shopware\StoreConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "store()" has already been initialized. You cannot pass values the second time you call store().');
        }
    
        return $this->store;
    }
    
    public function cart(array $value = []): \Symfony\Config\Shopware\CartConfig
    {
        if (null === $this->cart) {
            $this->cart = new \Symfony\Config\Shopware\CartConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "cart()" has already been initialized. You cannot pass values the second time you call cart().');
        }
    
        return $this->cart;
    }
    
    public function salesChannelContext(array $value = []): \Symfony\Config\Shopware\SalesChannelContextConfig
    {
        if (null === $this->salesChannelContext) {
            $this->salesChannelContext = new \Symfony\Config\Shopware\SalesChannelContextConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "salesChannelContext()" has already been initialized. You cannot pass values the second time you call salesChannelContext().');
        }
    
        return $this->salesChannelContext;
    }
    
    public function adminWorker(array $value = []): \Symfony\Config\Shopware\AdminWorkerConfig
    {
        if (null === $this->adminWorker) {
            $this->adminWorker = new \Symfony\Config\Shopware\AdminWorkerConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "adminWorker()" has already been initialized. You cannot pass values the second time you call adminWorker().');
        }
    
        return $this->adminWorker;
    }
    
    public function autoUpdate(array $value = []): \Symfony\Config\Shopware\AutoUpdateConfig
    {
        if (null === $this->autoUpdate) {
            $this->autoUpdate = new \Symfony\Config\Shopware\AutoUpdateConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "autoUpdate()" has already been initialized. You cannot pass values the second time you call autoUpdate().');
        }
    
        return $this->autoUpdate;
    }
    
    public function sitemap(array $value = []): \Symfony\Config\Shopware\SitemapConfig
    {
        if (null === $this->sitemap) {
            $this->sitemap = new \Symfony\Config\Shopware\SitemapConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "sitemap()" has already been initialized. You cannot pass values the second time you call sitemap().');
        }
    
        return $this->sitemap;
    }
    
    public function deployment(array $value = []): \Symfony\Config\Shopware\DeploymentConfig
    {
        if (null === $this->deployment) {
            $this->deployment = new \Symfony\Config\Shopware\DeploymentConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "deployment()" has already been initialized. You cannot pass values the second time you call deployment().');
        }
    
        return $this->deployment;
    }
    
    public function media(array $value = []): \Symfony\Config\Shopware\MediaConfig
    {
        if (null === $this->media) {
            $this->media = new \Symfony\Config\Shopware\MediaConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "media()" has already been initialized. You cannot pass values the second time you call media().');
        }
    
        return $this->media;
    }
    
    public function dal(array $value = []): \Symfony\Config\Shopware\DalConfig
    {
        if (null === $this->dal) {
            $this->dal = new \Symfony\Config\Shopware\DalConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "dal()" has already been initialized. You cannot pass values the second time you call dal().');
        }
    
        return $this->dal;
    }
    
    public function feature(array $value = []): \Symfony\Config\Shopware\FeatureConfig
    {
        if (null === $this->feature) {
            $this->feature = new \Symfony\Config\Shopware\FeatureConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "feature()" has already been initialized. You cannot pass values the second time you call feature().');
        }
    
        return $this->feature;
    }
    
    public function logger(array $value = []): \Symfony\Config\Shopware\LoggerConfig
    {
        if (null === $this->logger) {
            $this->logger = new \Symfony\Config\Shopware\LoggerConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "logger()" has already been initialized. You cannot pass values the second time you call logger().');
        }
    
        return $this->logger;
    }
    
    public function cache(array $value = []): \Symfony\Config\Shopware\CacheConfig
    {
        if (null === $this->cache) {
            $this->cache = new \Symfony\Config\Shopware\CacheConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "cache()" has already been initialized. You cannot pass values the second time you call cache().');
        }
    
        return $this->cache;
    }
    
    public function htmlSanitizer(array $value = []): \Symfony\Config\Shopware\HtmlSanitizerConfig
    {
        if (null === $this->htmlSanitizer) {
            $this->htmlSanitizer = new \Symfony\Config\Shopware\HtmlSanitizerConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "htmlSanitizer()" has already been initialized. You cannot pass values the second time you call htmlSanitizer().');
        }
    
        return $this->htmlSanitizer;
    }
    
    public function getExtensionAlias(): string
    {
        return 'shopware';
    }
            
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['filesystem'])) {
            $this->filesystem = new \Symfony\Config\Shopware\FilesystemConfig($value['filesystem']);
            unset($value['filesystem']);
        }
    
        if (isset($value['cdn'])) {
            $this->cdn = new \Symfony\Config\Shopware\CdnConfig($value['cdn']);
            unset($value['cdn']);
        }
    
        if (isset($value['api'])) {
            $this->api = new \Symfony\Config\Shopware\ApiConfig($value['api']);
            unset($value['api']);
        }
    
        if (isset($value['store'])) {
            $this->store = new \Symfony\Config\Shopware\StoreConfig($value['store']);
            unset($value['store']);
        }
    
        if (isset($value['cart'])) {
            $this->cart = new \Symfony\Config\Shopware\CartConfig($value['cart']);
            unset($value['cart']);
        }
    
        if (isset($value['sales_channel_context'])) {
            $this->salesChannelContext = new \Symfony\Config\Shopware\SalesChannelContextConfig($value['sales_channel_context']);
            unset($value['sales_channel_context']);
        }
    
        if (isset($value['admin_worker'])) {
            $this->adminWorker = new \Symfony\Config\Shopware\AdminWorkerConfig($value['admin_worker']);
            unset($value['admin_worker']);
        }
    
        if (isset($value['auto_update'])) {
            $this->autoUpdate = new \Symfony\Config\Shopware\AutoUpdateConfig($value['auto_update']);
            unset($value['auto_update']);
        }
    
        if (isset($value['sitemap'])) {
            $this->sitemap = new \Symfony\Config\Shopware\SitemapConfig($value['sitemap']);
            unset($value['sitemap']);
        }
    
        if (isset($value['deployment'])) {
            $this->deployment = new \Symfony\Config\Shopware\DeploymentConfig($value['deployment']);
            unset($value['deployment']);
        }
    
        if (isset($value['media'])) {
            $this->media = new \Symfony\Config\Shopware\MediaConfig($value['media']);
            unset($value['media']);
        }
    
        if (isset($value['dal'])) {
            $this->dal = new \Symfony\Config\Shopware\DalConfig($value['dal']);
            unset($value['dal']);
        }
    
        if (isset($value['feature'])) {
            $this->feature = new \Symfony\Config\Shopware\FeatureConfig($value['feature']);
            unset($value['feature']);
        }
    
        if (isset($value['logger'])) {
            $this->logger = new \Symfony\Config\Shopware\LoggerConfig($value['logger']);
            unset($value['logger']);
        }
    
        if (isset($value['cache'])) {
            $this->cache = new \Symfony\Config\Shopware\CacheConfig($value['cache']);
            unset($value['cache']);
        }
    
        if (isset($value['html_sanitizer'])) {
            $this->htmlSanitizer = new \Symfony\Config\Shopware\HtmlSanitizerConfig($value['html_sanitizer']);
            unset($value['html_sanitizer']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->filesystem) {
            $output['filesystem'] = $this->filesystem->toArray();
        }
        if (null !== $this->cdn) {
            $output['cdn'] = $this->cdn->toArray();
        }
        if (null !== $this->api) {
            $output['api'] = $this->api->toArray();
        }
        if (null !== $this->store) {
            $output['store'] = $this->store->toArray();
        }
        if (null !== $this->cart) {
            $output['cart'] = $this->cart->toArray();
        }
        if (null !== $this->salesChannelContext) {
            $output['sales_channel_context'] = $this->salesChannelContext->toArray();
        }
        if (null !== $this->adminWorker) {
            $output['admin_worker'] = $this->adminWorker->toArray();
        }
        if (null !== $this->autoUpdate) {
            $output['auto_update'] = $this->autoUpdate->toArray();
        }
        if (null !== $this->sitemap) {
            $output['sitemap'] = $this->sitemap->toArray();
        }
        if (null !== $this->deployment) {
            $output['deployment'] = $this->deployment->toArray();
        }
        if (null !== $this->media) {
            $output['media'] = $this->media->toArray();
        }
        if (null !== $this->dal) {
            $output['dal'] = $this->dal->toArray();
        }
        if (null !== $this->feature) {
            $output['feature'] = $this->feature->toArray();
        }
        if (null !== $this->logger) {
            $output['logger'] = $this->logger->toArray();
        }
        if (null !== $this->cache) {
            $output['cache'] = $this->cache->toArray();
        }
        if (null !== $this->htmlSanitizer) {
            $output['html_sanitizer'] = $this->htmlSanitizer->toArray();
        }
    
        return $output;
    }
    

}
