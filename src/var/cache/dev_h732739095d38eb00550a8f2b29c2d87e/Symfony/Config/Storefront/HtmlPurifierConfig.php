<?php

namespace Symfony\Config\Storefront;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class HtmlPurifierConfig 
{
    private $cacheDir;
    private $cacheEnabled;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @deprecated The child node "cacheDir" at path "htmlPurifier" is deprecated.
     * @return $this
     */
    public function cacheDir($value): self
    {
        $this->cacheDir = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @deprecated The child node "cacheEnabled" at path "htmlPurifier" is deprecated.
     * @return $this
     */
    public function cacheEnabled($value): self
    {
        $this->cacheEnabled = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['cacheDir'])) {
            $this->cacheDir = $value['cacheDir'];
            unset($value['cacheDir']);
        }
    
        if (isset($value['cacheEnabled'])) {
            $this->cacheEnabled = $value['cacheEnabled'];
            unset($value['cacheEnabled']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->cacheDir) {
            $output['cacheDir'] = $this->cacheDir;
        }
        if (null !== $this->cacheEnabled) {
            $output['cacheEnabled'] = $this->cacheEnabled;
        }
    
        return $output;
    }
    

}
