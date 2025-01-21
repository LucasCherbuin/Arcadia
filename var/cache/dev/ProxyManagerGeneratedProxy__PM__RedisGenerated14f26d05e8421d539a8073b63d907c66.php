<?php

namespace ProxyManagerGeneratedProxy\__PM__\Redis;

class Generated14f26d05e8421d539a8073b63d907c66 extends \Redis implements \ProxyManager\Proxy\AccessInterceptorValueHolderInterface
{
    /**
     * @var \Redis|null wrapped object, if the proxy is initialized
     */
    private $valueHolder612d2 = null;

    /**
     * @var \Closure[] map of interceptors to be called per-method before execution
     */
    private $methodPrefixInterceptorsa6e22 = [
        
    ];

    /**
     * @var \Closure[] map of interceptors to be called per-method after execution
     */
    private $methodSuffixInterceptorsb194e = [
        
    ];

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5fa21 = [
        
    ];

    private static $signature14f26d05e8421d539a8073b63d907c66 = 'YTo0OntzOjk6ImNsYXNzTmFtZSI7czo1OiJSZWRpcyI7czo3OiJmYWN0b3J5IjtzOjU2OiJQcm94eU1hbmFnZXJcRmFjdG9yeVxBY2Nlc3NJbnRlcmNlcHRvclZhbHVlSG9sZGVyRmFjdG9yeSI7czoxOToicHJveHlNYW5hZ2VyVmVyc2lvbiI7czo0ODoidjEuMC4xOEAyYzhhNmNmZmMzMjIwZTk5MzUyYWQ5NThmZTdjZjA2YmY2Zjc2OTBmIjtzOjEyOiJwcm94eU9wdGlvbnMiO2E6MDp7fX0=';

    public function __destruct()
    {
        if (isset($this->methodPrefixInterceptorsa6e22['__destruct'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['__destruct']->__invoke($this, $this->valueHolder612d2, '__destruct', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->__destruct();

        if (isset($this->methodSuffixInterceptorsb194e['__destruct'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['__destruct']->__invoke($this, $this->valueHolder612d2, '__destruct', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function _compress(string $value) : string
    {
        if (isset($this->methodPrefixInterceptorsa6e22['_compress'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['_compress']->__invoke($this, $this->valueHolder612d2, '_compress', array('value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->_compress($value);

        if (isset($this->methodSuffixInterceptorsb194e['_compress'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['_compress']->__invoke($this, $this->valueHolder612d2, '_compress', array('value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function _uncompress(string $value) : string
    {
        if (isset($this->methodPrefixInterceptorsa6e22['_uncompress'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['_uncompress']->__invoke($this, $this->valueHolder612d2, '_uncompress', array('value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->_uncompress($value);

        if (isset($this->methodSuffixInterceptorsb194e['_uncompress'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['_uncompress']->__invoke($this, $this->valueHolder612d2, '_uncompress', array('value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function _prefix(string $key) : string
    {
        if (isset($this->methodPrefixInterceptorsa6e22['_prefix'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['_prefix']->__invoke($this, $this->valueHolder612d2, '_prefix', array('key' => $key), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->_prefix($key);

        if (isset($this->methodSuffixInterceptorsb194e['_prefix'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['_prefix']->__invoke($this, $this->valueHolder612d2, '_prefix', array('key' => $key), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function _serialize(mixed $value) : string
    {
        if (isset($this->methodPrefixInterceptorsa6e22['_serialize'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['_serialize']->__invoke($this, $this->valueHolder612d2, '_serialize', array('value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->_serialize($value);

        if (isset($this->methodSuffixInterceptorsb194e['_serialize'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['_serialize']->__invoke($this, $this->valueHolder612d2, '_serialize', array('value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function _unserialize(string $value) : mixed
    {
        if (isset($this->methodPrefixInterceptorsa6e22['_unserialize'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['_unserialize']->__invoke($this, $this->valueHolder612d2, '_unserialize', array('value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->_unserialize($value);

        if (isset($this->methodSuffixInterceptorsb194e['_unserialize'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['_unserialize']->__invoke($this, $this->valueHolder612d2, '_unserialize', array('value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function _pack(mixed $value) : string
    {
        if (isset($this->methodPrefixInterceptorsa6e22['_pack'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['_pack']->__invoke($this, $this->valueHolder612d2, '_pack', array('value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->_pack($value);

        if (isset($this->methodSuffixInterceptorsb194e['_pack'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['_pack']->__invoke($this, $this->valueHolder612d2, '_pack', array('value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function _unpack(string $value) : mixed
    {
        if (isset($this->methodPrefixInterceptorsa6e22['_unpack'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['_unpack']->__invoke($this, $this->valueHolder612d2, '_unpack', array('value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->_unpack($value);

        if (isset($this->methodSuffixInterceptorsb194e['_unpack'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['_unpack']->__invoke($this, $this->valueHolder612d2, '_unpack', array('value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function acl(string $subcmd, string ... $args) : mixed
    {
        if (isset($this->methodPrefixInterceptorsa6e22['acl'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['acl']->__invoke($this, $this->valueHolder612d2, 'acl', array('subcmd' => $subcmd, 'args' => $args), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->acl($subcmd, ...$args);

        if (isset($this->methodSuffixInterceptorsb194e['acl'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['acl']->__invoke($this, $this->valueHolder612d2, 'acl', array('subcmd' => $subcmd, 'args' => $args), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function append(string $key, mixed $value) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['append'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['append']->__invoke($this, $this->valueHolder612d2, 'append', array('key' => $key, 'value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->append($key, $value);

        if (isset($this->methodSuffixInterceptorsb194e['append'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['append']->__invoke($this, $this->valueHolder612d2, 'append', array('key' => $key, 'value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function auth(mixed $credentials) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptorsa6e22['auth'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['auth']->__invoke($this, $this->valueHolder612d2, 'auth', array('credentials' => $credentials), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->auth($credentials);

        if (isset($this->methodSuffixInterceptorsb194e['auth'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['auth']->__invoke($this, $this->valueHolder612d2, 'auth', array('credentials' => $credentials), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function bgSave() : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptorsa6e22['bgSave'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['bgSave']->__invoke($this, $this->valueHolder612d2, 'bgSave', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->bgSave();

        if (isset($this->methodSuffixInterceptorsb194e['bgSave'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['bgSave']->__invoke($this, $this->valueHolder612d2, 'bgSave', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function bgrewriteaof() : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptorsa6e22['bgrewriteaof'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['bgrewriteaof']->__invoke($this, $this->valueHolder612d2, 'bgrewriteaof', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->bgrewriteaof();

        if (isset($this->methodSuffixInterceptorsb194e['bgrewriteaof'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['bgrewriteaof']->__invoke($this, $this->valueHolder612d2, 'bgrewriteaof', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function waitaof(int $numlocal, int $numreplicas, int $timeout) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['waitaof'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['waitaof']->__invoke($this, $this->valueHolder612d2, 'waitaof', array('numlocal' => $numlocal, 'numreplicas' => $numreplicas, 'timeout' => $timeout), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->waitaof($numlocal, $numreplicas, $timeout);

        if (isset($this->methodSuffixInterceptorsb194e['waitaof'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['waitaof']->__invoke($this, $this->valueHolder612d2, 'waitaof', array('numlocal' => $numlocal, 'numreplicas' => $numreplicas, 'timeout' => $timeout), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function bitcount(string $key, int $start = 0, int $end = -1, bool $bybit = false) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['bitcount'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['bitcount']->__invoke($this, $this->valueHolder612d2, 'bitcount', array('key' => $key, 'start' => $start, 'end' => $end, 'bybit' => $bybit), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->bitcount($key, $start, $end, $bybit);

        if (isset($this->methodSuffixInterceptorsb194e['bitcount'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['bitcount']->__invoke($this, $this->valueHolder612d2, 'bitcount', array('key' => $key, 'start' => $start, 'end' => $end, 'bybit' => $bybit), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function bitop(string $operation, string $deskey, string $srckey, string ... $other_keys) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['bitop'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['bitop']->__invoke($this, $this->valueHolder612d2, 'bitop', array('operation' => $operation, 'deskey' => $deskey, 'srckey' => $srckey, 'other_keys' => $other_keys), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->bitop($operation, $deskey, $srckey, ...$other_keys);

        if (isset($this->methodSuffixInterceptorsb194e['bitop'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['bitop']->__invoke($this, $this->valueHolder612d2, 'bitop', array('operation' => $operation, 'deskey' => $deskey, 'srckey' => $srckey, 'other_keys' => $other_keys), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function bitpos(string $key, bool $bit, int $start = 0, int $end = -1, bool $bybit = false) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['bitpos'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['bitpos']->__invoke($this, $this->valueHolder612d2, 'bitpos', array('key' => $key, 'bit' => $bit, 'start' => $start, 'end' => $end, 'bybit' => $bybit), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->bitpos($key, $bit, $start, $end, $bybit);

        if (isset($this->methodSuffixInterceptorsb194e['bitpos'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['bitpos']->__invoke($this, $this->valueHolder612d2, 'bitpos', array('key' => $key, 'bit' => $bit, 'start' => $start, 'end' => $end, 'bybit' => $bybit), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function blPop(string|array $key_or_keys, int|float|string $timeout_or_key, mixed ... $extra_args) : \Redis|array|false|null
    {
        if (isset($this->methodPrefixInterceptorsa6e22['blPop'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['blPop']->__invoke($this, $this->valueHolder612d2, 'blPop', array('key_or_keys' => $key_or_keys, 'timeout_or_key' => $timeout_or_key, 'extra_args' => $extra_args), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->blPop($key_or_keys, $timeout_or_key, ...$extra_args);

        if (isset($this->methodSuffixInterceptorsb194e['blPop'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['blPop']->__invoke($this, $this->valueHolder612d2, 'blPop', array('key_or_keys' => $key_or_keys, 'timeout_or_key' => $timeout_or_key, 'extra_args' => $extra_args), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function brPop(string|array $key_or_keys, int|float|string $timeout_or_key, mixed ... $extra_args) : \Redis|array|false|null
    {
        if (isset($this->methodPrefixInterceptorsa6e22['brPop'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['brPop']->__invoke($this, $this->valueHolder612d2, 'brPop', array('key_or_keys' => $key_or_keys, 'timeout_or_key' => $timeout_or_key, 'extra_args' => $extra_args), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->brPop($key_or_keys, $timeout_or_key, ...$extra_args);

        if (isset($this->methodSuffixInterceptorsb194e['brPop'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['brPop']->__invoke($this, $this->valueHolder612d2, 'brPop', array('key_or_keys' => $key_or_keys, 'timeout_or_key' => $timeout_or_key, 'extra_args' => $extra_args), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function brpoplpush(string $src, string $dst, int|float $timeout) : \Redis|string|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['brpoplpush'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['brpoplpush']->__invoke($this, $this->valueHolder612d2, 'brpoplpush', array('src' => $src, 'dst' => $dst, 'timeout' => $timeout), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->brpoplpush($src, $dst, $timeout);

        if (isset($this->methodSuffixInterceptorsb194e['brpoplpush'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['brpoplpush']->__invoke($this, $this->valueHolder612d2, 'brpoplpush', array('src' => $src, 'dst' => $dst, 'timeout' => $timeout), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function bzPopMax(string|array $key, int|string $timeout_or_key, mixed ... $extra_args) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['bzPopMax'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['bzPopMax']->__invoke($this, $this->valueHolder612d2, 'bzPopMax', array('key' => $key, 'timeout_or_key' => $timeout_or_key, 'extra_args' => $extra_args), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->bzPopMax($key, $timeout_or_key, ...$extra_args);

        if (isset($this->methodSuffixInterceptorsb194e['bzPopMax'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['bzPopMax']->__invoke($this, $this->valueHolder612d2, 'bzPopMax', array('key' => $key, 'timeout_or_key' => $timeout_or_key, 'extra_args' => $extra_args), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function bzPopMin(string|array $key, int|string $timeout_or_key, mixed ... $extra_args) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['bzPopMin'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['bzPopMin']->__invoke($this, $this->valueHolder612d2, 'bzPopMin', array('key' => $key, 'timeout_or_key' => $timeout_or_key, 'extra_args' => $extra_args), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->bzPopMin($key, $timeout_or_key, ...$extra_args);

        if (isset($this->methodSuffixInterceptorsb194e['bzPopMin'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['bzPopMin']->__invoke($this, $this->valueHolder612d2, 'bzPopMin', array('key' => $key, 'timeout_or_key' => $timeout_or_key, 'extra_args' => $extra_args), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function bzmpop(float $timeout, array $keys, string $from, int $count = 1) : \Redis|array|false|null
    {
        if (isset($this->methodPrefixInterceptorsa6e22['bzmpop'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['bzmpop']->__invoke($this, $this->valueHolder612d2, 'bzmpop', array('timeout' => $timeout, 'keys' => $keys, 'from' => $from, 'count' => $count), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->bzmpop($timeout, $keys, $from, $count);

        if (isset($this->methodSuffixInterceptorsb194e['bzmpop'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['bzmpop']->__invoke($this, $this->valueHolder612d2, 'bzmpop', array('timeout' => $timeout, 'keys' => $keys, 'from' => $from, 'count' => $count), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zmpop(array $keys, string $from, int $count = 1) : \Redis|array|false|null
    {
        if (isset($this->methodPrefixInterceptorsa6e22['zmpop'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['zmpop']->__invoke($this, $this->valueHolder612d2, 'zmpop', array('keys' => $keys, 'from' => $from, 'count' => $count), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->zmpop($keys, $from, $count);

        if (isset($this->methodSuffixInterceptorsb194e['zmpop'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['zmpop']->__invoke($this, $this->valueHolder612d2, 'zmpop', array('keys' => $keys, 'from' => $from, 'count' => $count), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function blmpop(float $timeout, array $keys, string $from, int $count = 1) : \Redis|array|false|null
    {
        if (isset($this->methodPrefixInterceptorsa6e22['blmpop'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['blmpop']->__invoke($this, $this->valueHolder612d2, 'blmpop', array('timeout' => $timeout, 'keys' => $keys, 'from' => $from, 'count' => $count), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->blmpop($timeout, $keys, $from, $count);

        if (isset($this->methodSuffixInterceptorsb194e['blmpop'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['blmpop']->__invoke($this, $this->valueHolder612d2, 'blmpop', array('timeout' => $timeout, 'keys' => $keys, 'from' => $from, 'count' => $count), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function lmpop(array $keys, string $from, int $count = 1) : \Redis|array|false|null
    {
        if (isset($this->methodPrefixInterceptorsa6e22['lmpop'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['lmpop']->__invoke($this, $this->valueHolder612d2, 'lmpop', array('keys' => $keys, 'from' => $from, 'count' => $count), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->lmpop($keys, $from, $count);

        if (isset($this->methodSuffixInterceptorsb194e['lmpop'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['lmpop']->__invoke($this, $this->valueHolder612d2, 'lmpop', array('keys' => $keys, 'from' => $from, 'count' => $count), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function clearLastError() : bool
    {
        if (isset($this->methodPrefixInterceptorsa6e22['clearLastError'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['clearLastError']->__invoke($this, $this->valueHolder612d2, 'clearLastError', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->clearLastError();

        if (isset($this->methodSuffixInterceptorsb194e['clearLastError'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['clearLastError']->__invoke($this, $this->valueHolder612d2, 'clearLastError', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function client(string $opt, mixed ... $args) : mixed
    {
        if (isset($this->methodPrefixInterceptorsa6e22['client'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['client']->__invoke($this, $this->valueHolder612d2, 'client', array('opt' => $opt, 'args' => $args), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->client($opt, ...$args);

        if (isset($this->methodSuffixInterceptorsb194e['client'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['client']->__invoke($this, $this->valueHolder612d2, 'client', array('opt' => $opt, 'args' => $args), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function close() : bool
    {
        if (isset($this->methodPrefixInterceptorsa6e22['close'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['close']->__invoke($this, $this->valueHolder612d2, 'close', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->close();

        if (isset($this->methodSuffixInterceptorsb194e['close'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['close']->__invoke($this, $this->valueHolder612d2, 'close', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function command(?string $opt = null, mixed ... $args) : mixed
    {
        if (isset($this->methodPrefixInterceptorsa6e22['command'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['command']->__invoke($this, $this->valueHolder612d2, 'command', array('opt' => $opt, 'args' => $args), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->command($opt, ...$args);

        if (isset($this->methodSuffixInterceptorsb194e['command'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['command']->__invoke($this, $this->valueHolder612d2, 'command', array('opt' => $opt, 'args' => $args), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function config(string $operation, string|array|null $key_or_settings = null, ?string $value = null) : mixed
    {
        if (isset($this->methodPrefixInterceptorsa6e22['config'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['config']->__invoke($this, $this->valueHolder612d2, 'config', array('operation' => $operation, 'key_or_settings' => $key_or_settings, 'value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->config($operation, $key_or_settings, $value);

        if (isset($this->methodSuffixInterceptorsb194e['config'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['config']->__invoke($this, $this->valueHolder612d2, 'config', array('operation' => $operation, 'key_or_settings' => $key_or_settings, 'value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function connect(string $host, int $port = 6379, float $timeout = 0, ?string $persistent_id = null, int $retry_interval = 0, float $read_timeout = 0, ?array $context = null) : bool
    {
        if (isset($this->methodPrefixInterceptorsa6e22['connect'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['connect']->__invoke($this, $this->valueHolder612d2, 'connect', array('host' => $host, 'port' => $port, 'timeout' => $timeout, 'persistent_id' => $persistent_id, 'retry_interval' => $retry_interval, 'read_timeout' => $read_timeout, 'context' => $context), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->connect($host, $port, $timeout, $persistent_id, $retry_interval, $read_timeout, $context);

        if (isset($this->methodSuffixInterceptorsb194e['connect'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['connect']->__invoke($this, $this->valueHolder612d2, 'connect', array('host' => $host, 'port' => $port, 'timeout' => $timeout, 'persistent_id' => $persistent_id, 'retry_interval' => $retry_interval, 'read_timeout' => $read_timeout, 'context' => $context), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function copy(string $src, string $dst, ?array $options = null) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptorsa6e22['copy'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['copy']->__invoke($this, $this->valueHolder612d2, 'copy', array('src' => $src, 'dst' => $dst, 'options' => $options), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->copy($src, $dst, $options);

        if (isset($this->methodSuffixInterceptorsb194e['copy'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['copy']->__invoke($this, $this->valueHolder612d2, 'copy', array('src' => $src, 'dst' => $dst, 'options' => $options), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function dbSize() : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['dbSize'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['dbSize']->__invoke($this, $this->valueHolder612d2, 'dbSize', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->dbSize();

        if (isset($this->methodSuffixInterceptorsb194e['dbSize'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['dbSize']->__invoke($this, $this->valueHolder612d2, 'dbSize', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function debug(string $key) : \Redis|string
    {
        if (isset($this->methodPrefixInterceptorsa6e22['debug'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['debug']->__invoke($this, $this->valueHolder612d2, 'debug', array('key' => $key), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->debug($key);

        if (isset($this->methodSuffixInterceptorsb194e['debug'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['debug']->__invoke($this, $this->valueHolder612d2, 'debug', array('key' => $key), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function decr(string $key, int $by = 1) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['decr'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['decr']->__invoke($this, $this->valueHolder612d2, 'decr', array('key' => $key, 'by' => $by), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->decr($key, $by);

        if (isset($this->methodSuffixInterceptorsb194e['decr'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['decr']->__invoke($this, $this->valueHolder612d2, 'decr', array('key' => $key, 'by' => $by), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function decrBy(string $key, int $value) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['decrBy'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['decrBy']->__invoke($this, $this->valueHolder612d2, 'decrBy', array('key' => $key, 'value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->decrBy($key, $value);

        if (isset($this->methodSuffixInterceptorsb194e['decrBy'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['decrBy']->__invoke($this, $this->valueHolder612d2, 'decrBy', array('key' => $key, 'value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function del(string|array $key, string ... $other_keys) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['del'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['del']->__invoke($this, $this->valueHolder612d2, 'del', array('key' => $key, 'other_keys' => $other_keys), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->del($key, ...$other_keys);

        if (isset($this->methodSuffixInterceptorsb194e['del'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['del']->__invoke($this, $this->valueHolder612d2, 'del', array('key' => $key, 'other_keys' => $other_keys), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function delete(string|array $key, string ... $other_keys) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['delete'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['delete']->__invoke($this, $this->valueHolder612d2, 'delete', array('key' => $key, 'other_keys' => $other_keys), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->delete($key, ...$other_keys);

        if (isset($this->methodSuffixInterceptorsb194e['delete'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['delete']->__invoke($this, $this->valueHolder612d2, 'delete', array('key' => $key, 'other_keys' => $other_keys), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function discard() : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptorsa6e22['discard'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['discard']->__invoke($this, $this->valueHolder612d2, 'discard', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->discard();

        if (isset($this->methodSuffixInterceptorsb194e['discard'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['discard']->__invoke($this, $this->valueHolder612d2, 'discard', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function dump(string $key) : \Redis|string|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['dump'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['dump']->__invoke($this, $this->valueHolder612d2, 'dump', array('key' => $key), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->dump($key);

        if (isset($this->methodSuffixInterceptorsb194e['dump'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['dump']->__invoke($this, $this->valueHolder612d2, 'dump', array('key' => $key), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function echo(string $str) : \Redis|string|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['echo'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['echo']->__invoke($this, $this->valueHolder612d2, 'echo', array('str' => $str), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->echo($str);

        if (isset($this->methodSuffixInterceptorsb194e['echo'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['echo']->__invoke($this, $this->valueHolder612d2, 'echo', array('str' => $str), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function eval(string $script, array $args = [], int $num_keys = 0) : mixed
    {
        if (isset($this->methodPrefixInterceptorsa6e22['eval'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['eval']->__invoke($this, $this->valueHolder612d2, 'eval', array('script' => $script, 'args' => $args, 'num_keys' => $num_keys), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->eval($script, $args, $num_keys);

        if (isset($this->methodSuffixInterceptorsb194e['eval'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['eval']->__invoke($this, $this->valueHolder612d2, 'eval', array('script' => $script, 'args' => $args, 'num_keys' => $num_keys), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function eval_ro(string $script_sha, array $args = [], int $num_keys = 0) : mixed
    {
        if (isset($this->methodPrefixInterceptorsa6e22['eval_ro'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['eval_ro']->__invoke($this, $this->valueHolder612d2, 'eval_ro', array('script_sha' => $script_sha, 'args' => $args, 'num_keys' => $num_keys), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->eval_ro($script_sha, $args, $num_keys);

        if (isset($this->methodSuffixInterceptorsb194e['eval_ro'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['eval_ro']->__invoke($this, $this->valueHolder612d2, 'eval_ro', array('script_sha' => $script_sha, 'args' => $args, 'num_keys' => $num_keys), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function evalsha(string $sha1, array $args = [], int $num_keys = 0) : mixed
    {
        if (isset($this->methodPrefixInterceptorsa6e22['evalsha'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['evalsha']->__invoke($this, $this->valueHolder612d2, 'evalsha', array('sha1' => $sha1, 'args' => $args, 'num_keys' => $num_keys), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->evalsha($sha1, $args, $num_keys);

        if (isset($this->methodSuffixInterceptorsb194e['evalsha'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['evalsha']->__invoke($this, $this->valueHolder612d2, 'evalsha', array('sha1' => $sha1, 'args' => $args, 'num_keys' => $num_keys), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function evalsha_ro(string $sha1, array $args = [], int $num_keys = 0) : mixed
    {
        if (isset($this->methodPrefixInterceptorsa6e22['evalsha_ro'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['evalsha_ro']->__invoke($this, $this->valueHolder612d2, 'evalsha_ro', array('sha1' => $sha1, 'args' => $args, 'num_keys' => $num_keys), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->evalsha_ro($sha1, $args, $num_keys);

        if (isset($this->methodSuffixInterceptorsb194e['evalsha_ro'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['evalsha_ro']->__invoke($this, $this->valueHolder612d2, 'evalsha_ro', array('sha1' => $sha1, 'args' => $args, 'num_keys' => $num_keys), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function exec() : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['exec'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['exec']->__invoke($this, $this->valueHolder612d2, 'exec', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->exec();

        if (isset($this->methodSuffixInterceptorsb194e['exec'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['exec']->__invoke($this, $this->valueHolder612d2, 'exec', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function exists(mixed $key, mixed ... $other_keys) : \Redis|bool|int
    {
        if (isset($this->methodPrefixInterceptorsa6e22['exists'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['exists']->__invoke($this, $this->valueHolder612d2, 'exists', array('key' => $key, 'other_keys' => $other_keys), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->exists($key, ...$other_keys);

        if (isset($this->methodSuffixInterceptorsb194e['exists'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['exists']->__invoke($this, $this->valueHolder612d2, 'exists', array('key' => $key, 'other_keys' => $other_keys), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function expire(string $key, int $timeout, ?string $mode = null) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptorsa6e22['expire'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['expire']->__invoke($this, $this->valueHolder612d2, 'expire', array('key' => $key, 'timeout' => $timeout, 'mode' => $mode), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->expire($key, $timeout, $mode);

        if (isset($this->methodSuffixInterceptorsb194e['expire'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['expire']->__invoke($this, $this->valueHolder612d2, 'expire', array('key' => $key, 'timeout' => $timeout, 'mode' => $mode), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function expireAt(string $key, int $timestamp, ?string $mode = null) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptorsa6e22['expireAt'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['expireAt']->__invoke($this, $this->valueHolder612d2, 'expireAt', array('key' => $key, 'timestamp' => $timestamp, 'mode' => $mode), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->expireAt($key, $timestamp, $mode);

        if (isset($this->methodSuffixInterceptorsb194e['expireAt'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['expireAt']->__invoke($this, $this->valueHolder612d2, 'expireAt', array('key' => $key, 'timestamp' => $timestamp, 'mode' => $mode), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function failover(?array $to = null, bool $abort = false, int $timeout = 0) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptorsa6e22['failover'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['failover']->__invoke($this, $this->valueHolder612d2, 'failover', array('to' => $to, 'abort' => $abort, 'timeout' => $timeout), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->failover($to, $abort, $timeout);

        if (isset($this->methodSuffixInterceptorsb194e['failover'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['failover']->__invoke($this, $this->valueHolder612d2, 'failover', array('to' => $to, 'abort' => $abort, 'timeout' => $timeout), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function expiretime(string $key) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['expiretime'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['expiretime']->__invoke($this, $this->valueHolder612d2, 'expiretime', array('key' => $key), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->expiretime($key);

        if (isset($this->methodSuffixInterceptorsb194e['expiretime'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['expiretime']->__invoke($this, $this->valueHolder612d2, 'expiretime', array('key' => $key), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function pexpiretime(string $key) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['pexpiretime'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['pexpiretime']->__invoke($this, $this->valueHolder612d2, 'pexpiretime', array('key' => $key), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->pexpiretime($key);

        if (isset($this->methodSuffixInterceptorsb194e['pexpiretime'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['pexpiretime']->__invoke($this, $this->valueHolder612d2, 'pexpiretime', array('key' => $key), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function fcall(string $fn, array $keys = [], array $args = []) : mixed
    {
        if (isset($this->methodPrefixInterceptorsa6e22['fcall'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['fcall']->__invoke($this, $this->valueHolder612d2, 'fcall', array('fn' => $fn, 'keys' => $keys, 'args' => $args), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->fcall($fn, $keys, $args);

        if (isset($this->methodSuffixInterceptorsb194e['fcall'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['fcall']->__invoke($this, $this->valueHolder612d2, 'fcall', array('fn' => $fn, 'keys' => $keys, 'args' => $args), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function fcall_ro(string $fn, array $keys = [], array $args = []) : mixed
    {
        if (isset($this->methodPrefixInterceptorsa6e22['fcall_ro'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['fcall_ro']->__invoke($this, $this->valueHolder612d2, 'fcall_ro', array('fn' => $fn, 'keys' => $keys, 'args' => $args), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->fcall_ro($fn, $keys, $args);

        if (isset($this->methodSuffixInterceptorsb194e['fcall_ro'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['fcall_ro']->__invoke($this, $this->valueHolder612d2, 'fcall_ro', array('fn' => $fn, 'keys' => $keys, 'args' => $args), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function flushAll(?bool $sync = null) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptorsa6e22['flushAll'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['flushAll']->__invoke($this, $this->valueHolder612d2, 'flushAll', array('sync' => $sync), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->flushAll($sync);

        if (isset($this->methodSuffixInterceptorsb194e['flushAll'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['flushAll']->__invoke($this, $this->valueHolder612d2, 'flushAll', array('sync' => $sync), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function flushDB(?bool $sync = null) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptorsa6e22['flushDB'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['flushDB']->__invoke($this, $this->valueHolder612d2, 'flushDB', array('sync' => $sync), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->flushDB($sync);

        if (isset($this->methodSuffixInterceptorsb194e['flushDB'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['flushDB']->__invoke($this, $this->valueHolder612d2, 'flushDB', array('sync' => $sync), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function function(string $operation, mixed ... $args) : \Redis|bool|string|array
    {
        if (isset($this->methodPrefixInterceptorsa6e22['function'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['function']->__invoke($this, $this->valueHolder612d2, 'function', array('operation' => $operation, 'args' => $args), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->function($operation, ...$args);

        if (isset($this->methodSuffixInterceptorsb194e['function'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['function']->__invoke($this, $this->valueHolder612d2, 'function', array('operation' => $operation, 'args' => $args), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function geoadd(string $key, float $lng, float $lat, string $member, mixed ... $other_triples_and_options) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['geoadd'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['geoadd']->__invoke($this, $this->valueHolder612d2, 'geoadd', array('key' => $key, 'lng' => $lng, 'lat' => $lat, 'member' => $member, 'other_triples_and_options' => $other_triples_and_options), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->geoadd($key, $lng, $lat, $member, ...$other_triples_and_options);

        if (isset($this->methodSuffixInterceptorsb194e['geoadd'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['geoadd']->__invoke($this, $this->valueHolder612d2, 'geoadd', array('key' => $key, 'lng' => $lng, 'lat' => $lat, 'member' => $member, 'other_triples_and_options' => $other_triples_and_options), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function geodist(string $key, string $src, string $dst, ?string $unit = null) : \Redis|float|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['geodist'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['geodist']->__invoke($this, $this->valueHolder612d2, 'geodist', array('key' => $key, 'src' => $src, 'dst' => $dst, 'unit' => $unit), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->geodist($key, $src, $dst, $unit);

        if (isset($this->methodSuffixInterceptorsb194e['geodist'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['geodist']->__invoke($this, $this->valueHolder612d2, 'geodist', array('key' => $key, 'src' => $src, 'dst' => $dst, 'unit' => $unit), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function geohash(string $key, string $member, string ... $other_members) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['geohash'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['geohash']->__invoke($this, $this->valueHolder612d2, 'geohash', array('key' => $key, 'member' => $member, 'other_members' => $other_members), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->geohash($key, $member, ...$other_members);

        if (isset($this->methodSuffixInterceptorsb194e['geohash'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['geohash']->__invoke($this, $this->valueHolder612d2, 'geohash', array('key' => $key, 'member' => $member, 'other_members' => $other_members), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function geopos(string $key, string $member, string ... $other_members) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['geopos'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['geopos']->__invoke($this, $this->valueHolder612d2, 'geopos', array('key' => $key, 'member' => $member, 'other_members' => $other_members), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->geopos($key, $member, ...$other_members);

        if (isset($this->methodSuffixInterceptorsb194e['geopos'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['geopos']->__invoke($this, $this->valueHolder612d2, 'geopos', array('key' => $key, 'member' => $member, 'other_members' => $other_members), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function georadius(string $key, float $lng, float $lat, float $radius, string $unit, array $options = []) : mixed
    {
        if (isset($this->methodPrefixInterceptorsa6e22['georadius'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['georadius']->__invoke($this, $this->valueHolder612d2, 'georadius', array('key' => $key, 'lng' => $lng, 'lat' => $lat, 'radius' => $radius, 'unit' => $unit, 'options' => $options), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->georadius($key, $lng, $lat, $radius, $unit, $options);

        if (isset($this->methodSuffixInterceptorsb194e['georadius'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['georadius']->__invoke($this, $this->valueHolder612d2, 'georadius', array('key' => $key, 'lng' => $lng, 'lat' => $lat, 'radius' => $radius, 'unit' => $unit, 'options' => $options), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function georadius_ro(string $key, float $lng, float $lat, float $radius, string $unit, array $options = []) : mixed
    {
        if (isset($this->methodPrefixInterceptorsa6e22['georadius_ro'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['georadius_ro']->__invoke($this, $this->valueHolder612d2, 'georadius_ro', array('key' => $key, 'lng' => $lng, 'lat' => $lat, 'radius' => $radius, 'unit' => $unit, 'options' => $options), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->georadius_ro($key, $lng, $lat, $radius, $unit, $options);

        if (isset($this->methodSuffixInterceptorsb194e['georadius_ro'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['georadius_ro']->__invoke($this, $this->valueHolder612d2, 'georadius_ro', array('key' => $key, 'lng' => $lng, 'lat' => $lat, 'radius' => $radius, 'unit' => $unit, 'options' => $options), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function georadiusbymember(string $key, string $member, float $radius, string $unit, array $options = []) : mixed
    {
        if (isset($this->methodPrefixInterceptorsa6e22['georadiusbymember'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['georadiusbymember']->__invoke($this, $this->valueHolder612d2, 'georadiusbymember', array('key' => $key, 'member' => $member, 'radius' => $radius, 'unit' => $unit, 'options' => $options), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->georadiusbymember($key, $member, $radius, $unit, $options);

        if (isset($this->methodSuffixInterceptorsb194e['georadiusbymember'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['georadiusbymember']->__invoke($this, $this->valueHolder612d2, 'georadiusbymember', array('key' => $key, 'member' => $member, 'radius' => $radius, 'unit' => $unit, 'options' => $options), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function georadiusbymember_ro(string $key, string $member, float $radius, string $unit, array $options = []) : mixed
    {
        if (isset($this->methodPrefixInterceptorsa6e22['georadiusbymember_ro'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['georadiusbymember_ro']->__invoke($this, $this->valueHolder612d2, 'georadiusbymember_ro', array('key' => $key, 'member' => $member, 'radius' => $radius, 'unit' => $unit, 'options' => $options), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->georadiusbymember_ro($key, $member, $radius, $unit, $options);

        if (isset($this->methodSuffixInterceptorsb194e['georadiusbymember_ro'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['georadiusbymember_ro']->__invoke($this, $this->valueHolder612d2, 'georadiusbymember_ro', array('key' => $key, 'member' => $member, 'radius' => $radius, 'unit' => $unit, 'options' => $options), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function geosearch(string $key, string|array $position, int|float|array $shape, string $unit, array $options = []) : array
    {
        if (isset($this->methodPrefixInterceptorsa6e22['geosearch'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['geosearch']->__invoke($this, $this->valueHolder612d2, 'geosearch', array('key' => $key, 'position' => $position, 'shape' => $shape, 'unit' => $unit, 'options' => $options), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->geosearch($key, $position, $shape, $unit, $options);

        if (isset($this->methodSuffixInterceptorsb194e['geosearch'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['geosearch']->__invoke($this, $this->valueHolder612d2, 'geosearch', array('key' => $key, 'position' => $position, 'shape' => $shape, 'unit' => $unit, 'options' => $options), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function geosearchstore(string $dst, string $src, string|array $position, int|float|array $shape, string $unit, array $options = []) : \Redis|int|array|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['geosearchstore'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['geosearchstore']->__invoke($this, $this->valueHolder612d2, 'geosearchstore', array('dst' => $dst, 'src' => $src, 'position' => $position, 'shape' => $shape, 'unit' => $unit, 'options' => $options), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->geosearchstore($dst, $src, $position, $shape, $unit, $options);

        if (isset($this->methodSuffixInterceptorsb194e['geosearchstore'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['geosearchstore']->__invoke($this, $this->valueHolder612d2, 'geosearchstore', array('dst' => $dst, 'src' => $src, 'position' => $position, 'shape' => $shape, 'unit' => $unit, 'options' => $options), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function get(string $key) : mixed
    {
        if (isset($this->methodPrefixInterceptorsa6e22['get'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['get']->__invoke($this, $this->valueHolder612d2, 'get', array('key' => $key), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->get($key);

        if (isset($this->methodSuffixInterceptorsb194e['get'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['get']->__invoke($this, $this->valueHolder612d2, 'get', array('key' => $key), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function getAuth() : mixed
    {
        if (isset($this->methodPrefixInterceptorsa6e22['getAuth'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['getAuth']->__invoke($this, $this->valueHolder612d2, 'getAuth', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->getAuth();

        if (isset($this->methodSuffixInterceptorsb194e['getAuth'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['getAuth']->__invoke($this, $this->valueHolder612d2, 'getAuth', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function getBit(string $key, int $idx) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['getBit'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['getBit']->__invoke($this, $this->valueHolder612d2, 'getBit', array('key' => $key, 'idx' => $idx), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->getBit($key, $idx);

        if (isset($this->methodSuffixInterceptorsb194e['getBit'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['getBit']->__invoke($this, $this->valueHolder612d2, 'getBit', array('key' => $key, 'idx' => $idx), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function getEx(string $key, array $options = []) : \Redis|bool|string
    {
        if (isset($this->methodPrefixInterceptorsa6e22['getEx'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['getEx']->__invoke($this, $this->valueHolder612d2, 'getEx', array('key' => $key, 'options' => $options), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->getEx($key, $options);

        if (isset($this->methodSuffixInterceptorsb194e['getEx'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['getEx']->__invoke($this, $this->valueHolder612d2, 'getEx', array('key' => $key, 'options' => $options), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function getDBNum() : int
    {
        if (isset($this->methodPrefixInterceptorsa6e22['getDBNum'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['getDBNum']->__invoke($this, $this->valueHolder612d2, 'getDBNum', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->getDBNum();

        if (isset($this->methodSuffixInterceptorsb194e['getDBNum'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['getDBNum']->__invoke($this, $this->valueHolder612d2, 'getDBNum', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function getDel(string $key) : \Redis|bool|string
    {
        if (isset($this->methodPrefixInterceptorsa6e22['getDel'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['getDel']->__invoke($this, $this->valueHolder612d2, 'getDel', array('key' => $key), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->getDel($key);

        if (isset($this->methodSuffixInterceptorsb194e['getDel'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['getDel']->__invoke($this, $this->valueHolder612d2, 'getDel', array('key' => $key), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function getHost() : string
    {
        if (isset($this->methodPrefixInterceptorsa6e22['getHost'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['getHost']->__invoke($this, $this->valueHolder612d2, 'getHost', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->getHost();

        if (isset($this->methodSuffixInterceptorsb194e['getHost'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['getHost']->__invoke($this, $this->valueHolder612d2, 'getHost', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function getLastError() : ?string
    {
        if (isset($this->methodPrefixInterceptorsa6e22['getLastError'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['getLastError']->__invoke($this, $this->valueHolder612d2, 'getLastError', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->getLastError();

        if (isset($this->methodSuffixInterceptorsb194e['getLastError'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['getLastError']->__invoke($this, $this->valueHolder612d2, 'getLastError', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function getMode() : int
    {
        if (isset($this->methodPrefixInterceptorsa6e22['getMode'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['getMode']->__invoke($this, $this->valueHolder612d2, 'getMode', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->getMode();

        if (isset($this->methodSuffixInterceptorsb194e['getMode'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['getMode']->__invoke($this, $this->valueHolder612d2, 'getMode', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function getOption(int $option) : mixed
    {
        if (isset($this->methodPrefixInterceptorsa6e22['getOption'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['getOption']->__invoke($this, $this->valueHolder612d2, 'getOption', array('option' => $option), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->getOption($option);

        if (isset($this->methodSuffixInterceptorsb194e['getOption'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['getOption']->__invoke($this, $this->valueHolder612d2, 'getOption', array('option' => $option), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function getPersistentID() : ?string
    {
        if (isset($this->methodPrefixInterceptorsa6e22['getPersistentID'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['getPersistentID']->__invoke($this, $this->valueHolder612d2, 'getPersistentID', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->getPersistentID();

        if (isset($this->methodSuffixInterceptorsb194e['getPersistentID'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['getPersistentID']->__invoke($this, $this->valueHolder612d2, 'getPersistentID', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function getPort() : int
    {
        if (isset($this->methodPrefixInterceptorsa6e22['getPort'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['getPort']->__invoke($this, $this->valueHolder612d2, 'getPort', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->getPort();

        if (isset($this->methodSuffixInterceptorsb194e['getPort'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['getPort']->__invoke($this, $this->valueHolder612d2, 'getPort', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function getRange(string $key, int $start, int $end) : \Redis|string|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['getRange'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['getRange']->__invoke($this, $this->valueHolder612d2, 'getRange', array('key' => $key, 'start' => $start, 'end' => $end), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->getRange($key, $start, $end);

        if (isset($this->methodSuffixInterceptorsb194e['getRange'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['getRange']->__invoke($this, $this->valueHolder612d2, 'getRange', array('key' => $key, 'start' => $start, 'end' => $end), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function lcs(string $key1, string $key2, ?array $options = null) : \Redis|int|string|array|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['lcs'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['lcs']->__invoke($this, $this->valueHolder612d2, 'lcs', array('key1' => $key1, 'key2' => $key2, 'options' => $options), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->lcs($key1, $key2, $options);

        if (isset($this->methodSuffixInterceptorsb194e['lcs'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['lcs']->__invoke($this, $this->valueHolder612d2, 'lcs', array('key1' => $key1, 'key2' => $key2, 'options' => $options), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function getReadTimeout() : float
    {
        if (isset($this->methodPrefixInterceptorsa6e22['getReadTimeout'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['getReadTimeout']->__invoke($this, $this->valueHolder612d2, 'getReadTimeout', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->getReadTimeout();

        if (isset($this->methodSuffixInterceptorsb194e['getReadTimeout'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['getReadTimeout']->__invoke($this, $this->valueHolder612d2, 'getReadTimeout', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function getset(string $key, mixed $value) : \Redis|string|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['getset'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['getset']->__invoke($this, $this->valueHolder612d2, 'getset', array('key' => $key, 'value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->getset($key, $value);

        if (isset($this->methodSuffixInterceptorsb194e['getset'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['getset']->__invoke($this, $this->valueHolder612d2, 'getset', array('key' => $key, 'value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function getTimeout() : float|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['getTimeout'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['getTimeout']->__invoke($this, $this->valueHolder612d2, 'getTimeout', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->getTimeout();

        if (isset($this->methodSuffixInterceptorsb194e['getTimeout'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['getTimeout']->__invoke($this, $this->valueHolder612d2, 'getTimeout', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function getTransferredBytes() : array
    {
        if (isset($this->methodPrefixInterceptorsa6e22['getTransferredBytes'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['getTransferredBytes']->__invoke($this, $this->valueHolder612d2, 'getTransferredBytes', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->getTransferredBytes();

        if (isset($this->methodSuffixInterceptorsb194e['getTransferredBytes'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['getTransferredBytes']->__invoke($this, $this->valueHolder612d2, 'getTransferredBytes', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function clearTransferredBytes() : void
    {
        if (isset($this->methodPrefixInterceptorsa6e22['clearTransferredBytes'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['clearTransferredBytes']->__invoke($this, $this->valueHolder612d2, 'clearTransferredBytes', array(), $returnEarly);

            if ($returnEarly) {
                $prefixReturnValue;
return;
            }
        }

        $returnValue = $this->valueHolder612d2->clearTransferredBytes();

        if (isset($this->methodSuffixInterceptorsb194e['clearTransferredBytes'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['clearTransferredBytes']->__invoke($this, $this->valueHolder612d2, 'clearTransferredBytes', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                $suffixReturnValue;
return;
            }
        }

        $returnValue;
return;
    }

    public function hDel(string $key, string $field, string ... $other_fields) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['hDel'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['hDel']->__invoke($this, $this->valueHolder612d2, 'hDel', array('key' => $key, 'field' => $field, 'other_fields' => $other_fields), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->hDel($key, $field, ...$other_fields);

        if (isset($this->methodSuffixInterceptorsb194e['hDel'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['hDel']->__invoke($this, $this->valueHolder612d2, 'hDel', array('key' => $key, 'field' => $field, 'other_fields' => $other_fields), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function hExists(string $key, string $field) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptorsa6e22['hExists'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['hExists']->__invoke($this, $this->valueHolder612d2, 'hExists', array('key' => $key, 'field' => $field), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->hExists($key, $field);

        if (isset($this->methodSuffixInterceptorsb194e['hExists'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['hExists']->__invoke($this, $this->valueHolder612d2, 'hExists', array('key' => $key, 'field' => $field), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function hGet(string $key, string $member) : mixed
    {
        if (isset($this->methodPrefixInterceptorsa6e22['hGet'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['hGet']->__invoke($this, $this->valueHolder612d2, 'hGet', array('key' => $key, 'member' => $member), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->hGet($key, $member);

        if (isset($this->methodSuffixInterceptorsb194e['hGet'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['hGet']->__invoke($this, $this->valueHolder612d2, 'hGet', array('key' => $key, 'member' => $member), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function hGetAll(string $key) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['hGetAll'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['hGetAll']->__invoke($this, $this->valueHolder612d2, 'hGetAll', array('key' => $key), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->hGetAll($key);

        if (isset($this->methodSuffixInterceptorsb194e['hGetAll'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['hGetAll']->__invoke($this, $this->valueHolder612d2, 'hGetAll', array('key' => $key), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function hIncrBy(string $key, string $field, int $value) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['hIncrBy'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['hIncrBy']->__invoke($this, $this->valueHolder612d2, 'hIncrBy', array('key' => $key, 'field' => $field, 'value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->hIncrBy($key, $field, $value);

        if (isset($this->methodSuffixInterceptorsb194e['hIncrBy'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['hIncrBy']->__invoke($this, $this->valueHolder612d2, 'hIncrBy', array('key' => $key, 'field' => $field, 'value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function hIncrByFloat(string $key, string $field, float $value) : \Redis|float|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['hIncrByFloat'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['hIncrByFloat']->__invoke($this, $this->valueHolder612d2, 'hIncrByFloat', array('key' => $key, 'field' => $field, 'value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->hIncrByFloat($key, $field, $value);

        if (isset($this->methodSuffixInterceptorsb194e['hIncrByFloat'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['hIncrByFloat']->__invoke($this, $this->valueHolder612d2, 'hIncrByFloat', array('key' => $key, 'field' => $field, 'value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function hKeys(string $key) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['hKeys'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['hKeys']->__invoke($this, $this->valueHolder612d2, 'hKeys', array('key' => $key), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->hKeys($key);

        if (isset($this->methodSuffixInterceptorsb194e['hKeys'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['hKeys']->__invoke($this, $this->valueHolder612d2, 'hKeys', array('key' => $key), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function hLen(string $key) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['hLen'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['hLen']->__invoke($this, $this->valueHolder612d2, 'hLen', array('key' => $key), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->hLen($key);

        if (isset($this->methodSuffixInterceptorsb194e['hLen'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['hLen']->__invoke($this, $this->valueHolder612d2, 'hLen', array('key' => $key), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function hMget(string $key, array $fields) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['hMget'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['hMget']->__invoke($this, $this->valueHolder612d2, 'hMget', array('key' => $key, 'fields' => $fields), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->hMget($key, $fields);

        if (isset($this->methodSuffixInterceptorsb194e['hMget'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['hMget']->__invoke($this, $this->valueHolder612d2, 'hMget', array('key' => $key, 'fields' => $fields), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function hMset(string $key, array $fieldvals) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptorsa6e22['hMset'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['hMset']->__invoke($this, $this->valueHolder612d2, 'hMset', array('key' => $key, 'fieldvals' => $fieldvals), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->hMset($key, $fieldvals);

        if (isset($this->methodSuffixInterceptorsb194e['hMset'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['hMset']->__invoke($this, $this->valueHolder612d2, 'hMset', array('key' => $key, 'fieldvals' => $fieldvals), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function hRandField(string $key, ?array $options = null) : \Redis|string|array|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['hRandField'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['hRandField']->__invoke($this, $this->valueHolder612d2, 'hRandField', array('key' => $key, 'options' => $options), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->hRandField($key, $options);

        if (isset($this->methodSuffixInterceptorsb194e['hRandField'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['hRandField']->__invoke($this, $this->valueHolder612d2, 'hRandField', array('key' => $key, 'options' => $options), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function hSet(string $key, mixed ... $fields_and_vals) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['hSet'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['hSet']->__invoke($this, $this->valueHolder612d2, 'hSet', array('key' => $key, 'fields_and_vals' => $fields_and_vals), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->hSet($key, ...$fields_and_vals);

        if (isset($this->methodSuffixInterceptorsb194e['hSet'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['hSet']->__invoke($this, $this->valueHolder612d2, 'hSet', array('key' => $key, 'fields_and_vals' => $fields_and_vals), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function hSetNx(string $key, string $field, mixed $value) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptorsa6e22['hSetNx'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['hSetNx']->__invoke($this, $this->valueHolder612d2, 'hSetNx', array('key' => $key, 'field' => $field, 'value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->hSetNx($key, $field, $value);

        if (isset($this->methodSuffixInterceptorsb194e['hSetNx'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['hSetNx']->__invoke($this, $this->valueHolder612d2, 'hSetNx', array('key' => $key, 'field' => $field, 'value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function hStrLen(string $key, string $field) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['hStrLen'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['hStrLen']->__invoke($this, $this->valueHolder612d2, 'hStrLen', array('key' => $key, 'field' => $field), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->hStrLen($key, $field);

        if (isset($this->methodSuffixInterceptorsb194e['hStrLen'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['hStrLen']->__invoke($this, $this->valueHolder612d2, 'hStrLen', array('key' => $key, 'field' => $field), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function hVals(string $key) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['hVals'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['hVals']->__invoke($this, $this->valueHolder612d2, 'hVals', array('key' => $key), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->hVals($key);

        if (isset($this->methodSuffixInterceptorsb194e['hVals'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['hVals']->__invoke($this, $this->valueHolder612d2, 'hVals', array('key' => $key), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function hscan(string $key, int|string|null &$iterator, ?string $pattern = null, int $count = 0) : \Redis|bool|array
    {
        if (isset($this->methodPrefixInterceptorsa6e22['hscan'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['hscan']->__invoke($this, $this->valueHolder612d2, 'hscan', array('key' => $key, 'iterator' => &$iterator, 'pattern' => $pattern, 'count' => $count), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->hscan($key, $iterator, $pattern, $count);

        if (isset($this->methodSuffixInterceptorsb194e['hscan'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['hscan']->__invoke($this, $this->valueHolder612d2, 'hscan', array('key' => $key, 'iterator' => &$iterator, 'pattern' => $pattern, 'count' => $count), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function incr(string $key, int $by = 1) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['incr'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['incr']->__invoke($this, $this->valueHolder612d2, 'incr', array('key' => $key, 'by' => $by), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->incr($key, $by);

        if (isset($this->methodSuffixInterceptorsb194e['incr'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['incr']->__invoke($this, $this->valueHolder612d2, 'incr', array('key' => $key, 'by' => $by), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function incrBy(string $key, int $value) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['incrBy'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['incrBy']->__invoke($this, $this->valueHolder612d2, 'incrBy', array('key' => $key, 'value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->incrBy($key, $value);

        if (isset($this->methodSuffixInterceptorsb194e['incrBy'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['incrBy']->__invoke($this, $this->valueHolder612d2, 'incrBy', array('key' => $key, 'value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function incrByFloat(string $key, float $value) : \Redis|float|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['incrByFloat'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['incrByFloat']->__invoke($this, $this->valueHolder612d2, 'incrByFloat', array('key' => $key, 'value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->incrByFloat($key, $value);

        if (isset($this->methodSuffixInterceptorsb194e['incrByFloat'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['incrByFloat']->__invoke($this, $this->valueHolder612d2, 'incrByFloat', array('key' => $key, 'value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function info(string ... $sections) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['info'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['info']->__invoke($this, $this->valueHolder612d2, 'info', array('sections' => $sections), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->info(...$sections);

        if (isset($this->methodSuffixInterceptorsb194e['info'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['info']->__invoke($this, $this->valueHolder612d2, 'info', array('sections' => $sections), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function isConnected() : bool
    {
        if (isset($this->methodPrefixInterceptorsa6e22['isConnected'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['isConnected']->__invoke($this, $this->valueHolder612d2, 'isConnected', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->isConnected();

        if (isset($this->methodSuffixInterceptorsb194e['isConnected'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['isConnected']->__invoke($this, $this->valueHolder612d2, 'isConnected', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function keys(string $pattern)
    {
        if (isset($this->methodPrefixInterceptorsa6e22['keys'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['keys']->__invoke($this, $this->valueHolder612d2, 'keys', array('pattern' => $pattern), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->keys($pattern);

        if (isset($this->methodSuffixInterceptorsb194e['keys'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['keys']->__invoke($this, $this->valueHolder612d2, 'keys', array('pattern' => $pattern), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function lInsert(string $key, string $pos, mixed $pivot, mixed $value)
    {
        if (isset($this->methodPrefixInterceptorsa6e22['lInsert'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['lInsert']->__invoke($this, $this->valueHolder612d2, 'lInsert', array('key' => $key, 'pos' => $pos, 'pivot' => $pivot, 'value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->lInsert($key, $pos, $pivot, $value);

        if (isset($this->methodSuffixInterceptorsb194e['lInsert'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['lInsert']->__invoke($this, $this->valueHolder612d2, 'lInsert', array('key' => $key, 'pos' => $pos, 'pivot' => $pivot, 'value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function lLen(string $key) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['lLen'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['lLen']->__invoke($this, $this->valueHolder612d2, 'lLen', array('key' => $key), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->lLen($key);

        if (isset($this->methodSuffixInterceptorsb194e['lLen'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['lLen']->__invoke($this, $this->valueHolder612d2, 'lLen', array('key' => $key), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function lMove(string $src, string $dst, string $wherefrom, string $whereto) : \Redis|string|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['lMove'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['lMove']->__invoke($this, $this->valueHolder612d2, 'lMove', array('src' => $src, 'dst' => $dst, 'wherefrom' => $wherefrom, 'whereto' => $whereto), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->lMove($src, $dst, $wherefrom, $whereto);

        if (isset($this->methodSuffixInterceptorsb194e['lMove'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['lMove']->__invoke($this, $this->valueHolder612d2, 'lMove', array('src' => $src, 'dst' => $dst, 'wherefrom' => $wherefrom, 'whereto' => $whereto), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function blmove(string $src, string $dst, string $wherefrom, string $whereto, float $timeout) : \Redis|string|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['blmove'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['blmove']->__invoke($this, $this->valueHolder612d2, 'blmove', array('src' => $src, 'dst' => $dst, 'wherefrom' => $wherefrom, 'whereto' => $whereto, 'timeout' => $timeout), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->blmove($src, $dst, $wherefrom, $whereto, $timeout);

        if (isset($this->methodSuffixInterceptorsb194e['blmove'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['blmove']->__invoke($this, $this->valueHolder612d2, 'blmove', array('src' => $src, 'dst' => $dst, 'wherefrom' => $wherefrom, 'whereto' => $whereto, 'timeout' => $timeout), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function lPop(string $key, int $count = 0) : \Redis|bool|string|array
    {
        if (isset($this->methodPrefixInterceptorsa6e22['lPop'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['lPop']->__invoke($this, $this->valueHolder612d2, 'lPop', array('key' => $key, 'count' => $count), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->lPop($key, $count);

        if (isset($this->methodSuffixInterceptorsb194e['lPop'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['lPop']->__invoke($this, $this->valueHolder612d2, 'lPop', array('key' => $key, 'count' => $count), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function lPos(string $key, mixed $value, ?array $options = null) : \Redis|bool|int|array|null
    {
        if (isset($this->methodPrefixInterceptorsa6e22['lPos'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['lPos']->__invoke($this, $this->valueHolder612d2, 'lPos', array('key' => $key, 'value' => $value, 'options' => $options), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->lPos($key, $value, $options);

        if (isset($this->methodSuffixInterceptorsb194e['lPos'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['lPos']->__invoke($this, $this->valueHolder612d2, 'lPos', array('key' => $key, 'value' => $value, 'options' => $options), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function lPush(string $key, mixed ... $elements) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['lPush'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['lPush']->__invoke($this, $this->valueHolder612d2, 'lPush', array('key' => $key, 'elements' => $elements), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->lPush($key, ...$elements);

        if (isset($this->methodSuffixInterceptorsb194e['lPush'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['lPush']->__invoke($this, $this->valueHolder612d2, 'lPush', array('key' => $key, 'elements' => $elements), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function rPush(string $key, mixed ... $elements) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['rPush'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['rPush']->__invoke($this, $this->valueHolder612d2, 'rPush', array('key' => $key, 'elements' => $elements), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->rPush($key, ...$elements);

        if (isset($this->methodSuffixInterceptorsb194e['rPush'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['rPush']->__invoke($this, $this->valueHolder612d2, 'rPush', array('key' => $key, 'elements' => $elements), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function lPushx(string $key, mixed $value) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['lPushx'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['lPushx']->__invoke($this, $this->valueHolder612d2, 'lPushx', array('key' => $key, 'value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->lPushx($key, $value);

        if (isset($this->methodSuffixInterceptorsb194e['lPushx'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['lPushx']->__invoke($this, $this->valueHolder612d2, 'lPushx', array('key' => $key, 'value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function rPushx(string $key, mixed $value) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['rPushx'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['rPushx']->__invoke($this, $this->valueHolder612d2, 'rPushx', array('key' => $key, 'value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->rPushx($key, $value);

        if (isset($this->methodSuffixInterceptorsb194e['rPushx'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['rPushx']->__invoke($this, $this->valueHolder612d2, 'rPushx', array('key' => $key, 'value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function lSet(string $key, int $index, mixed $value) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptorsa6e22['lSet'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['lSet']->__invoke($this, $this->valueHolder612d2, 'lSet', array('key' => $key, 'index' => $index, 'value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->lSet($key, $index, $value);

        if (isset($this->methodSuffixInterceptorsb194e['lSet'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['lSet']->__invoke($this, $this->valueHolder612d2, 'lSet', array('key' => $key, 'index' => $index, 'value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function lastSave() : int
    {
        if (isset($this->methodPrefixInterceptorsa6e22['lastSave'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['lastSave']->__invoke($this, $this->valueHolder612d2, 'lastSave', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->lastSave();

        if (isset($this->methodSuffixInterceptorsb194e['lastSave'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['lastSave']->__invoke($this, $this->valueHolder612d2, 'lastSave', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function lindex(string $key, int $index) : mixed
    {
        if (isset($this->methodPrefixInterceptorsa6e22['lindex'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['lindex']->__invoke($this, $this->valueHolder612d2, 'lindex', array('key' => $key, 'index' => $index), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->lindex($key, $index);

        if (isset($this->methodSuffixInterceptorsb194e['lindex'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['lindex']->__invoke($this, $this->valueHolder612d2, 'lindex', array('key' => $key, 'index' => $index), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function lrange(string $key, int $start, int $end) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['lrange'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['lrange']->__invoke($this, $this->valueHolder612d2, 'lrange', array('key' => $key, 'start' => $start, 'end' => $end), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->lrange($key, $start, $end);

        if (isset($this->methodSuffixInterceptorsb194e['lrange'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['lrange']->__invoke($this, $this->valueHolder612d2, 'lrange', array('key' => $key, 'start' => $start, 'end' => $end), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function lrem(string $key, mixed $value, int $count = 0) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['lrem'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['lrem']->__invoke($this, $this->valueHolder612d2, 'lrem', array('key' => $key, 'value' => $value, 'count' => $count), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->lrem($key, $value, $count);

        if (isset($this->methodSuffixInterceptorsb194e['lrem'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['lrem']->__invoke($this, $this->valueHolder612d2, 'lrem', array('key' => $key, 'value' => $value, 'count' => $count), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function ltrim(string $key, int $start, int $end) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptorsa6e22['ltrim'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['ltrim']->__invoke($this, $this->valueHolder612d2, 'ltrim', array('key' => $key, 'start' => $start, 'end' => $end), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->ltrim($key, $start, $end);

        if (isset($this->methodSuffixInterceptorsb194e['ltrim'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['ltrim']->__invoke($this, $this->valueHolder612d2, 'ltrim', array('key' => $key, 'start' => $start, 'end' => $end), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function mget(array $keys) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['mget'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['mget']->__invoke($this, $this->valueHolder612d2, 'mget', array('keys' => $keys), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->mget($keys);

        if (isset($this->methodSuffixInterceptorsb194e['mget'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['mget']->__invoke($this, $this->valueHolder612d2, 'mget', array('keys' => $keys), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function migrate(string $host, int $port, string|array $key, int $dstdb, int $timeout, bool $copy = false, bool $replace = false, mixed $credentials = null) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptorsa6e22['migrate'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['migrate']->__invoke($this, $this->valueHolder612d2, 'migrate', array('host' => $host, 'port' => $port, 'key' => $key, 'dstdb' => $dstdb, 'timeout' => $timeout, 'copy' => $copy, 'replace' => $replace, 'credentials' => $credentials), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->migrate($host, $port, $key, $dstdb, $timeout, $copy, $replace, $credentials);

        if (isset($this->methodSuffixInterceptorsb194e['migrate'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['migrate']->__invoke($this, $this->valueHolder612d2, 'migrate', array('host' => $host, 'port' => $port, 'key' => $key, 'dstdb' => $dstdb, 'timeout' => $timeout, 'copy' => $copy, 'replace' => $replace, 'credentials' => $credentials), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function move(string $key, int $index) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptorsa6e22['move'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['move']->__invoke($this, $this->valueHolder612d2, 'move', array('key' => $key, 'index' => $index), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->move($key, $index);

        if (isset($this->methodSuffixInterceptorsb194e['move'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['move']->__invoke($this, $this->valueHolder612d2, 'move', array('key' => $key, 'index' => $index), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function mset(array $key_values) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptorsa6e22['mset'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['mset']->__invoke($this, $this->valueHolder612d2, 'mset', array('key_values' => $key_values), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->mset($key_values);

        if (isset($this->methodSuffixInterceptorsb194e['mset'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['mset']->__invoke($this, $this->valueHolder612d2, 'mset', array('key_values' => $key_values), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function msetnx(array $key_values) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptorsa6e22['msetnx'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['msetnx']->__invoke($this, $this->valueHolder612d2, 'msetnx', array('key_values' => $key_values), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->msetnx($key_values);

        if (isset($this->methodSuffixInterceptorsb194e['msetnx'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['msetnx']->__invoke($this, $this->valueHolder612d2, 'msetnx', array('key_values' => $key_values), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function multi(int $value = 1) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptorsa6e22['multi'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['multi']->__invoke($this, $this->valueHolder612d2, 'multi', array('value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->multi($value);

        if (isset($this->methodSuffixInterceptorsb194e['multi'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['multi']->__invoke($this, $this->valueHolder612d2, 'multi', array('value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function object(string $subcommand, string $key) : \Redis|int|string|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['object'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['object']->__invoke($this, $this->valueHolder612d2, 'object', array('subcommand' => $subcommand, 'key' => $key), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->object($subcommand, $key);

        if (isset($this->methodSuffixInterceptorsb194e['object'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['object']->__invoke($this, $this->valueHolder612d2, 'object', array('subcommand' => $subcommand, 'key' => $key), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function open(string $host, int $port = 6379, float $timeout = 0, ?string $persistent_id = null, int $retry_interval = 0, float $read_timeout = 0, ?array $context = null) : bool
    {
        if (isset($this->methodPrefixInterceptorsa6e22['open'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['open']->__invoke($this, $this->valueHolder612d2, 'open', array('host' => $host, 'port' => $port, 'timeout' => $timeout, 'persistent_id' => $persistent_id, 'retry_interval' => $retry_interval, 'read_timeout' => $read_timeout, 'context' => $context), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->open($host, $port, $timeout, $persistent_id, $retry_interval, $read_timeout, $context);

        if (isset($this->methodSuffixInterceptorsb194e['open'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['open']->__invoke($this, $this->valueHolder612d2, 'open', array('host' => $host, 'port' => $port, 'timeout' => $timeout, 'persistent_id' => $persistent_id, 'retry_interval' => $retry_interval, 'read_timeout' => $read_timeout, 'context' => $context), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function pconnect(string $host, int $port = 6379, float $timeout = 0, ?string $persistent_id = null, int $retry_interval = 0, float $read_timeout = 0, ?array $context = null) : bool
    {
        if (isset($this->methodPrefixInterceptorsa6e22['pconnect'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['pconnect']->__invoke($this, $this->valueHolder612d2, 'pconnect', array('host' => $host, 'port' => $port, 'timeout' => $timeout, 'persistent_id' => $persistent_id, 'retry_interval' => $retry_interval, 'read_timeout' => $read_timeout, 'context' => $context), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->pconnect($host, $port, $timeout, $persistent_id, $retry_interval, $read_timeout, $context);

        if (isset($this->methodSuffixInterceptorsb194e['pconnect'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['pconnect']->__invoke($this, $this->valueHolder612d2, 'pconnect', array('host' => $host, 'port' => $port, 'timeout' => $timeout, 'persistent_id' => $persistent_id, 'retry_interval' => $retry_interval, 'read_timeout' => $read_timeout, 'context' => $context), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function persist(string $key) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptorsa6e22['persist'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['persist']->__invoke($this, $this->valueHolder612d2, 'persist', array('key' => $key), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->persist($key);

        if (isset($this->methodSuffixInterceptorsb194e['persist'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['persist']->__invoke($this, $this->valueHolder612d2, 'persist', array('key' => $key), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function pexpire(string $key, int $timeout, ?string $mode = null) : bool
    {
        if (isset($this->methodPrefixInterceptorsa6e22['pexpire'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['pexpire']->__invoke($this, $this->valueHolder612d2, 'pexpire', array('key' => $key, 'timeout' => $timeout, 'mode' => $mode), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->pexpire($key, $timeout, $mode);

        if (isset($this->methodSuffixInterceptorsb194e['pexpire'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['pexpire']->__invoke($this, $this->valueHolder612d2, 'pexpire', array('key' => $key, 'timeout' => $timeout, 'mode' => $mode), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function pexpireAt(string $key, int $timestamp, ?string $mode = null) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptorsa6e22['pexpireAt'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['pexpireAt']->__invoke($this, $this->valueHolder612d2, 'pexpireAt', array('key' => $key, 'timestamp' => $timestamp, 'mode' => $mode), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->pexpireAt($key, $timestamp, $mode);

        if (isset($this->methodSuffixInterceptorsb194e['pexpireAt'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['pexpireAt']->__invoke($this, $this->valueHolder612d2, 'pexpireAt', array('key' => $key, 'timestamp' => $timestamp, 'mode' => $mode), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function pfadd(string $key, array $elements) : \Redis|int
    {
        if (isset($this->methodPrefixInterceptorsa6e22['pfadd'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['pfadd']->__invoke($this, $this->valueHolder612d2, 'pfadd', array('key' => $key, 'elements' => $elements), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->pfadd($key, $elements);

        if (isset($this->methodSuffixInterceptorsb194e['pfadd'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['pfadd']->__invoke($this, $this->valueHolder612d2, 'pfadd', array('key' => $key, 'elements' => $elements), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function pfcount(string|array $key_or_keys) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['pfcount'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['pfcount']->__invoke($this, $this->valueHolder612d2, 'pfcount', array('key_or_keys' => $key_or_keys), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->pfcount($key_or_keys);

        if (isset($this->methodSuffixInterceptorsb194e['pfcount'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['pfcount']->__invoke($this, $this->valueHolder612d2, 'pfcount', array('key_or_keys' => $key_or_keys), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function pfmerge(string $dst, array $srckeys) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptorsa6e22['pfmerge'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['pfmerge']->__invoke($this, $this->valueHolder612d2, 'pfmerge', array('dst' => $dst, 'srckeys' => $srckeys), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->pfmerge($dst, $srckeys);

        if (isset($this->methodSuffixInterceptorsb194e['pfmerge'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['pfmerge']->__invoke($this, $this->valueHolder612d2, 'pfmerge', array('dst' => $dst, 'srckeys' => $srckeys), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function ping(?string $message = null) : \Redis|bool|string
    {
        if (isset($this->methodPrefixInterceptorsa6e22['ping'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['ping']->__invoke($this, $this->valueHolder612d2, 'ping', array('message' => $message), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->ping($message);

        if (isset($this->methodSuffixInterceptorsb194e['ping'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['ping']->__invoke($this, $this->valueHolder612d2, 'ping', array('message' => $message), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function pipeline() : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptorsa6e22['pipeline'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['pipeline']->__invoke($this, $this->valueHolder612d2, 'pipeline', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->pipeline();

        if (isset($this->methodSuffixInterceptorsb194e['pipeline'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['pipeline']->__invoke($this, $this->valueHolder612d2, 'pipeline', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function popen(string $host, int $port = 6379, float $timeout = 0, ?string $persistent_id = null, int $retry_interval = 0, float $read_timeout = 0, ?array $context = null) : bool
    {
        if (isset($this->methodPrefixInterceptorsa6e22['popen'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['popen']->__invoke($this, $this->valueHolder612d2, 'popen', array('host' => $host, 'port' => $port, 'timeout' => $timeout, 'persistent_id' => $persistent_id, 'retry_interval' => $retry_interval, 'read_timeout' => $read_timeout, 'context' => $context), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->popen($host, $port, $timeout, $persistent_id, $retry_interval, $read_timeout, $context);

        if (isset($this->methodSuffixInterceptorsb194e['popen'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['popen']->__invoke($this, $this->valueHolder612d2, 'popen', array('host' => $host, 'port' => $port, 'timeout' => $timeout, 'persistent_id' => $persistent_id, 'retry_interval' => $retry_interval, 'read_timeout' => $read_timeout, 'context' => $context), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function psetex(string $key, int $expire, mixed $value) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptorsa6e22['psetex'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['psetex']->__invoke($this, $this->valueHolder612d2, 'psetex', array('key' => $key, 'expire' => $expire, 'value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->psetex($key, $expire, $value);

        if (isset($this->methodSuffixInterceptorsb194e['psetex'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['psetex']->__invoke($this, $this->valueHolder612d2, 'psetex', array('key' => $key, 'expire' => $expire, 'value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function psubscribe(array $patterns, callable $cb) : bool
    {
        if (isset($this->methodPrefixInterceptorsa6e22['psubscribe'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['psubscribe']->__invoke($this, $this->valueHolder612d2, 'psubscribe', array('patterns' => $patterns, 'cb' => $cb), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->psubscribe($patterns, $cb);

        if (isset($this->methodSuffixInterceptorsb194e['psubscribe'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['psubscribe']->__invoke($this, $this->valueHolder612d2, 'psubscribe', array('patterns' => $patterns, 'cb' => $cb), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function pttl(string $key) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['pttl'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['pttl']->__invoke($this, $this->valueHolder612d2, 'pttl', array('key' => $key), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->pttl($key);

        if (isset($this->methodSuffixInterceptorsb194e['pttl'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['pttl']->__invoke($this, $this->valueHolder612d2, 'pttl', array('key' => $key), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function publish(string $channel, string $message) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['publish'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['publish']->__invoke($this, $this->valueHolder612d2, 'publish', array('channel' => $channel, 'message' => $message), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->publish($channel, $message);

        if (isset($this->methodSuffixInterceptorsb194e['publish'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['publish']->__invoke($this, $this->valueHolder612d2, 'publish', array('channel' => $channel, 'message' => $message), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function pubsub(string $command, mixed $arg = null) : mixed
    {
        if (isset($this->methodPrefixInterceptorsa6e22['pubsub'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['pubsub']->__invoke($this, $this->valueHolder612d2, 'pubsub', array('command' => $command, 'arg' => $arg), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->pubsub($command, $arg);

        if (isset($this->methodSuffixInterceptorsb194e['pubsub'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['pubsub']->__invoke($this, $this->valueHolder612d2, 'pubsub', array('command' => $command, 'arg' => $arg), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function punsubscribe(array $patterns) : \Redis|bool|array
    {
        if (isset($this->methodPrefixInterceptorsa6e22['punsubscribe'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['punsubscribe']->__invoke($this, $this->valueHolder612d2, 'punsubscribe', array('patterns' => $patterns), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->punsubscribe($patterns);

        if (isset($this->methodSuffixInterceptorsb194e['punsubscribe'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['punsubscribe']->__invoke($this, $this->valueHolder612d2, 'punsubscribe', array('patterns' => $patterns), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function rPop(string $key, int $count = 0) : \Redis|bool|string|array
    {
        if (isset($this->methodPrefixInterceptorsa6e22['rPop'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['rPop']->__invoke($this, $this->valueHolder612d2, 'rPop', array('key' => $key, 'count' => $count), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->rPop($key, $count);

        if (isset($this->methodSuffixInterceptorsb194e['rPop'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['rPop']->__invoke($this, $this->valueHolder612d2, 'rPop', array('key' => $key, 'count' => $count), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function randomKey() : \Redis|string|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['randomKey'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['randomKey']->__invoke($this, $this->valueHolder612d2, 'randomKey', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->randomKey();

        if (isset($this->methodSuffixInterceptorsb194e['randomKey'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['randomKey']->__invoke($this, $this->valueHolder612d2, 'randomKey', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function rawcommand(string $command, mixed ... $args) : mixed
    {
        if (isset($this->methodPrefixInterceptorsa6e22['rawcommand'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['rawcommand']->__invoke($this, $this->valueHolder612d2, 'rawcommand', array('command' => $command, 'args' => $args), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->rawcommand($command, ...$args);

        if (isset($this->methodSuffixInterceptorsb194e['rawcommand'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['rawcommand']->__invoke($this, $this->valueHolder612d2, 'rawcommand', array('command' => $command, 'args' => $args), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function rename(string $old_name, string $new_name) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptorsa6e22['rename'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['rename']->__invoke($this, $this->valueHolder612d2, 'rename', array('old_name' => $old_name, 'new_name' => $new_name), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->rename($old_name, $new_name);

        if (isset($this->methodSuffixInterceptorsb194e['rename'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['rename']->__invoke($this, $this->valueHolder612d2, 'rename', array('old_name' => $old_name, 'new_name' => $new_name), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function renameNx(string $key_src, string $key_dst) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptorsa6e22['renameNx'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['renameNx']->__invoke($this, $this->valueHolder612d2, 'renameNx', array('key_src' => $key_src, 'key_dst' => $key_dst), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->renameNx($key_src, $key_dst);

        if (isset($this->methodSuffixInterceptorsb194e['renameNx'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['renameNx']->__invoke($this, $this->valueHolder612d2, 'renameNx', array('key_src' => $key_src, 'key_dst' => $key_dst), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function reset() : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptorsa6e22['reset'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['reset']->__invoke($this, $this->valueHolder612d2, 'reset', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->reset();

        if (isset($this->methodSuffixInterceptorsb194e['reset'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['reset']->__invoke($this, $this->valueHolder612d2, 'reset', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function restore(string $key, int $ttl, string $value, ?array $options = null) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptorsa6e22['restore'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['restore']->__invoke($this, $this->valueHolder612d2, 'restore', array('key' => $key, 'ttl' => $ttl, 'value' => $value, 'options' => $options), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->restore($key, $ttl, $value, $options);

        if (isset($this->methodSuffixInterceptorsb194e['restore'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['restore']->__invoke($this, $this->valueHolder612d2, 'restore', array('key' => $key, 'ttl' => $ttl, 'value' => $value, 'options' => $options), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function role() : mixed
    {
        if (isset($this->methodPrefixInterceptorsa6e22['role'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['role']->__invoke($this, $this->valueHolder612d2, 'role', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->role();

        if (isset($this->methodSuffixInterceptorsb194e['role'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['role']->__invoke($this, $this->valueHolder612d2, 'role', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function rpoplpush(string $srckey, string $dstkey) : \Redis|string|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['rpoplpush'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['rpoplpush']->__invoke($this, $this->valueHolder612d2, 'rpoplpush', array('srckey' => $srckey, 'dstkey' => $dstkey), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->rpoplpush($srckey, $dstkey);

        if (isset($this->methodSuffixInterceptorsb194e['rpoplpush'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['rpoplpush']->__invoke($this, $this->valueHolder612d2, 'rpoplpush', array('srckey' => $srckey, 'dstkey' => $dstkey), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function sAdd(string $key, mixed $value, mixed ... $other_values) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['sAdd'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['sAdd']->__invoke($this, $this->valueHolder612d2, 'sAdd', array('key' => $key, 'value' => $value, 'other_values' => $other_values), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->sAdd($key, $value, ...$other_values);

        if (isset($this->methodSuffixInterceptorsb194e['sAdd'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['sAdd']->__invoke($this, $this->valueHolder612d2, 'sAdd', array('key' => $key, 'value' => $value, 'other_values' => $other_values), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function sAddArray(string $key, array $values) : int
    {
        if (isset($this->methodPrefixInterceptorsa6e22['sAddArray'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['sAddArray']->__invoke($this, $this->valueHolder612d2, 'sAddArray', array('key' => $key, 'values' => $values), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->sAddArray($key, $values);

        if (isset($this->methodSuffixInterceptorsb194e['sAddArray'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['sAddArray']->__invoke($this, $this->valueHolder612d2, 'sAddArray', array('key' => $key, 'values' => $values), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function sDiff(string $key, string ... $other_keys) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['sDiff'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['sDiff']->__invoke($this, $this->valueHolder612d2, 'sDiff', array('key' => $key, 'other_keys' => $other_keys), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->sDiff($key, ...$other_keys);

        if (isset($this->methodSuffixInterceptorsb194e['sDiff'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['sDiff']->__invoke($this, $this->valueHolder612d2, 'sDiff', array('key' => $key, 'other_keys' => $other_keys), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function sDiffStore(string $dst, string $key, string ... $other_keys) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['sDiffStore'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['sDiffStore']->__invoke($this, $this->valueHolder612d2, 'sDiffStore', array('dst' => $dst, 'key' => $key, 'other_keys' => $other_keys), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->sDiffStore($dst, $key, ...$other_keys);

        if (isset($this->methodSuffixInterceptorsb194e['sDiffStore'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['sDiffStore']->__invoke($this, $this->valueHolder612d2, 'sDiffStore', array('dst' => $dst, 'key' => $key, 'other_keys' => $other_keys), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function sInter(string|array $key, string ... $other_keys) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['sInter'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['sInter']->__invoke($this, $this->valueHolder612d2, 'sInter', array('key' => $key, 'other_keys' => $other_keys), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->sInter($key, ...$other_keys);

        if (isset($this->methodSuffixInterceptorsb194e['sInter'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['sInter']->__invoke($this, $this->valueHolder612d2, 'sInter', array('key' => $key, 'other_keys' => $other_keys), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function sintercard(array $keys, int $limit = -1) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['sintercard'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['sintercard']->__invoke($this, $this->valueHolder612d2, 'sintercard', array('keys' => $keys, 'limit' => $limit), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->sintercard($keys, $limit);

        if (isset($this->methodSuffixInterceptorsb194e['sintercard'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['sintercard']->__invoke($this, $this->valueHolder612d2, 'sintercard', array('keys' => $keys, 'limit' => $limit), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function sInterStore(string|array $key, string ... $other_keys) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['sInterStore'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['sInterStore']->__invoke($this, $this->valueHolder612d2, 'sInterStore', array('key' => $key, 'other_keys' => $other_keys), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->sInterStore($key, ...$other_keys);

        if (isset($this->methodSuffixInterceptorsb194e['sInterStore'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['sInterStore']->__invoke($this, $this->valueHolder612d2, 'sInterStore', array('key' => $key, 'other_keys' => $other_keys), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function sMembers(string $key) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['sMembers'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['sMembers']->__invoke($this, $this->valueHolder612d2, 'sMembers', array('key' => $key), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->sMembers($key);

        if (isset($this->methodSuffixInterceptorsb194e['sMembers'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['sMembers']->__invoke($this, $this->valueHolder612d2, 'sMembers', array('key' => $key), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function sMisMember(string $key, string $member, string ... $other_members) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['sMisMember'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['sMisMember']->__invoke($this, $this->valueHolder612d2, 'sMisMember', array('key' => $key, 'member' => $member, 'other_members' => $other_members), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->sMisMember($key, $member, ...$other_members);

        if (isset($this->methodSuffixInterceptorsb194e['sMisMember'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['sMisMember']->__invoke($this, $this->valueHolder612d2, 'sMisMember', array('key' => $key, 'member' => $member, 'other_members' => $other_members), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function sMove(string $src, string $dst, mixed $value) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptorsa6e22['sMove'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['sMove']->__invoke($this, $this->valueHolder612d2, 'sMove', array('src' => $src, 'dst' => $dst, 'value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->sMove($src, $dst, $value);

        if (isset($this->methodSuffixInterceptorsb194e['sMove'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['sMove']->__invoke($this, $this->valueHolder612d2, 'sMove', array('src' => $src, 'dst' => $dst, 'value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function sPop(string $key, int $count = 0) : \Redis|string|array|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['sPop'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['sPop']->__invoke($this, $this->valueHolder612d2, 'sPop', array('key' => $key, 'count' => $count), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->sPop($key, $count);

        if (isset($this->methodSuffixInterceptorsb194e['sPop'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['sPop']->__invoke($this, $this->valueHolder612d2, 'sPop', array('key' => $key, 'count' => $count), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function sRandMember(string $key, int $count = 0) : mixed
    {
        if (isset($this->methodPrefixInterceptorsa6e22['sRandMember'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['sRandMember']->__invoke($this, $this->valueHolder612d2, 'sRandMember', array('key' => $key, 'count' => $count), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->sRandMember($key, $count);

        if (isset($this->methodSuffixInterceptorsb194e['sRandMember'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['sRandMember']->__invoke($this, $this->valueHolder612d2, 'sRandMember', array('key' => $key, 'count' => $count), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function sUnion(string $key, string ... $other_keys) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['sUnion'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['sUnion']->__invoke($this, $this->valueHolder612d2, 'sUnion', array('key' => $key, 'other_keys' => $other_keys), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->sUnion($key, ...$other_keys);

        if (isset($this->methodSuffixInterceptorsb194e['sUnion'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['sUnion']->__invoke($this, $this->valueHolder612d2, 'sUnion', array('key' => $key, 'other_keys' => $other_keys), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function sUnionStore(string $dst, string $key, string ... $other_keys) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['sUnionStore'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['sUnionStore']->__invoke($this, $this->valueHolder612d2, 'sUnionStore', array('dst' => $dst, 'key' => $key, 'other_keys' => $other_keys), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->sUnionStore($dst, $key, ...$other_keys);

        if (isset($this->methodSuffixInterceptorsb194e['sUnionStore'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['sUnionStore']->__invoke($this, $this->valueHolder612d2, 'sUnionStore', array('dst' => $dst, 'key' => $key, 'other_keys' => $other_keys), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function save() : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptorsa6e22['save'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['save']->__invoke($this, $this->valueHolder612d2, 'save', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->save();

        if (isset($this->methodSuffixInterceptorsb194e['save'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['save']->__invoke($this, $this->valueHolder612d2, 'save', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function scan(int|string|null &$iterator, ?string $pattern = null, int $count = 0, ?string $type = null) : array|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['scan'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['scan']->__invoke($this, $this->valueHolder612d2, 'scan', array('iterator' => &$iterator, 'pattern' => $pattern, 'count' => $count, 'type' => $type), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->scan($iterator, $pattern, $count, $type);

        if (isset($this->methodSuffixInterceptorsb194e['scan'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['scan']->__invoke($this, $this->valueHolder612d2, 'scan', array('iterator' => &$iterator, 'pattern' => $pattern, 'count' => $count, 'type' => $type), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function scard(string $key) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['scard'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['scard']->__invoke($this, $this->valueHolder612d2, 'scard', array('key' => $key), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->scard($key);

        if (isset($this->methodSuffixInterceptorsb194e['scard'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['scard']->__invoke($this, $this->valueHolder612d2, 'scard', array('key' => $key), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function script(string $command, mixed ... $args) : mixed
    {
        if (isset($this->methodPrefixInterceptorsa6e22['script'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['script']->__invoke($this, $this->valueHolder612d2, 'script', array('command' => $command, 'args' => $args), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->script($command, ...$args);

        if (isset($this->methodSuffixInterceptorsb194e['script'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['script']->__invoke($this, $this->valueHolder612d2, 'script', array('command' => $command, 'args' => $args), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function select(int $db) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptorsa6e22['select'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['select']->__invoke($this, $this->valueHolder612d2, 'select', array('db' => $db), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->select($db);

        if (isset($this->methodSuffixInterceptorsb194e['select'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['select']->__invoke($this, $this->valueHolder612d2, 'select', array('db' => $db), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function set(string $key, mixed $value, mixed $options = null) : \Redis|bool|string
    {
        if (isset($this->methodPrefixInterceptorsa6e22['set'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['set']->__invoke($this, $this->valueHolder612d2, 'set', array('key' => $key, 'value' => $value, 'options' => $options), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->set($key, $value, $options);

        if (isset($this->methodSuffixInterceptorsb194e['set'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['set']->__invoke($this, $this->valueHolder612d2, 'set', array('key' => $key, 'value' => $value, 'options' => $options), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function setBit(string $key, int $idx, bool $value) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['setBit'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['setBit']->__invoke($this, $this->valueHolder612d2, 'setBit', array('key' => $key, 'idx' => $idx, 'value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->setBit($key, $idx, $value);

        if (isset($this->methodSuffixInterceptorsb194e['setBit'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['setBit']->__invoke($this, $this->valueHolder612d2, 'setBit', array('key' => $key, 'idx' => $idx, 'value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function setRange(string $key, int $index, string $value) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['setRange'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['setRange']->__invoke($this, $this->valueHolder612d2, 'setRange', array('key' => $key, 'index' => $index, 'value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->setRange($key, $index, $value);

        if (isset($this->methodSuffixInterceptorsb194e['setRange'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['setRange']->__invoke($this, $this->valueHolder612d2, 'setRange', array('key' => $key, 'index' => $index, 'value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function setOption(int $option, mixed $value) : bool
    {
        if (isset($this->methodPrefixInterceptorsa6e22['setOption'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['setOption']->__invoke($this, $this->valueHolder612d2, 'setOption', array('option' => $option, 'value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->setOption($option, $value);

        if (isset($this->methodSuffixInterceptorsb194e['setOption'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['setOption']->__invoke($this, $this->valueHolder612d2, 'setOption', array('option' => $option, 'value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function setex(string $key, int $expire, mixed $value)
    {
        if (isset($this->methodPrefixInterceptorsa6e22['setex'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['setex']->__invoke($this, $this->valueHolder612d2, 'setex', array('key' => $key, 'expire' => $expire, 'value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->setex($key, $expire, $value);

        if (isset($this->methodSuffixInterceptorsb194e['setex'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['setex']->__invoke($this, $this->valueHolder612d2, 'setex', array('key' => $key, 'expire' => $expire, 'value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function setnx(string $key, mixed $value) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptorsa6e22['setnx'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['setnx']->__invoke($this, $this->valueHolder612d2, 'setnx', array('key' => $key, 'value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->setnx($key, $value);

        if (isset($this->methodSuffixInterceptorsb194e['setnx'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['setnx']->__invoke($this, $this->valueHolder612d2, 'setnx', array('key' => $key, 'value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function sismember(string $key, mixed $value) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptorsa6e22['sismember'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['sismember']->__invoke($this, $this->valueHolder612d2, 'sismember', array('key' => $key, 'value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->sismember($key, $value);

        if (isset($this->methodSuffixInterceptorsb194e['sismember'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['sismember']->__invoke($this, $this->valueHolder612d2, 'sismember', array('key' => $key, 'value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function slaveof(?string $host = null, int $port = 6379) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptorsa6e22['slaveof'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['slaveof']->__invoke($this, $this->valueHolder612d2, 'slaveof', array('host' => $host, 'port' => $port), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->slaveof($host, $port);

        if (isset($this->methodSuffixInterceptorsb194e['slaveof'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['slaveof']->__invoke($this, $this->valueHolder612d2, 'slaveof', array('host' => $host, 'port' => $port), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function replicaof(?string $host = null, int $port = 6379) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptorsa6e22['replicaof'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['replicaof']->__invoke($this, $this->valueHolder612d2, 'replicaof', array('host' => $host, 'port' => $port), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->replicaof($host, $port);

        if (isset($this->methodSuffixInterceptorsb194e['replicaof'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['replicaof']->__invoke($this, $this->valueHolder612d2, 'replicaof', array('host' => $host, 'port' => $port), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function touch(string|array $key_or_array, string ... $more_keys) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['touch'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['touch']->__invoke($this, $this->valueHolder612d2, 'touch', array('key_or_array' => $key_or_array, 'more_keys' => $more_keys), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->touch($key_or_array, ...$more_keys);

        if (isset($this->methodSuffixInterceptorsb194e['touch'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['touch']->__invoke($this, $this->valueHolder612d2, 'touch', array('key_or_array' => $key_or_array, 'more_keys' => $more_keys), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function slowlog(string $operation, int $length = 0) : mixed
    {
        if (isset($this->methodPrefixInterceptorsa6e22['slowlog'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['slowlog']->__invoke($this, $this->valueHolder612d2, 'slowlog', array('operation' => $operation, 'length' => $length), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->slowlog($operation, $length);

        if (isset($this->methodSuffixInterceptorsb194e['slowlog'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['slowlog']->__invoke($this, $this->valueHolder612d2, 'slowlog', array('operation' => $operation, 'length' => $length), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function sort(string $key, ?array $options = null) : mixed
    {
        if (isset($this->methodPrefixInterceptorsa6e22['sort'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['sort']->__invoke($this, $this->valueHolder612d2, 'sort', array('key' => $key, 'options' => $options), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->sort($key, $options);

        if (isset($this->methodSuffixInterceptorsb194e['sort'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['sort']->__invoke($this, $this->valueHolder612d2, 'sort', array('key' => $key, 'options' => $options), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function sort_ro(string $key, ?array $options = null) : mixed
    {
        if (isset($this->methodPrefixInterceptorsa6e22['sort_ro'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['sort_ro']->__invoke($this, $this->valueHolder612d2, 'sort_ro', array('key' => $key, 'options' => $options), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->sort_ro($key, $options);

        if (isset($this->methodSuffixInterceptorsb194e['sort_ro'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['sort_ro']->__invoke($this, $this->valueHolder612d2, 'sort_ro', array('key' => $key, 'options' => $options), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function sortAsc(string $key, ?string $pattern = null, mixed $get = null, int $offset = -1, int $count = -1, ?string $store = null) : array
    {
        if (isset($this->methodPrefixInterceptorsa6e22['sortAsc'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['sortAsc']->__invoke($this, $this->valueHolder612d2, 'sortAsc', array('key' => $key, 'pattern' => $pattern, 'get' => $get, 'offset' => $offset, 'count' => $count, 'store' => $store), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->sortAsc($key, $pattern, $get, $offset, $count, $store);

        if (isset($this->methodSuffixInterceptorsb194e['sortAsc'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['sortAsc']->__invoke($this, $this->valueHolder612d2, 'sortAsc', array('key' => $key, 'pattern' => $pattern, 'get' => $get, 'offset' => $offset, 'count' => $count, 'store' => $store), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function sortAscAlpha(string $key, ?string $pattern = null, mixed $get = null, int $offset = -1, int $count = -1, ?string $store = null) : array
    {
        if (isset($this->methodPrefixInterceptorsa6e22['sortAscAlpha'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['sortAscAlpha']->__invoke($this, $this->valueHolder612d2, 'sortAscAlpha', array('key' => $key, 'pattern' => $pattern, 'get' => $get, 'offset' => $offset, 'count' => $count, 'store' => $store), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->sortAscAlpha($key, $pattern, $get, $offset, $count, $store);

        if (isset($this->methodSuffixInterceptorsb194e['sortAscAlpha'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['sortAscAlpha']->__invoke($this, $this->valueHolder612d2, 'sortAscAlpha', array('key' => $key, 'pattern' => $pattern, 'get' => $get, 'offset' => $offset, 'count' => $count, 'store' => $store), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function sortDesc(string $key, ?string $pattern = null, mixed $get = null, int $offset = -1, int $count = -1, ?string $store = null) : array
    {
        if (isset($this->methodPrefixInterceptorsa6e22['sortDesc'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['sortDesc']->__invoke($this, $this->valueHolder612d2, 'sortDesc', array('key' => $key, 'pattern' => $pattern, 'get' => $get, 'offset' => $offset, 'count' => $count, 'store' => $store), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->sortDesc($key, $pattern, $get, $offset, $count, $store);

        if (isset($this->methodSuffixInterceptorsb194e['sortDesc'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['sortDesc']->__invoke($this, $this->valueHolder612d2, 'sortDesc', array('key' => $key, 'pattern' => $pattern, 'get' => $get, 'offset' => $offset, 'count' => $count, 'store' => $store), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function sortDescAlpha(string $key, ?string $pattern = null, mixed $get = null, int $offset = -1, int $count = -1, ?string $store = null) : array
    {
        if (isset($this->methodPrefixInterceptorsa6e22['sortDescAlpha'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['sortDescAlpha']->__invoke($this, $this->valueHolder612d2, 'sortDescAlpha', array('key' => $key, 'pattern' => $pattern, 'get' => $get, 'offset' => $offset, 'count' => $count, 'store' => $store), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->sortDescAlpha($key, $pattern, $get, $offset, $count, $store);

        if (isset($this->methodSuffixInterceptorsb194e['sortDescAlpha'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['sortDescAlpha']->__invoke($this, $this->valueHolder612d2, 'sortDescAlpha', array('key' => $key, 'pattern' => $pattern, 'get' => $get, 'offset' => $offset, 'count' => $count, 'store' => $store), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function srem(string $key, mixed $value, mixed ... $other_values) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['srem'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['srem']->__invoke($this, $this->valueHolder612d2, 'srem', array('key' => $key, 'value' => $value, 'other_values' => $other_values), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->srem($key, $value, ...$other_values);

        if (isset($this->methodSuffixInterceptorsb194e['srem'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['srem']->__invoke($this, $this->valueHolder612d2, 'srem', array('key' => $key, 'value' => $value, 'other_values' => $other_values), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function sscan(string $key, int|string|null &$iterator, ?string $pattern = null, int $count = 0) : array|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['sscan'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['sscan']->__invoke($this, $this->valueHolder612d2, 'sscan', array('key' => $key, 'iterator' => &$iterator, 'pattern' => $pattern, 'count' => $count), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->sscan($key, $iterator, $pattern, $count);

        if (isset($this->methodSuffixInterceptorsb194e['sscan'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['sscan']->__invoke($this, $this->valueHolder612d2, 'sscan', array('key' => $key, 'iterator' => &$iterator, 'pattern' => $pattern, 'count' => $count), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function ssubscribe(array $channels, callable $cb) : bool
    {
        if (isset($this->methodPrefixInterceptorsa6e22['ssubscribe'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['ssubscribe']->__invoke($this, $this->valueHolder612d2, 'ssubscribe', array('channels' => $channels, 'cb' => $cb), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->ssubscribe($channels, $cb);

        if (isset($this->methodSuffixInterceptorsb194e['ssubscribe'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['ssubscribe']->__invoke($this, $this->valueHolder612d2, 'ssubscribe', array('channels' => $channels, 'cb' => $cb), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function strlen(string $key) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['strlen'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['strlen']->__invoke($this, $this->valueHolder612d2, 'strlen', array('key' => $key), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->strlen($key);

        if (isset($this->methodSuffixInterceptorsb194e['strlen'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['strlen']->__invoke($this, $this->valueHolder612d2, 'strlen', array('key' => $key), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function subscribe(array $channels, callable $cb) : bool
    {
        if (isset($this->methodPrefixInterceptorsa6e22['subscribe'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['subscribe']->__invoke($this, $this->valueHolder612d2, 'subscribe', array('channels' => $channels, 'cb' => $cb), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->subscribe($channels, $cb);

        if (isset($this->methodSuffixInterceptorsb194e['subscribe'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['subscribe']->__invoke($this, $this->valueHolder612d2, 'subscribe', array('channels' => $channels, 'cb' => $cb), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function sunsubscribe(array $channels) : \Redis|bool|array
    {
        if (isset($this->methodPrefixInterceptorsa6e22['sunsubscribe'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['sunsubscribe']->__invoke($this, $this->valueHolder612d2, 'sunsubscribe', array('channels' => $channels), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->sunsubscribe($channels);

        if (isset($this->methodSuffixInterceptorsb194e['sunsubscribe'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['sunsubscribe']->__invoke($this, $this->valueHolder612d2, 'sunsubscribe', array('channels' => $channels), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function swapdb(int $src, int $dst) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptorsa6e22['swapdb'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['swapdb']->__invoke($this, $this->valueHolder612d2, 'swapdb', array('src' => $src, 'dst' => $dst), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->swapdb($src, $dst);

        if (isset($this->methodSuffixInterceptorsb194e['swapdb'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['swapdb']->__invoke($this, $this->valueHolder612d2, 'swapdb', array('src' => $src, 'dst' => $dst), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function time() : \Redis|array
    {
        if (isset($this->methodPrefixInterceptorsa6e22['time'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['time']->__invoke($this, $this->valueHolder612d2, 'time', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->time();

        if (isset($this->methodSuffixInterceptorsb194e['time'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['time']->__invoke($this, $this->valueHolder612d2, 'time', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function ttl(string $key) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['ttl'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['ttl']->__invoke($this, $this->valueHolder612d2, 'ttl', array('key' => $key), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->ttl($key);

        if (isset($this->methodSuffixInterceptorsb194e['ttl'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['ttl']->__invoke($this, $this->valueHolder612d2, 'ttl', array('key' => $key), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function type(string $key) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['type'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['type']->__invoke($this, $this->valueHolder612d2, 'type', array('key' => $key), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->type($key);

        if (isset($this->methodSuffixInterceptorsb194e['type'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['type']->__invoke($this, $this->valueHolder612d2, 'type', array('key' => $key), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function unlink(string|array $key, string ... $other_keys) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['unlink'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['unlink']->__invoke($this, $this->valueHolder612d2, 'unlink', array('key' => $key, 'other_keys' => $other_keys), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->unlink($key, ...$other_keys);

        if (isset($this->methodSuffixInterceptorsb194e['unlink'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['unlink']->__invoke($this, $this->valueHolder612d2, 'unlink', array('key' => $key, 'other_keys' => $other_keys), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function unsubscribe(array $channels) : \Redis|bool|array
    {
        if (isset($this->methodPrefixInterceptorsa6e22['unsubscribe'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['unsubscribe']->__invoke($this, $this->valueHolder612d2, 'unsubscribe', array('channels' => $channels), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->unsubscribe($channels);

        if (isset($this->methodSuffixInterceptorsb194e['unsubscribe'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['unsubscribe']->__invoke($this, $this->valueHolder612d2, 'unsubscribe', array('channels' => $channels), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function unwatch() : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptorsa6e22['unwatch'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['unwatch']->__invoke($this, $this->valueHolder612d2, 'unwatch', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->unwatch();

        if (isset($this->methodSuffixInterceptorsb194e['unwatch'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['unwatch']->__invoke($this, $this->valueHolder612d2, 'unwatch', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function watch(string|array $key, string ... $other_keys) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptorsa6e22['watch'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['watch']->__invoke($this, $this->valueHolder612d2, 'watch', array('key' => $key, 'other_keys' => $other_keys), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->watch($key, ...$other_keys);

        if (isset($this->methodSuffixInterceptorsb194e['watch'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['watch']->__invoke($this, $this->valueHolder612d2, 'watch', array('key' => $key, 'other_keys' => $other_keys), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function wait(int $numreplicas, int $timeout) : int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['wait'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['wait']->__invoke($this, $this->valueHolder612d2, 'wait', array('numreplicas' => $numreplicas, 'timeout' => $timeout), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->wait($numreplicas, $timeout);

        if (isset($this->methodSuffixInterceptorsb194e['wait'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['wait']->__invoke($this, $this->valueHolder612d2, 'wait', array('numreplicas' => $numreplicas, 'timeout' => $timeout), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function xack(string $key, string $group, array $ids) : int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['xack'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['xack']->__invoke($this, $this->valueHolder612d2, 'xack', array('key' => $key, 'group' => $group, 'ids' => $ids), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->xack($key, $group, $ids);

        if (isset($this->methodSuffixInterceptorsb194e['xack'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['xack']->__invoke($this, $this->valueHolder612d2, 'xack', array('key' => $key, 'group' => $group, 'ids' => $ids), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function xadd(string $key, string $id, array $values, int $maxlen = 0, bool $approx = false, bool $nomkstream = false) : \Redis|string|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['xadd'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['xadd']->__invoke($this, $this->valueHolder612d2, 'xadd', array('key' => $key, 'id' => $id, 'values' => $values, 'maxlen' => $maxlen, 'approx' => $approx, 'nomkstream' => $nomkstream), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->xadd($key, $id, $values, $maxlen, $approx, $nomkstream);

        if (isset($this->methodSuffixInterceptorsb194e['xadd'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['xadd']->__invoke($this, $this->valueHolder612d2, 'xadd', array('key' => $key, 'id' => $id, 'values' => $values, 'maxlen' => $maxlen, 'approx' => $approx, 'nomkstream' => $nomkstream), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function xautoclaim(string $key, string $group, string $consumer, int $min_idle, string $start, int $count = -1, bool $justid = false) : \Redis|bool|array
    {
        if (isset($this->methodPrefixInterceptorsa6e22['xautoclaim'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['xautoclaim']->__invoke($this, $this->valueHolder612d2, 'xautoclaim', array('key' => $key, 'group' => $group, 'consumer' => $consumer, 'min_idle' => $min_idle, 'start' => $start, 'count' => $count, 'justid' => $justid), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->xautoclaim($key, $group, $consumer, $min_idle, $start, $count, $justid);

        if (isset($this->methodSuffixInterceptorsb194e['xautoclaim'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['xautoclaim']->__invoke($this, $this->valueHolder612d2, 'xautoclaim', array('key' => $key, 'group' => $group, 'consumer' => $consumer, 'min_idle' => $min_idle, 'start' => $start, 'count' => $count, 'justid' => $justid), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function xclaim(string $key, string $group, string $consumer, int $min_idle, array $ids, array $options) : \Redis|bool|array
    {
        if (isset($this->methodPrefixInterceptorsa6e22['xclaim'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['xclaim']->__invoke($this, $this->valueHolder612d2, 'xclaim', array('key' => $key, 'group' => $group, 'consumer' => $consumer, 'min_idle' => $min_idle, 'ids' => $ids, 'options' => $options), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->xclaim($key, $group, $consumer, $min_idle, $ids, $options);

        if (isset($this->methodSuffixInterceptorsb194e['xclaim'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['xclaim']->__invoke($this, $this->valueHolder612d2, 'xclaim', array('key' => $key, 'group' => $group, 'consumer' => $consumer, 'min_idle' => $min_idle, 'ids' => $ids, 'options' => $options), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function xdel(string $key, array $ids) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['xdel'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['xdel']->__invoke($this, $this->valueHolder612d2, 'xdel', array('key' => $key, 'ids' => $ids), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->xdel($key, $ids);

        if (isset($this->methodSuffixInterceptorsb194e['xdel'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['xdel']->__invoke($this, $this->valueHolder612d2, 'xdel', array('key' => $key, 'ids' => $ids), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function xgroup(string $operation, ?string $key = null, ?string $group = null, ?string $id_or_consumer = null, bool $mkstream = false, int $entries_read = -2) : mixed
    {
        if (isset($this->methodPrefixInterceptorsa6e22['xgroup'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['xgroup']->__invoke($this, $this->valueHolder612d2, 'xgroup', array('operation' => $operation, 'key' => $key, 'group' => $group, 'id_or_consumer' => $id_or_consumer, 'mkstream' => $mkstream, 'entries_read' => $entries_read), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->xgroup($operation, $key, $group, $id_or_consumer, $mkstream, $entries_read);

        if (isset($this->methodSuffixInterceptorsb194e['xgroup'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['xgroup']->__invoke($this, $this->valueHolder612d2, 'xgroup', array('operation' => $operation, 'key' => $key, 'group' => $group, 'id_or_consumer' => $id_or_consumer, 'mkstream' => $mkstream, 'entries_read' => $entries_read), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function xinfo(string $operation, ?string $arg1 = null, ?string $arg2 = null, int $count = -1) : mixed
    {
        if (isset($this->methodPrefixInterceptorsa6e22['xinfo'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['xinfo']->__invoke($this, $this->valueHolder612d2, 'xinfo', array('operation' => $operation, 'arg1' => $arg1, 'arg2' => $arg2, 'count' => $count), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->xinfo($operation, $arg1, $arg2, $count);

        if (isset($this->methodSuffixInterceptorsb194e['xinfo'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['xinfo']->__invoke($this, $this->valueHolder612d2, 'xinfo', array('operation' => $operation, 'arg1' => $arg1, 'arg2' => $arg2, 'count' => $count), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function xlen(string $key) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['xlen'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['xlen']->__invoke($this, $this->valueHolder612d2, 'xlen', array('key' => $key), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->xlen($key);

        if (isset($this->methodSuffixInterceptorsb194e['xlen'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['xlen']->__invoke($this, $this->valueHolder612d2, 'xlen', array('key' => $key), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function xpending(string $key, string $group, ?string $start = null, ?string $end = null, int $count = -1, ?string $consumer = null) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['xpending'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['xpending']->__invoke($this, $this->valueHolder612d2, 'xpending', array('key' => $key, 'group' => $group, 'start' => $start, 'end' => $end, 'count' => $count, 'consumer' => $consumer), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->xpending($key, $group, $start, $end, $count, $consumer);

        if (isset($this->methodSuffixInterceptorsb194e['xpending'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['xpending']->__invoke($this, $this->valueHolder612d2, 'xpending', array('key' => $key, 'group' => $group, 'start' => $start, 'end' => $end, 'count' => $count, 'consumer' => $consumer), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function xrange(string $key, string $start, string $end, int $count = -1) : \Redis|bool|array
    {
        if (isset($this->methodPrefixInterceptorsa6e22['xrange'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['xrange']->__invoke($this, $this->valueHolder612d2, 'xrange', array('key' => $key, 'start' => $start, 'end' => $end, 'count' => $count), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->xrange($key, $start, $end, $count);

        if (isset($this->methodSuffixInterceptorsb194e['xrange'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['xrange']->__invoke($this, $this->valueHolder612d2, 'xrange', array('key' => $key, 'start' => $start, 'end' => $end, 'count' => $count), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function xread(array $streams, int $count = -1, int $block = -1) : \Redis|bool|array
    {
        if (isset($this->methodPrefixInterceptorsa6e22['xread'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['xread']->__invoke($this, $this->valueHolder612d2, 'xread', array('streams' => $streams, 'count' => $count, 'block' => $block), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->xread($streams, $count, $block);

        if (isset($this->methodSuffixInterceptorsb194e['xread'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['xread']->__invoke($this, $this->valueHolder612d2, 'xread', array('streams' => $streams, 'count' => $count, 'block' => $block), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function xreadgroup(string $group, string $consumer, array $streams, int $count = 1, int $block = 1) : \Redis|bool|array
    {
        if (isset($this->methodPrefixInterceptorsa6e22['xreadgroup'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['xreadgroup']->__invoke($this, $this->valueHolder612d2, 'xreadgroup', array('group' => $group, 'consumer' => $consumer, 'streams' => $streams, 'count' => $count, 'block' => $block), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->xreadgroup($group, $consumer, $streams, $count, $block);

        if (isset($this->methodSuffixInterceptorsb194e['xreadgroup'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['xreadgroup']->__invoke($this, $this->valueHolder612d2, 'xreadgroup', array('group' => $group, 'consumer' => $consumer, 'streams' => $streams, 'count' => $count, 'block' => $block), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function xrevrange(string $key, string $end, string $start, int $count = -1) : \Redis|bool|array
    {
        if (isset($this->methodPrefixInterceptorsa6e22['xrevrange'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['xrevrange']->__invoke($this, $this->valueHolder612d2, 'xrevrange', array('key' => $key, 'end' => $end, 'start' => $start, 'count' => $count), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->xrevrange($key, $end, $start, $count);

        if (isset($this->methodSuffixInterceptorsb194e['xrevrange'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['xrevrange']->__invoke($this, $this->valueHolder612d2, 'xrevrange', array('key' => $key, 'end' => $end, 'start' => $start, 'count' => $count), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function xtrim(string $key, string $threshold, bool $approx = false, bool $minid = false, int $limit = -1) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['xtrim'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['xtrim']->__invoke($this, $this->valueHolder612d2, 'xtrim', array('key' => $key, 'threshold' => $threshold, 'approx' => $approx, 'minid' => $minid, 'limit' => $limit), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->xtrim($key, $threshold, $approx, $minid, $limit);

        if (isset($this->methodSuffixInterceptorsb194e['xtrim'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['xtrim']->__invoke($this, $this->valueHolder612d2, 'xtrim', array('key' => $key, 'threshold' => $threshold, 'approx' => $approx, 'minid' => $minid, 'limit' => $limit), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zAdd(string $key, float|array $score_or_options, mixed ... $more_scores_and_mems) : \Redis|int|float|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['zAdd'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['zAdd']->__invoke($this, $this->valueHolder612d2, 'zAdd', array('key' => $key, 'score_or_options' => $score_or_options, 'more_scores_and_mems' => $more_scores_and_mems), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->zAdd($key, $score_or_options, ...$more_scores_and_mems);

        if (isset($this->methodSuffixInterceptorsb194e['zAdd'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['zAdd']->__invoke($this, $this->valueHolder612d2, 'zAdd', array('key' => $key, 'score_or_options' => $score_or_options, 'more_scores_and_mems' => $more_scores_and_mems), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zCard(string $key) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['zCard'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['zCard']->__invoke($this, $this->valueHolder612d2, 'zCard', array('key' => $key), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->zCard($key);

        if (isset($this->methodSuffixInterceptorsb194e['zCard'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['zCard']->__invoke($this, $this->valueHolder612d2, 'zCard', array('key' => $key), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zCount(string $key, int|string $start, int|string $end) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['zCount'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['zCount']->__invoke($this, $this->valueHolder612d2, 'zCount', array('key' => $key, 'start' => $start, 'end' => $end), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->zCount($key, $start, $end);

        if (isset($this->methodSuffixInterceptorsb194e['zCount'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['zCount']->__invoke($this, $this->valueHolder612d2, 'zCount', array('key' => $key, 'start' => $start, 'end' => $end), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zIncrBy(string $key, float $value, mixed $member) : \Redis|float|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['zIncrBy'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['zIncrBy']->__invoke($this, $this->valueHolder612d2, 'zIncrBy', array('key' => $key, 'value' => $value, 'member' => $member), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->zIncrBy($key, $value, $member);

        if (isset($this->methodSuffixInterceptorsb194e['zIncrBy'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['zIncrBy']->__invoke($this, $this->valueHolder612d2, 'zIncrBy', array('key' => $key, 'value' => $value, 'member' => $member), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zLexCount(string $key, string $min, string $max) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['zLexCount'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['zLexCount']->__invoke($this, $this->valueHolder612d2, 'zLexCount', array('key' => $key, 'min' => $min, 'max' => $max), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->zLexCount($key, $min, $max);

        if (isset($this->methodSuffixInterceptorsb194e['zLexCount'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['zLexCount']->__invoke($this, $this->valueHolder612d2, 'zLexCount', array('key' => $key, 'min' => $min, 'max' => $max), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zMscore(string $key, mixed $member, mixed ... $other_members) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['zMscore'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['zMscore']->__invoke($this, $this->valueHolder612d2, 'zMscore', array('key' => $key, 'member' => $member, 'other_members' => $other_members), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->zMscore($key, $member, ...$other_members);

        if (isset($this->methodSuffixInterceptorsb194e['zMscore'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['zMscore']->__invoke($this, $this->valueHolder612d2, 'zMscore', array('key' => $key, 'member' => $member, 'other_members' => $other_members), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zPopMax(string $key, ?int $count = null) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['zPopMax'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['zPopMax']->__invoke($this, $this->valueHolder612d2, 'zPopMax', array('key' => $key, 'count' => $count), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->zPopMax($key, $count);

        if (isset($this->methodSuffixInterceptorsb194e['zPopMax'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['zPopMax']->__invoke($this, $this->valueHolder612d2, 'zPopMax', array('key' => $key, 'count' => $count), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zPopMin(string $key, ?int $count = null) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['zPopMin'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['zPopMin']->__invoke($this, $this->valueHolder612d2, 'zPopMin', array('key' => $key, 'count' => $count), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->zPopMin($key, $count);

        if (isset($this->methodSuffixInterceptorsb194e['zPopMin'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['zPopMin']->__invoke($this, $this->valueHolder612d2, 'zPopMin', array('key' => $key, 'count' => $count), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zRange(string $key, int|string $start, int|string $end, bool|array|null $options = null) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['zRange'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['zRange']->__invoke($this, $this->valueHolder612d2, 'zRange', array('key' => $key, 'start' => $start, 'end' => $end, 'options' => $options), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->zRange($key, $start, $end, $options);

        if (isset($this->methodSuffixInterceptorsb194e['zRange'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['zRange']->__invoke($this, $this->valueHolder612d2, 'zRange', array('key' => $key, 'start' => $start, 'end' => $end, 'options' => $options), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zRangeByLex(string $key, string $min, string $max, int $offset = -1, int $count = -1) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['zRangeByLex'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['zRangeByLex']->__invoke($this, $this->valueHolder612d2, 'zRangeByLex', array('key' => $key, 'min' => $min, 'max' => $max, 'offset' => $offset, 'count' => $count), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->zRangeByLex($key, $min, $max, $offset, $count);

        if (isset($this->methodSuffixInterceptorsb194e['zRangeByLex'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['zRangeByLex']->__invoke($this, $this->valueHolder612d2, 'zRangeByLex', array('key' => $key, 'min' => $min, 'max' => $max, 'offset' => $offset, 'count' => $count), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zRangeByScore(string $key, string $start, string $end, array $options = []) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['zRangeByScore'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['zRangeByScore']->__invoke($this, $this->valueHolder612d2, 'zRangeByScore', array('key' => $key, 'start' => $start, 'end' => $end, 'options' => $options), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->zRangeByScore($key, $start, $end, $options);

        if (isset($this->methodSuffixInterceptorsb194e['zRangeByScore'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['zRangeByScore']->__invoke($this, $this->valueHolder612d2, 'zRangeByScore', array('key' => $key, 'start' => $start, 'end' => $end, 'options' => $options), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zrangestore(string $dstkey, string $srckey, string $start, string $end, bool|array|null $options = null) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['zrangestore'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['zrangestore']->__invoke($this, $this->valueHolder612d2, 'zrangestore', array('dstkey' => $dstkey, 'srckey' => $srckey, 'start' => $start, 'end' => $end, 'options' => $options), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->zrangestore($dstkey, $srckey, $start, $end, $options);

        if (isset($this->methodSuffixInterceptorsb194e['zrangestore'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['zrangestore']->__invoke($this, $this->valueHolder612d2, 'zrangestore', array('dstkey' => $dstkey, 'srckey' => $srckey, 'start' => $start, 'end' => $end, 'options' => $options), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zRandMember(string $key, ?array $options = null) : \Redis|string|array
    {
        if (isset($this->methodPrefixInterceptorsa6e22['zRandMember'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['zRandMember']->__invoke($this, $this->valueHolder612d2, 'zRandMember', array('key' => $key, 'options' => $options), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->zRandMember($key, $options);

        if (isset($this->methodSuffixInterceptorsb194e['zRandMember'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['zRandMember']->__invoke($this, $this->valueHolder612d2, 'zRandMember', array('key' => $key, 'options' => $options), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zRank(string $key, mixed $member) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['zRank'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['zRank']->__invoke($this, $this->valueHolder612d2, 'zRank', array('key' => $key, 'member' => $member), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->zRank($key, $member);

        if (isset($this->methodSuffixInterceptorsb194e['zRank'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['zRank']->__invoke($this, $this->valueHolder612d2, 'zRank', array('key' => $key, 'member' => $member), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zRem(mixed $key, mixed $member, mixed ... $other_members) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['zRem'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['zRem']->__invoke($this, $this->valueHolder612d2, 'zRem', array('key' => $key, 'member' => $member, 'other_members' => $other_members), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->zRem($key, $member, ...$other_members);

        if (isset($this->methodSuffixInterceptorsb194e['zRem'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['zRem']->__invoke($this, $this->valueHolder612d2, 'zRem', array('key' => $key, 'member' => $member, 'other_members' => $other_members), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zRemRangeByLex(string $key, string $min, string $max) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['zRemRangeByLex'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['zRemRangeByLex']->__invoke($this, $this->valueHolder612d2, 'zRemRangeByLex', array('key' => $key, 'min' => $min, 'max' => $max), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->zRemRangeByLex($key, $min, $max);

        if (isset($this->methodSuffixInterceptorsb194e['zRemRangeByLex'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['zRemRangeByLex']->__invoke($this, $this->valueHolder612d2, 'zRemRangeByLex', array('key' => $key, 'min' => $min, 'max' => $max), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zRemRangeByRank(string $key, int $start, int $end) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['zRemRangeByRank'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['zRemRangeByRank']->__invoke($this, $this->valueHolder612d2, 'zRemRangeByRank', array('key' => $key, 'start' => $start, 'end' => $end), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->zRemRangeByRank($key, $start, $end);

        if (isset($this->methodSuffixInterceptorsb194e['zRemRangeByRank'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['zRemRangeByRank']->__invoke($this, $this->valueHolder612d2, 'zRemRangeByRank', array('key' => $key, 'start' => $start, 'end' => $end), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zRemRangeByScore(string $key, string $start, string $end) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['zRemRangeByScore'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['zRemRangeByScore']->__invoke($this, $this->valueHolder612d2, 'zRemRangeByScore', array('key' => $key, 'start' => $start, 'end' => $end), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->zRemRangeByScore($key, $start, $end);

        if (isset($this->methodSuffixInterceptorsb194e['zRemRangeByScore'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['zRemRangeByScore']->__invoke($this, $this->valueHolder612d2, 'zRemRangeByScore', array('key' => $key, 'start' => $start, 'end' => $end), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zRevRange(string $key, int $start, int $end, mixed $scores = null) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['zRevRange'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['zRevRange']->__invoke($this, $this->valueHolder612d2, 'zRevRange', array('key' => $key, 'start' => $start, 'end' => $end, 'scores' => $scores), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->zRevRange($key, $start, $end, $scores);

        if (isset($this->methodSuffixInterceptorsb194e['zRevRange'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['zRevRange']->__invoke($this, $this->valueHolder612d2, 'zRevRange', array('key' => $key, 'start' => $start, 'end' => $end, 'scores' => $scores), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zRevRangeByLex(string $key, string $max, string $min, int $offset = -1, int $count = -1) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['zRevRangeByLex'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['zRevRangeByLex']->__invoke($this, $this->valueHolder612d2, 'zRevRangeByLex', array('key' => $key, 'max' => $max, 'min' => $min, 'offset' => $offset, 'count' => $count), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->zRevRangeByLex($key, $max, $min, $offset, $count);

        if (isset($this->methodSuffixInterceptorsb194e['zRevRangeByLex'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['zRevRangeByLex']->__invoke($this, $this->valueHolder612d2, 'zRevRangeByLex', array('key' => $key, 'max' => $max, 'min' => $min, 'offset' => $offset, 'count' => $count), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zRevRangeByScore(string $key, string $max, string $min, bool|array $options = []) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['zRevRangeByScore'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['zRevRangeByScore']->__invoke($this, $this->valueHolder612d2, 'zRevRangeByScore', array('key' => $key, 'max' => $max, 'min' => $min, 'options' => $options), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->zRevRangeByScore($key, $max, $min, $options);

        if (isset($this->methodSuffixInterceptorsb194e['zRevRangeByScore'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['zRevRangeByScore']->__invoke($this, $this->valueHolder612d2, 'zRevRangeByScore', array('key' => $key, 'max' => $max, 'min' => $min, 'options' => $options), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zRevRank(string $key, mixed $member) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['zRevRank'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['zRevRank']->__invoke($this, $this->valueHolder612d2, 'zRevRank', array('key' => $key, 'member' => $member), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->zRevRank($key, $member);

        if (isset($this->methodSuffixInterceptorsb194e['zRevRank'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['zRevRank']->__invoke($this, $this->valueHolder612d2, 'zRevRank', array('key' => $key, 'member' => $member), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zScore(string $key, mixed $member) : \Redis|float|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['zScore'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['zScore']->__invoke($this, $this->valueHolder612d2, 'zScore', array('key' => $key, 'member' => $member), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->zScore($key, $member);

        if (isset($this->methodSuffixInterceptorsb194e['zScore'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['zScore']->__invoke($this, $this->valueHolder612d2, 'zScore', array('key' => $key, 'member' => $member), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zdiff(array $keys, ?array $options = null) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['zdiff'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['zdiff']->__invoke($this, $this->valueHolder612d2, 'zdiff', array('keys' => $keys, 'options' => $options), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->zdiff($keys, $options);

        if (isset($this->methodSuffixInterceptorsb194e['zdiff'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['zdiff']->__invoke($this, $this->valueHolder612d2, 'zdiff', array('keys' => $keys, 'options' => $options), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zdiffstore(string $dst, array $keys) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['zdiffstore'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['zdiffstore']->__invoke($this, $this->valueHolder612d2, 'zdiffstore', array('dst' => $dst, 'keys' => $keys), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->zdiffstore($dst, $keys);

        if (isset($this->methodSuffixInterceptorsb194e['zdiffstore'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['zdiffstore']->__invoke($this, $this->valueHolder612d2, 'zdiffstore', array('dst' => $dst, 'keys' => $keys), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zinter(array $keys, ?array $weights = null, ?array $options = null) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['zinter'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['zinter']->__invoke($this, $this->valueHolder612d2, 'zinter', array('keys' => $keys, 'weights' => $weights, 'options' => $options), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->zinter($keys, $weights, $options);

        if (isset($this->methodSuffixInterceptorsb194e['zinter'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['zinter']->__invoke($this, $this->valueHolder612d2, 'zinter', array('keys' => $keys, 'weights' => $weights, 'options' => $options), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zintercard(array $keys, int $limit = -1) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['zintercard'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['zintercard']->__invoke($this, $this->valueHolder612d2, 'zintercard', array('keys' => $keys, 'limit' => $limit), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->zintercard($keys, $limit);

        if (isset($this->methodSuffixInterceptorsb194e['zintercard'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['zintercard']->__invoke($this, $this->valueHolder612d2, 'zintercard', array('keys' => $keys, 'limit' => $limit), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zinterstore(string $dst, array $keys, ?array $weights = null, ?string $aggregate = null) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['zinterstore'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['zinterstore']->__invoke($this, $this->valueHolder612d2, 'zinterstore', array('dst' => $dst, 'keys' => $keys, 'weights' => $weights, 'aggregate' => $aggregate), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->zinterstore($dst, $keys, $weights, $aggregate);

        if (isset($this->methodSuffixInterceptorsb194e['zinterstore'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['zinterstore']->__invoke($this, $this->valueHolder612d2, 'zinterstore', array('dst' => $dst, 'keys' => $keys, 'weights' => $weights, 'aggregate' => $aggregate), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zscan(string $key, int|string|null &$iterator, ?string $pattern = null, int $count = 0) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['zscan'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['zscan']->__invoke($this, $this->valueHolder612d2, 'zscan', array('key' => $key, 'iterator' => &$iterator, 'pattern' => $pattern, 'count' => $count), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->zscan($key, $iterator, $pattern, $count);

        if (isset($this->methodSuffixInterceptorsb194e['zscan'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['zscan']->__invoke($this, $this->valueHolder612d2, 'zscan', array('key' => $key, 'iterator' => &$iterator, 'pattern' => $pattern, 'count' => $count), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zunion(array $keys, ?array $weights = null, ?array $options = null) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['zunion'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['zunion']->__invoke($this, $this->valueHolder612d2, 'zunion', array('keys' => $keys, 'weights' => $weights, 'options' => $options), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->zunion($keys, $weights, $options);

        if (isset($this->methodSuffixInterceptorsb194e['zunion'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['zunion']->__invoke($this, $this->valueHolder612d2, 'zunion', array('keys' => $keys, 'weights' => $weights, 'options' => $options), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zunionstore(string $dst, array $keys, ?array $weights = null, ?string $aggregate = null) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptorsa6e22['zunionstore'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['zunionstore']->__invoke($this, $this->valueHolder612d2, 'zunionstore', array('dst' => $dst, 'keys' => $keys, 'weights' => $weights, 'aggregate' => $aggregate), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder612d2->zunionstore($dst, $keys, $weights, $aggregate);

        if (isset($this->methodSuffixInterceptorsb194e['zunionstore'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['zunionstore']->__invoke($this, $this->valueHolder612d2, 'zunionstore', array('dst' => $dst, 'keys' => $keys, 'weights' => $weights, 'aggregate' => $aggregate), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function __construct(?array $options = null)
    {
        static $reflection;

        if (! $this->valueHolder612d2) {
            $reflection = $reflection ?? new \ReflectionClass('Redis');
            $this->valueHolder612d2 = $reflection->newInstanceWithoutConstructor();
        }

        $this->valueHolder612d2->__construct($options);
    }

    /**
     * Constructor to setup interceptors
     *
     * @param \Redis $wrappedObject
     * @param \Closure[] $prefixInterceptors method interceptors to be used before
     * method logic
     * @param \Closure[] $suffixInterceptors method interceptors to be used before
     * method logic
     *
     * @return self
     */
    public static function staticProxyConstructor($wrappedObject, array $prefixInterceptors = [], array $suffixInterceptors = []) : \Redis
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        $instance->valueHolder612d2 = $wrappedObject;
        $instance->methodPrefixInterceptorsa6e22 = $prefixInterceptors;
        $instance->methodSuffixInterceptorsb194e = $suffixInterceptors;

        return $instance;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder612d2;
    }

    public function setMethodPrefixInterceptor(string $methodName, ?\Closure $prefixInterceptor = null) : void
    {
        $this->methodPrefixInterceptorsa6e22[$methodName] = $prefixInterceptor;
    }

    public function setMethodSuffixInterceptor(string $methodName, ?\Closure $suffixInterceptor = null) : void
    {
        $this->methodSuffixInterceptorsb194e[$methodName] = $suffixInterceptor;
    }

    public function & __get($name)
    {
        if (isset($this->methodPrefixInterceptorsa6e22['__get'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['__get']->__invoke($this, $this->valueHolder612d2, '__get', array('name' => $name), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $realInstanceReflection = new \ReflectionClass('Redis');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder612d2;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder612d2;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        if (isset($this->methodSuffixInterceptorsb194e['__get'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['__get']->__invoke($this, $this->valueHolder612d2, '__get', array('name' => $name), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function __set($name, $value)
    {
        if (isset($this->methodPrefixInterceptorsa6e22['__set'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['__set']->__invoke($this, $this->valueHolder612d2, '__set', array('name' => $name, 'value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $realInstanceReflection = new \ReflectionClass('Redis');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder612d2;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder612d2;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        if (isset($this->methodSuffixInterceptorsb194e['__set'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['__set']->__invoke($this, $this->valueHolder612d2, '__set', array('name' => $name, 'value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function __isset($name)
    {
        if (isset($this->methodPrefixInterceptorsa6e22['__isset'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['__isset']->__invoke($this, $this->valueHolder612d2, '__isset', array('name' => $name), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $realInstanceReflection = new \ReflectionClass('Redis');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder612d2;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder612d2;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        if (isset($this->methodSuffixInterceptorsb194e['__isset'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['__isset']->__invoke($this, $this->valueHolder612d2, '__isset', array('name' => $name), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function __unset($name)
    {
        if (isset($this->methodPrefixInterceptorsa6e22['__unset'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptorsa6e22['__unset']->__invoke($this, $this->valueHolder612d2, '__unset', array('name' => $name), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $realInstanceReflection = new \ReflectionClass('Redis');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder612d2;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder612d2;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();$returnValue = false;

        if (isset($this->methodSuffixInterceptorsb194e['__unset'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptorsb194e['__unset']->__invoke($this, $this->valueHolder612d2, '__unset', array('name' => $name), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function __clone()
    {
        $this->valueHolder612d2 = clone $this->valueHolder612d2;

        foreach ($this->methodPrefixInterceptorsa6e22 as $key => $value) {
            $this->methodPrefixInterceptorsa6e22[$key] = clone $value;
        }

        foreach ($this->methodSuffixInterceptorsb194e as $key => $value) {
            $this->methodSuffixInterceptorsb194e[$key] = clone $value;
        }
    }

    public function __sleep()
    {
        return array('valueHolder612d2');
    }

    public function __wakeup()
    {
    }
}
