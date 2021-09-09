<?php

namespace Symfony\Config\Shopware;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class LoggerConfig 
{
    private $fileRotationCount;
    
    /**
     * @default 14
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function fileRotationCount($value): self
    {
        $this->fileRotationCount = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['file_rotation_count'])) {
            $this->fileRotationCount = $value['file_rotation_count'];
            unset($value['file_rotation_count']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->fileRotationCount) {
            $output['file_rotation_count'] = $this->fileRotationCount;
        }
    
        return $output;
    }
    

}
