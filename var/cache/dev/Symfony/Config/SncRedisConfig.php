<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SncRedis'.\DIRECTORY_SEPARATOR.'ClassConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SncRedis'.\DIRECTORY_SEPARATOR.'ClientConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SncRedis'.\DIRECTORY_SEPARATOR.'MonologConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SncRedisConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $class;
    private $clients;
    private $monolog;
    private $_usedProperties = [];
    
    /**
     * @default {"client":"Predis\\Client","client_options":"Predis\\Configuration\\Options","connection_parameters":"Predis\\Connection\\Parameters","connection_factory":"Snc\\RedisBundle\\Client\\Predis\\Connection\\ConnectionFactory","connection_wrapper":"Snc\\RedisBundle\\Client\\Predis\\Connection\\ConnectionWrapper","phpredis_client":"Redis","relay_client":"Relay\\Relay","phpredis_clusterclient":"RedisCluster","logger":"Snc\\RedisBundle\\Logger\\RedisLogger","data_collector":"Snc\\RedisBundle\\DataCollector\\RedisDataCollector","monolog_handler":"Monolog\\Handler\\RedisHandler"}
    */
    public function class(array $value = []): \Symfony\Config\SncRedis\ClassConfig
    {
        if (null === $this->class) {
            $this->_usedProperties['class'] = true;
            $this->class = new \Symfony\Config\SncRedis\ClassConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "class()" has already been initialized. You cannot pass values the second time you call class().');
        }
    
        return $this->class;
    }
    
    /**
     * @template TValue
     * @param TValue $value
     * @return \Symfony\Config\SncRedis\ClientConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\SncRedis\ClientConfig : static)
     */
    public function client(string $alias, array $value = []): \Symfony\Config\SncRedis\ClientConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['clients'] = true;
            $this->clients[$alias] = $value;
    
            return $this;
        }
    
        if (!isset($this->clients[$alias]) || !$this->clients[$alias] instanceof \Symfony\Config\SncRedis\ClientConfig) {
            $this->_usedProperties['clients'] = true;
            $this->clients[$alias] = new \Symfony\Config\SncRedis\ClientConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "client()" has already been initialized. You cannot pass values the second time you call client().');
        }
    
        return $this->clients[$alias];
    }
    
    public function monolog(array $value = []): \Symfony\Config\SncRedis\MonologConfig
    {
        if (null === $this->monolog) {
            $this->_usedProperties['monolog'] = true;
            $this->monolog = new \Symfony\Config\SncRedis\MonologConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "monolog()" has already been initialized. You cannot pass values the second time you call monolog().');
        }
    
        return $this->monolog;
    }
    
    public function getExtensionAlias(): string
    {
        return 'snc_redis';
    }
    
    public function __construct(array $value = [])
    {
        if (array_key_exists('class', $value)) {
            $this->_usedProperties['class'] = true;
            $this->class = new \Symfony\Config\SncRedis\ClassConfig($value['class']);
            unset($value['class']);
        }
    
        if (array_key_exists('clients', $value)) {
            $this->_usedProperties['clients'] = true;
            $this->clients = array_map(fn ($v) => \is_array($v) ? new \Symfony\Config\SncRedis\ClientConfig($v) : $v, $value['clients']);
            unset($value['clients']);
        }
    
        if (array_key_exists('monolog', $value)) {
            $this->_usedProperties['monolog'] = true;
            $this->monolog = new \Symfony\Config\SncRedis\MonologConfig($value['monolog']);
            unset($value['monolog']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['class'])) {
            $output['class'] = $this->class->toArray();
        }
        if (isset($this->_usedProperties['clients'])) {
            $output['clients'] = array_map(fn ($v) => $v instanceof \Symfony\Config\SncRedis\ClientConfig ? $v->toArray() : $v, $this->clients);
        }
        if (isset($this->_usedProperties['monolog'])) {
            $output['monolog'] = $this->monolog->toArray();
        }
    
        return $output;
    }

}
