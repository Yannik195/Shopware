<?php

namespace Symfony\Config\Shopware;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class AdminWorkerConfig 
{
    private $transports;
    private $pollInterval;
    private $enableAdminWorker;
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function transports($value): self
    {
        $this->transports = $value;
    
        return $this;
    }
    
    /**
     * @default 20
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function pollInterval($value): self
    {
        $this->pollInterval = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enableAdminWorker($value): self
    {
        $this->enableAdminWorker = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['transports'])) {
            $this->transports = $value['transports'];
            unset($value['transports']);
        }
    
        if (isset($value['poll_interval'])) {
            $this->pollInterval = $value['poll_interval'];
            unset($value['poll_interval']);
        }
    
        if (isset($value['enable_admin_worker'])) {
            $this->enableAdminWorker = $value['enable_admin_worker'];
            unset($value['enable_admin_worker']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->transports) {
            $output['transports'] = $this->transports;
        }
        if (null !== $this->pollInterval) {
            $output['poll_interval'] = $this->pollInterval;
        }
        if (null !== $this->enableAdminWorker) {
            $output['enable_admin_worker'] = $this->enableAdminWorker;
        }
    
        return $output;
    }
    

}
