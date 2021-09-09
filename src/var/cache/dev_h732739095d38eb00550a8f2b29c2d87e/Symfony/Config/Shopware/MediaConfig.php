<?php

namespace Symfony\Config\Shopware;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class MediaConfig 
{
    private $enableUrlUploadFeature;
    private $enableUrlValidation;
    
    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enableUrlUploadFeature($value): self
    {
        $this->enableUrlUploadFeature = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enableUrlValidation($value): self
    {
        $this->enableUrlValidation = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['enable_url_upload_feature'])) {
            $this->enableUrlUploadFeature = $value['enable_url_upload_feature'];
            unset($value['enable_url_upload_feature']);
        }
    
        if (isset($value['enable_url_validation'])) {
            $this->enableUrlValidation = $value['enable_url_validation'];
            unset($value['enable_url_validation']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->enableUrlUploadFeature) {
            $output['enable_url_upload_feature'] = $this->enableUrlUploadFeature;
        }
        if (null !== $this->enableUrlValidation) {
            $output['enable_url_validation'] = $this->enableUrlValidation;
        }
    
        return $output;
    }
    

}
