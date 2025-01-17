<?php

namespace ProxyManagerGeneratedProxy\__PM__\Redis;

class Generated14f26d05e8421d539a8073b63d907c66 extends \Redis implements \ProxyManager\Proxy\AccessInterceptorValueHolderInterface
{
    /**
     * @var \Redis|null wrapped object, if the proxy is initialized
     */
    private $valueHolder2528f = null;

    /**
     * @var \Closure[] map of interceptors to be called per-method before execution
     */
    private $methodPrefixInterceptors2175e = [
        
    ];

    /**
     * @var \Closure[] map of interceptors to be called per-method after execution
     */
    private $methodSuffixInterceptors90df7 = [
        
    ];

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties45094 = [
        
    ];

    private static $signature14f26d05e8421d539a8073b63d907c66 = 'YTo0OntzOjk6ImNsYXNzTmFtZSI7czo1OiJSZWRpcyI7czo3OiJmYWN0b3J5IjtzOjU2OiJQcm94eU1hbmFnZXJcRmFjdG9yeVxBY2Nlc3NJbnRlcmNlcHRvclZhbHVlSG9sZGVyRmFjdG9yeSI7czoxOToicHJveHlNYW5hZ2VyVmVyc2lvbiI7czo0ODoidjEuMC4xOEAyYzhhNmNmZmMzMjIwZTk5MzUyYWQ5NThmZTdjZjA2YmY2Zjc2OTBmIjtzOjEyOiJwcm94eU9wdGlvbnMiO2E6MDp7fX0=';

    public function __destruct()
    {
        if (isset($this->methodPrefixInterceptors2175e['__destruct'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['__destruct']->__invoke($this, $this->valueHolder2528f, '__destruct', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->__destruct();

        if (isset($this->methodSuffixInterceptors90df7['__destruct'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['__destruct']->__invoke($this, $this->valueHolder2528f, '__destruct', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function _compress(string $value) : string
    {
        if (isset($this->methodPrefixInterceptors2175e['_compress'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['_compress']->__invoke($this, $this->valueHolder2528f, '_compress', array('value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->_compress($value);

        if (isset($this->methodSuffixInterceptors90df7['_compress'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['_compress']->__invoke($this, $this->valueHolder2528f, '_compress', array('value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function _uncompress(string $value) : string
    {
        if (isset($this->methodPrefixInterceptors2175e['_uncompress'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['_uncompress']->__invoke($this, $this->valueHolder2528f, '_uncompress', array('value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->_uncompress($value);

        if (isset($this->methodSuffixInterceptors90df7['_uncompress'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['_uncompress']->__invoke($this, $this->valueHolder2528f, '_uncompress', array('value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function _prefix(string $key) : string
    {
        if (isset($this->methodPrefixInterceptors2175e['_prefix'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['_prefix']->__invoke($this, $this->valueHolder2528f, '_prefix', array('key' => $key), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->_prefix($key);

        if (isset($this->methodSuffixInterceptors90df7['_prefix'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['_prefix']->__invoke($this, $this->valueHolder2528f, '_prefix', array('key' => $key), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function _serialize(mixed $value) : string
    {
        if (isset($this->methodPrefixInterceptors2175e['_serialize'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['_serialize']->__invoke($this, $this->valueHolder2528f, '_serialize', array('value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->_serialize($value);

        if (isset($this->methodSuffixInterceptors90df7['_serialize'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['_serialize']->__invoke($this, $this->valueHolder2528f, '_serialize', array('value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function _unserialize(string $value) : mixed
    {
        if (isset($this->methodPrefixInterceptors2175e['_unserialize'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['_unserialize']->__invoke($this, $this->valueHolder2528f, '_unserialize', array('value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->_unserialize($value);

        if (isset($this->methodSuffixInterceptors90df7['_unserialize'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['_unserialize']->__invoke($this, $this->valueHolder2528f, '_unserialize', array('value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function _pack(mixed $value) : string
    {
        if (isset($this->methodPrefixInterceptors2175e['_pack'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['_pack']->__invoke($this, $this->valueHolder2528f, '_pack', array('value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->_pack($value);

        if (isset($this->methodSuffixInterceptors90df7['_pack'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['_pack']->__invoke($this, $this->valueHolder2528f, '_pack', array('value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function _unpack(string $value) : mixed
    {
        if (isset($this->methodPrefixInterceptors2175e['_unpack'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['_unpack']->__invoke($this, $this->valueHolder2528f, '_unpack', array('value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->_unpack($value);

        if (isset($this->methodSuffixInterceptors90df7['_unpack'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['_unpack']->__invoke($this, $this->valueHolder2528f, '_unpack', array('value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function acl(string $subcmd, string ... $args) : mixed
    {
        if (isset($this->methodPrefixInterceptors2175e['acl'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['acl']->__invoke($this, $this->valueHolder2528f, 'acl', array('subcmd' => $subcmd, 'args' => $args), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->acl($subcmd, ...$args);

        if (isset($this->methodSuffixInterceptors90df7['acl'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['acl']->__invoke($this, $this->valueHolder2528f, 'acl', array('subcmd' => $subcmd, 'args' => $args), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function append(string $key, mixed $value) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['append'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['append']->__invoke($this, $this->valueHolder2528f, 'append', array('key' => $key, 'value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->append($key, $value);

        if (isset($this->methodSuffixInterceptors90df7['append'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['append']->__invoke($this, $this->valueHolder2528f, 'append', array('key' => $key, 'value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function auth(mixed $credentials) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptors2175e['auth'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['auth']->__invoke($this, $this->valueHolder2528f, 'auth', array('credentials' => $credentials), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->auth($credentials);

        if (isset($this->methodSuffixInterceptors90df7['auth'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['auth']->__invoke($this, $this->valueHolder2528f, 'auth', array('credentials' => $credentials), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function bgSave() : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptors2175e['bgSave'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['bgSave']->__invoke($this, $this->valueHolder2528f, 'bgSave', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->bgSave();

        if (isset($this->methodSuffixInterceptors90df7['bgSave'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['bgSave']->__invoke($this, $this->valueHolder2528f, 'bgSave', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function bgrewriteaof() : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptors2175e['bgrewriteaof'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['bgrewriteaof']->__invoke($this, $this->valueHolder2528f, 'bgrewriteaof', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->bgrewriteaof();

        if (isset($this->methodSuffixInterceptors90df7['bgrewriteaof'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['bgrewriteaof']->__invoke($this, $this->valueHolder2528f, 'bgrewriteaof', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function waitaof(int $numlocal, int $numreplicas, int $timeout) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptors2175e['waitaof'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['waitaof']->__invoke($this, $this->valueHolder2528f, 'waitaof', array('numlocal' => $numlocal, 'numreplicas' => $numreplicas, 'timeout' => $timeout), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->waitaof($numlocal, $numreplicas, $timeout);

        if (isset($this->methodSuffixInterceptors90df7['waitaof'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['waitaof']->__invoke($this, $this->valueHolder2528f, 'waitaof', array('numlocal' => $numlocal, 'numreplicas' => $numreplicas, 'timeout' => $timeout), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function bitcount(string $key, int $start = 0, int $end = -1, bool $bybit = false) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['bitcount'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['bitcount']->__invoke($this, $this->valueHolder2528f, 'bitcount', array('key' => $key, 'start' => $start, 'end' => $end, 'bybit' => $bybit), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->bitcount($key, $start, $end, $bybit);

        if (isset($this->methodSuffixInterceptors90df7['bitcount'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['bitcount']->__invoke($this, $this->valueHolder2528f, 'bitcount', array('key' => $key, 'start' => $start, 'end' => $end, 'bybit' => $bybit), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function bitop(string $operation, string $deskey, string $srckey, string ... $other_keys) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['bitop'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['bitop']->__invoke($this, $this->valueHolder2528f, 'bitop', array('operation' => $operation, 'deskey' => $deskey, 'srckey' => $srckey, 'other_keys' => $other_keys), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->bitop($operation, $deskey, $srckey, ...$other_keys);

        if (isset($this->methodSuffixInterceptors90df7['bitop'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['bitop']->__invoke($this, $this->valueHolder2528f, 'bitop', array('operation' => $operation, 'deskey' => $deskey, 'srckey' => $srckey, 'other_keys' => $other_keys), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function bitpos(string $key, bool $bit, int $start = 0, int $end = -1, bool $bybit = false) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['bitpos'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['bitpos']->__invoke($this, $this->valueHolder2528f, 'bitpos', array('key' => $key, 'bit' => $bit, 'start' => $start, 'end' => $end, 'bybit' => $bybit), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->bitpos($key, $bit, $start, $end, $bybit);

        if (isset($this->methodSuffixInterceptors90df7['bitpos'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['bitpos']->__invoke($this, $this->valueHolder2528f, 'bitpos', array('key' => $key, 'bit' => $bit, 'start' => $start, 'end' => $end, 'bybit' => $bybit), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function blPop(string|array $key_or_keys, int|float|string $timeout_or_key, mixed ... $extra_args) : \Redis|array|false|null
    {
        if (isset($this->methodPrefixInterceptors2175e['blPop'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['blPop']->__invoke($this, $this->valueHolder2528f, 'blPop', array('key_or_keys' => $key_or_keys, 'timeout_or_key' => $timeout_or_key, 'extra_args' => $extra_args), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->blPop($key_or_keys, $timeout_or_key, ...$extra_args);

        if (isset($this->methodSuffixInterceptors90df7['blPop'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['blPop']->__invoke($this, $this->valueHolder2528f, 'blPop', array('key_or_keys' => $key_or_keys, 'timeout_or_key' => $timeout_or_key, 'extra_args' => $extra_args), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function brPop(string|array $key_or_keys, int|float|string $timeout_or_key, mixed ... $extra_args) : \Redis|array|false|null
    {
        if (isset($this->methodPrefixInterceptors2175e['brPop'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['brPop']->__invoke($this, $this->valueHolder2528f, 'brPop', array('key_or_keys' => $key_or_keys, 'timeout_or_key' => $timeout_or_key, 'extra_args' => $extra_args), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->brPop($key_or_keys, $timeout_or_key, ...$extra_args);

        if (isset($this->methodSuffixInterceptors90df7['brPop'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['brPop']->__invoke($this, $this->valueHolder2528f, 'brPop', array('key_or_keys' => $key_or_keys, 'timeout_or_key' => $timeout_or_key, 'extra_args' => $extra_args), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function brpoplpush(string $src, string $dst, int|float $timeout) : \Redis|string|false
    {
        if (isset($this->methodPrefixInterceptors2175e['brpoplpush'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['brpoplpush']->__invoke($this, $this->valueHolder2528f, 'brpoplpush', array('src' => $src, 'dst' => $dst, 'timeout' => $timeout), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->brpoplpush($src, $dst, $timeout);

        if (isset($this->methodSuffixInterceptors90df7['brpoplpush'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['brpoplpush']->__invoke($this, $this->valueHolder2528f, 'brpoplpush', array('src' => $src, 'dst' => $dst, 'timeout' => $timeout), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function bzPopMax(string|array $key, int|string $timeout_or_key, mixed ... $extra_args) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptors2175e['bzPopMax'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['bzPopMax']->__invoke($this, $this->valueHolder2528f, 'bzPopMax', array('key' => $key, 'timeout_or_key' => $timeout_or_key, 'extra_args' => $extra_args), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->bzPopMax($key, $timeout_or_key, ...$extra_args);

        if (isset($this->methodSuffixInterceptors90df7['bzPopMax'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['bzPopMax']->__invoke($this, $this->valueHolder2528f, 'bzPopMax', array('key' => $key, 'timeout_or_key' => $timeout_or_key, 'extra_args' => $extra_args), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function bzPopMin(string|array $key, int|string $timeout_or_key, mixed ... $extra_args) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptors2175e['bzPopMin'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['bzPopMin']->__invoke($this, $this->valueHolder2528f, 'bzPopMin', array('key' => $key, 'timeout_or_key' => $timeout_or_key, 'extra_args' => $extra_args), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->bzPopMin($key, $timeout_or_key, ...$extra_args);

        if (isset($this->methodSuffixInterceptors90df7['bzPopMin'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['bzPopMin']->__invoke($this, $this->valueHolder2528f, 'bzPopMin', array('key' => $key, 'timeout_or_key' => $timeout_or_key, 'extra_args' => $extra_args), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function bzmpop(float $timeout, array $keys, string $from, int $count = 1) : \Redis|array|false|null
    {
        if (isset($this->methodPrefixInterceptors2175e['bzmpop'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['bzmpop']->__invoke($this, $this->valueHolder2528f, 'bzmpop', array('timeout' => $timeout, 'keys' => $keys, 'from' => $from, 'count' => $count), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->bzmpop($timeout, $keys, $from, $count);

        if (isset($this->methodSuffixInterceptors90df7['bzmpop'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['bzmpop']->__invoke($this, $this->valueHolder2528f, 'bzmpop', array('timeout' => $timeout, 'keys' => $keys, 'from' => $from, 'count' => $count), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zmpop(array $keys, string $from, int $count = 1) : \Redis|array|false|null
    {
        if (isset($this->methodPrefixInterceptors2175e['zmpop'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['zmpop']->__invoke($this, $this->valueHolder2528f, 'zmpop', array('keys' => $keys, 'from' => $from, 'count' => $count), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->zmpop($keys, $from, $count);

        if (isset($this->methodSuffixInterceptors90df7['zmpop'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['zmpop']->__invoke($this, $this->valueHolder2528f, 'zmpop', array('keys' => $keys, 'from' => $from, 'count' => $count), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function blmpop(float $timeout, array $keys, string $from, int $count = 1) : \Redis|array|false|null
    {
        if (isset($this->methodPrefixInterceptors2175e['blmpop'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['blmpop']->__invoke($this, $this->valueHolder2528f, 'blmpop', array('timeout' => $timeout, 'keys' => $keys, 'from' => $from, 'count' => $count), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->blmpop($timeout, $keys, $from, $count);

        if (isset($this->methodSuffixInterceptors90df7['blmpop'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['blmpop']->__invoke($this, $this->valueHolder2528f, 'blmpop', array('timeout' => $timeout, 'keys' => $keys, 'from' => $from, 'count' => $count), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function lmpop(array $keys, string $from, int $count = 1) : \Redis|array|false|null
    {
        if (isset($this->methodPrefixInterceptors2175e['lmpop'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['lmpop']->__invoke($this, $this->valueHolder2528f, 'lmpop', array('keys' => $keys, 'from' => $from, 'count' => $count), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->lmpop($keys, $from, $count);

        if (isset($this->methodSuffixInterceptors90df7['lmpop'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['lmpop']->__invoke($this, $this->valueHolder2528f, 'lmpop', array('keys' => $keys, 'from' => $from, 'count' => $count), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function clearLastError() : bool
    {
        if (isset($this->methodPrefixInterceptors2175e['clearLastError'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['clearLastError']->__invoke($this, $this->valueHolder2528f, 'clearLastError', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->clearLastError();

        if (isset($this->methodSuffixInterceptors90df7['clearLastError'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['clearLastError']->__invoke($this, $this->valueHolder2528f, 'clearLastError', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function client(string $opt, mixed ... $args) : mixed
    {
        if (isset($this->methodPrefixInterceptors2175e['client'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['client']->__invoke($this, $this->valueHolder2528f, 'client', array('opt' => $opt, 'args' => $args), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->client($opt, ...$args);

        if (isset($this->methodSuffixInterceptors90df7['client'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['client']->__invoke($this, $this->valueHolder2528f, 'client', array('opt' => $opt, 'args' => $args), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function close() : bool
    {
        if (isset($this->methodPrefixInterceptors2175e['close'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['close']->__invoke($this, $this->valueHolder2528f, 'close', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->close();

        if (isset($this->methodSuffixInterceptors90df7['close'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['close']->__invoke($this, $this->valueHolder2528f, 'close', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function command(?string $opt = null, mixed ... $args) : mixed
    {
        if (isset($this->methodPrefixInterceptors2175e['command'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['command']->__invoke($this, $this->valueHolder2528f, 'command', array('opt' => $opt, 'args' => $args), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->command($opt, ...$args);

        if (isset($this->methodSuffixInterceptors90df7['command'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['command']->__invoke($this, $this->valueHolder2528f, 'command', array('opt' => $opt, 'args' => $args), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function config(string $operation, string|array|null $key_or_settings = null, ?string $value = null) : mixed
    {
        if (isset($this->methodPrefixInterceptors2175e['config'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['config']->__invoke($this, $this->valueHolder2528f, 'config', array('operation' => $operation, 'key_or_settings' => $key_or_settings, 'value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->config($operation, $key_or_settings, $value);

        if (isset($this->methodSuffixInterceptors90df7['config'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['config']->__invoke($this, $this->valueHolder2528f, 'config', array('operation' => $operation, 'key_or_settings' => $key_or_settings, 'value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function connect(string $host, int $port = 6379, float $timeout = 0, ?string $persistent_id = null, int $retry_interval = 0, float $read_timeout = 0, ?array $context = null) : bool
    {
        if (isset($this->methodPrefixInterceptors2175e['connect'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['connect']->__invoke($this, $this->valueHolder2528f, 'connect', array('host' => $host, 'port' => $port, 'timeout' => $timeout, 'persistent_id' => $persistent_id, 'retry_interval' => $retry_interval, 'read_timeout' => $read_timeout, 'context' => $context), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->connect($host, $port, $timeout, $persistent_id, $retry_interval, $read_timeout, $context);

        if (isset($this->methodSuffixInterceptors90df7['connect'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['connect']->__invoke($this, $this->valueHolder2528f, 'connect', array('host' => $host, 'port' => $port, 'timeout' => $timeout, 'persistent_id' => $persistent_id, 'retry_interval' => $retry_interval, 'read_timeout' => $read_timeout, 'context' => $context), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function copy(string $src, string $dst, ?array $options = null) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptors2175e['copy'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['copy']->__invoke($this, $this->valueHolder2528f, 'copy', array('src' => $src, 'dst' => $dst, 'options' => $options), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->copy($src, $dst, $options);

        if (isset($this->methodSuffixInterceptors90df7['copy'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['copy']->__invoke($this, $this->valueHolder2528f, 'copy', array('src' => $src, 'dst' => $dst, 'options' => $options), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function dbSize() : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['dbSize'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['dbSize']->__invoke($this, $this->valueHolder2528f, 'dbSize', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->dbSize();

        if (isset($this->methodSuffixInterceptors90df7['dbSize'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['dbSize']->__invoke($this, $this->valueHolder2528f, 'dbSize', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function debug(string $key) : \Redis|string
    {
        if (isset($this->methodPrefixInterceptors2175e['debug'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['debug']->__invoke($this, $this->valueHolder2528f, 'debug', array('key' => $key), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->debug($key);

        if (isset($this->methodSuffixInterceptors90df7['debug'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['debug']->__invoke($this, $this->valueHolder2528f, 'debug', array('key' => $key), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function decr(string $key, int $by = 1) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['decr'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['decr']->__invoke($this, $this->valueHolder2528f, 'decr', array('key' => $key, 'by' => $by), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->decr($key, $by);

        if (isset($this->methodSuffixInterceptors90df7['decr'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['decr']->__invoke($this, $this->valueHolder2528f, 'decr', array('key' => $key, 'by' => $by), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function decrBy(string $key, int $value) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['decrBy'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['decrBy']->__invoke($this, $this->valueHolder2528f, 'decrBy', array('key' => $key, 'value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->decrBy($key, $value);

        if (isset($this->methodSuffixInterceptors90df7['decrBy'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['decrBy']->__invoke($this, $this->valueHolder2528f, 'decrBy', array('key' => $key, 'value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function del(string|array $key, string ... $other_keys) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['del'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['del']->__invoke($this, $this->valueHolder2528f, 'del', array('key' => $key, 'other_keys' => $other_keys), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->del($key, ...$other_keys);

        if (isset($this->methodSuffixInterceptors90df7['del'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['del']->__invoke($this, $this->valueHolder2528f, 'del', array('key' => $key, 'other_keys' => $other_keys), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function delete(string|array $key, string ... $other_keys) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['delete'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['delete']->__invoke($this, $this->valueHolder2528f, 'delete', array('key' => $key, 'other_keys' => $other_keys), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->delete($key, ...$other_keys);

        if (isset($this->methodSuffixInterceptors90df7['delete'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['delete']->__invoke($this, $this->valueHolder2528f, 'delete', array('key' => $key, 'other_keys' => $other_keys), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function discard() : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptors2175e['discard'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['discard']->__invoke($this, $this->valueHolder2528f, 'discard', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->discard();

        if (isset($this->methodSuffixInterceptors90df7['discard'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['discard']->__invoke($this, $this->valueHolder2528f, 'discard', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function dump(string $key) : \Redis|string|false
    {
        if (isset($this->methodPrefixInterceptors2175e['dump'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['dump']->__invoke($this, $this->valueHolder2528f, 'dump', array('key' => $key), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->dump($key);

        if (isset($this->methodSuffixInterceptors90df7['dump'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['dump']->__invoke($this, $this->valueHolder2528f, 'dump', array('key' => $key), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function echo(string $str) : \Redis|string|false
    {
        if (isset($this->methodPrefixInterceptors2175e['echo'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['echo']->__invoke($this, $this->valueHolder2528f, 'echo', array('str' => $str), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->echo($str);

        if (isset($this->methodSuffixInterceptors90df7['echo'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['echo']->__invoke($this, $this->valueHolder2528f, 'echo', array('str' => $str), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function eval(string $script, array $args = [], int $num_keys = 0) : mixed
    {
        if (isset($this->methodPrefixInterceptors2175e['eval'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['eval']->__invoke($this, $this->valueHolder2528f, 'eval', array('script' => $script, 'args' => $args, 'num_keys' => $num_keys), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->eval($script, $args, $num_keys);

        if (isset($this->methodSuffixInterceptors90df7['eval'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['eval']->__invoke($this, $this->valueHolder2528f, 'eval', array('script' => $script, 'args' => $args, 'num_keys' => $num_keys), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function eval_ro(string $script_sha, array $args = [], int $num_keys = 0) : mixed
    {
        if (isset($this->methodPrefixInterceptors2175e['eval_ro'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['eval_ro']->__invoke($this, $this->valueHolder2528f, 'eval_ro', array('script_sha' => $script_sha, 'args' => $args, 'num_keys' => $num_keys), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->eval_ro($script_sha, $args, $num_keys);

        if (isset($this->methodSuffixInterceptors90df7['eval_ro'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['eval_ro']->__invoke($this, $this->valueHolder2528f, 'eval_ro', array('script_sha' => $script_sha, 'args' => $args, 'num_keys' => $num_keys), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function evalsha(string $sha1, array $args = [], int $num_keys = 0) : mixed
    {
        if (isset($this->methodPrefixInterceptors2175e['evalsha'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['evalsha']->__invoke($this, $this->valueHolder2528f, 'evalsha', array('sha1' => $sha1, 'args' => $args, 'num_keys' => $num_keys), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->evalsha($sha1, $args, $num_keys);

        if (isset($this->methodSuffixInterceptors90df7['evalsha'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['evalsha']->__invoke($this, $this->valueHolder2528f, 'evalsha', array('sha1' => $sha1, 'args' => $args, 'num_keys' => $num_keys), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function evalsha_ro(string $sha1, array $args = [], int $num_keys = 0) : mixed
    {
        if (isset($this->methodPrefixInterceptors2175e['evalsha_ro'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['evalsha_ro']->__invoke($this, $this->valueHolder2528f, 'evalsha_ro', array('sha1' => $sha1, 'args' => $args, 'num_keys' => $num_keys), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->evalsha_ro($sha1, $args, $num_keys);

        if (isset($this->methodSuffixInterceptors90df7['evalsha_ro'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['evalsha_ro']->__invoke($this, $this->valueHolder2528f, 'evalsha_ro', array('sha1' => $sha1, 'args' => $args, 'num_keys' => $num_keys), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function exec() : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptors2175e['exec'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['exec']->__invoke($this, $this->valueHolder2528f, 'exec', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->exec();

        if (isset($this->methodSuffixInterceptors90df7['exec'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['exec']->__invoke($this, $this->valueHolder2528f, 'exec', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function exists(mixed $key, mixed ... $other_keys) : \Redis|bool|int
    {
        if (isset($this->methodPrefixInterceptors2175e['exists'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['exists']->__invoke($this, $this->valueHolder2528f, 'exists', array('key' => $key, 'other_keys' => $other_keys), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->exists($key, ...$other_keys);

        if (isset($this->methodSuffixInterceptors90df7['exists'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['exists']->__invoke($this, $this->valueHolder2528f, 'exists', array('key' => $key, 'other_keys' => $other_keys), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function expire(string $key, int $timeout, ?string $mode = null) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptors2175e['expire'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['expire']->__invoke($this, $this->valueHolder2528f, 'expire', array('key' => $key, 'timeout' => $timeout, 'mode' => $mode), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->expire($key, $timeout, $mode);

        if (isset($this->methodSuffixInterceptors90df7['expire'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['expire']->__invoke($this, $this->valueHolder2528f, 'expire', array('key' => $key, 'timeout' => $timeout, 'mode' => $mode), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function expireAt(string $key, int $timestamp, ?string $mode = null) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptors2175e['expireAt'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['expireAt']->__invoke($this, $this->valueHolder2528f, 'expireAt', array('key' => $key, 'timestamp' => $timestamp, 'mode' => $mode), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->expireAt($key, $timestamp, $mode);

        if (isset($this->methodSuffixInterceptors90df7['expireAt'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['expireAt']->__invoke($this, $this->valueHolder2528f, 'expireAt', array('key' => $key, 'timestamp' => $timestamp, 'mode' => $mode), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function failover(?array $to = null, bool $abort = false, int $timeout = 0) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptors2175e['failover'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['failover']->__invoke($this, $this->valueHolder2528f, 'failover', array('to' => $to, 'abort' => $abort, 'timeout' => $timeout), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->failover($to, $abort, $timeout);

        if (isset($this->methodSuffixInterceptors90df7['failover'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['failover']->__invoke($this, $this->valueHolder2528f, 'failover', array('to' => $to, 'abort' => $abort, 'timeout' => $timeout), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function expiretime(string $key) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['expiretime'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['expiretime']->__invoke($this, $this->valueHolder2528f, 'expiretime', array('key' => $key), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->expiretime($key);

        if (isset($this->methodSuffixInterceptors90df7['expiretime'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['expiretime']->__invoke($this, $this->valueHolder2528f, 'expiretime', array('key' => $key), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function pexpiretime(string $key) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['pexpiretime'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['pexpiretime']->__invoke($this, $this->valueHolder2528f, 'pexpiretime', array('key' => $key), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->pexpiretime($key);

        if (isset($this->methodSuffixInterceptors90df7['pexpiretime'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['pexpiretime']->__invoke($this, $this->valueHolder2528f, 'pexpiretime', array('key' => $key), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function fcall(string $fn, array $keys = [], array $args = []) : mixed
    {
        if (isset($this->methodPrefixInterceptors2175e['fcall'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['fcall']->__invoke($this, $this->valueHolder2528f, 'fcall', array('fn' => $fn, 'keys' => $keys, 'args' => $args), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->fcall($fn, $keys, $args);

        if (isset($this->methodSuffixInterceptors90df7['fcall'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['fcall']->__invoke($this, $this->valueHolder2528f, 'fcall', array('fn' => $fn, 'keys' => $keys, 'args' => $args), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function fcall_ro(string $fn, array $keys = [], array $args = []) : mixed
    {
        if (isset($this->methodPrefixInterceptors2175e['fcall_ro'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['fcall_ro']->__invoke($this, $this->valueHolder2528f, 'fcall_ro', array('fn' => $fn, 'keys' => $keys, 'args' => $args), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->fcall_ro($fn, $keys, $args);

        if (isset($this->methodSuffixInterceptors90df7['fcall_ro'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['fcall_ro']->__invoke($this, $this->valueHolder2528f, 'fcall_ro', array('fn' => $fn, 'keys' => $keys, 'args' => $args), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function flushAll(?bool $sync = null) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptors2175e['flushAll'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['flushAll']->__invoke($this, $this->valueHolder2528f, 'flushAll', array('sync' => $sync), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->flushAll($sync);

        if (isset($this->methodSuffixInterceptors90df7['flushAll'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['flushAll']->__invoke($this, $this->valueHolder2528f, 'flushAll', array('sync' => $sync), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function flushDB(?bool $sync = null) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptors2175e['flushDB'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['flushDB']->__invoke($this, $this->valueHolder2528f, 'flushDB', array('sync' => $sync), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->flushDB($sync);

        if (isset($this->methodSuffixInterceptors90df7['flushDB'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['flushDB']->__invoke($this, $this->valueHolder2528f, 'flushDB', array('sync' => $sync), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function function(string $operation, mixed ... $args) : \Redis|bool|string|array
    {
        if (isset($this->methodPrefixInterceptors2175e['function'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['function']->__invoke($this, $this->valueHolder2528f, 'function', array('operation' => $operation, 'args' => $args), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->function($operation, ...$args);

        if (isset($this->methodSuffixInterceptors90df7['function'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['function']->__invoke($this, $this->valueHolder2528f, 'function', array('operation' => $operation, 'args' => $args), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function geoadd(string $key, float $lng, float $lat, string $member, mixed ... $other_triples_and_options) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['geoadd'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['geoadd']->__invoke($this, $this->valueHolder2528f, 'geoadd', array('key' => $key, 'lng' => $lng, 'lat' => $lat, 'member' => $member, 'other_triples_and_options' => $other_triples_and_options), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->geoadd($key, $lng, $lat, $member, ...$other_triples_and_options);

        if (isset($this->methodSuffixInterceptors90df7['geoadd'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['geoadd']->__invoke($this, $this->valueHolder2528f, 'geoadd', array('key' => $key, 'lng' => $lng, 'lat' => $lat, 'member' => $member, 'other_triples_and_options' => $other_triples_and_options), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function geodist(string $key, string $src, string $dst, ?string $unit = null) : \Redis|float|false
    {
        if (isset($this->methodPrefixInterceptors2175e['geodist'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['geodist']->__invoke($this, $this->valueHolder2528f, 'geodist', array('key' => $key, 'src' => $src, 'dst' => $dst, 'unit' => $unit), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->geodist($key, $src, $dst, $unit);

        if (isset($this->methodSuffixInterceptors90df7['geodist'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['geodist']->__invoke($this, $this->valueHolder2528f, 'geodist', array('key' => $key, 'src' => $src, 'dst' => $dst, 'unit' => $unit), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function geohash(string $key, string $member, string ... $other_members) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptors2175e['geohash'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['geohash']->__invoke($this, $this->valueHolder2528f, 'geohash', array('key' => $key, 'member' => $member, 'other_members' => $other_members), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->geohash($key, $member, ...$other_members);

        if (isset($this->methodSuffixInterceptors90df7['geohash'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['geohash']->__invoke($this, $this->valueHolder2528f, 'geohash', array('key' => $key, 'member' => $member, 'other_members' => $other_members), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function geopos(string $key, string $member, string ... $other_members) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptors2175e['geopos'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['geopos']->__invoke($this, $this->valueHolder2528f, 'geopos', array('key' => $key, 'member' => $member, 'other_members' => $other_members), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->geopos($key, $member, ...$other_members);

        if (isset($this->methodSuffixInterceptors90df7['geopos'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['geopos']->__invoke($this, $this->valueHolder2528f, 'geopos', array('key' => $key, 'member' => $member, 'other_members' => $other_members), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function georadius(string $key, float $lng, float $lat, float $radius, string $unit, array $options = []) : mixed
    {
        if (isset($this->methodPrefixInterceptors2175e['georadius'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['georadius']->__invoke($this, $this->valueHolder2528f, 'georadius', array('key' => $key, 'lng' => $lng, 'lat' => $lat, 'radius' => $radius, 'unit' => $unit, 'options' => $options), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->georadius($key, $lng, $lat, $radius, $unit, $options);

        if (isset($this->methodSuffixInterceptors90df7['georadius'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['georadius']->__invoke($this, $this->valueHolder2528f, 'georadius', array('key' => $key, 'lng' => $lng, 'lat' => $lat, 'radius' => $radius, 'unit' => $unit, 'options' => $options), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function georadius_ro(string $key, float $lng, float $lat, float $radius, string $unit, array $options = []) : mixed
    {
        if (isset($this->methodPrefixInterceptors2175e['georadius_ro'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['georadius_ro']->__invoke($this, $this->valueHolder2528f, 'georadius_ro', array('key' => $key, 'lng' => $lng, 'lat' => $lat, 'radius' => $radius, 'unit' => $unit, 'options' => $options), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->georadius_ro($key, $lng, $lat, $radius, $unit, $options);

        if (isset($this->methodSuffixInterceptors90df7['georadius_ro'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['georadius_ro']->__invoke($this, $this->valueHolder2528f, 'georadius_ro', array('key' => $key, 'lng' => $lng, 'lat' => $lat, 'radius' => $radius, 'unit' => $unit, 'options' => $options), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function georadiusbymember(string $key, string $member, float $radius, string $unit, array $options = []) : mixed
    {
        if (isset($this->methodPrefixInterceptors2175e['georadiusbymember'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['georadiusbymember']->__invoke($this, $this->valueHolder2528f, 'georadiusbymember', array('key' => $key, 'member' => $member, 'radius' => $radius, 'unit' => $unit, 'options' => $options), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->georadiusbymember($key, $member, $radius, $unit, $options);

        if (isset($this->methodSuffixInterceptors90df7['georadiusbymember'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['georadiusbymember']->__invoke($this, $this->valueHolder2528f, 'georadiusbymember', array('key' => $key, 'member' => $member, 'radius' => $radius, 'unit' => $unit, 'options' => $options), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function georadiusbymember_ro(string $key, string $member, float $radius, string $unit, array $options = []) : mixed
    {
        if (isset($this->methodPrefixInterceptors2175e['georadiusbymember_ro'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['georadiusbymember_ro']->__invoke($this, $this->valueHolder2528f, 'georadiusbymember_ro', array('key' => $key, 'member' => $member, 'radius' => $radius, 'unit' => $unit, 'options' => $options), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->georadiusbymember_ro($key, $member, $radius, $unit, $options);

        if (isset($this->methodSuffixInterceptors90df7['georadiusbymember_ro'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['georadiusbymember_ro']->__invoke($this, $this->valueHolder2528f, 'georadiusbymember_ro', array('key' => $key, 'member' => $member, 'radius' => $radius, 'unit' => $unit, 'options' => $options), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function geosearch(string $key, string|array $position, int|float|array $shape, string $unit, array $options = []) : array
    {
        if (isset($this->methodPrefixInterceptors2175e['geosearch'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['geosearch']->__invoke($this, $this->valueHolder2528f, 'geosearch', array('key' => $key, 'position' => $position, 'shape' => $shape, 'unit' => $unit, 'options' => $options), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->geosearch($key, $position, $shape, $unit, $options);

        if (isset($this->methodSuffixInterceptors90df7['geosearch'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['geosearch']->__invoke($this, $this->valueHolder2528f, 'geosearch', array('key' => $key, 'position' => $position, 'shape' => $shape, 'unit' => $unit, 'options' => $options), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function geosearchstore(string $dst, string $src, string|array $position, int|float|array $shape, string $unit, array $options = []) : \Redis|int|array|false
    {
        if (isset($this->methodPrefixInterceptors2175e['geosearchstore'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['geosearchstore']->__invoke($this, $this->valueHolder2528f, 'geosearchstore', array('dst' => $dst, 'src' => $src, 'position' => $position, 'shape' => $shape, 'unit' => $unit, 'options' => $options), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->geosearchstore($dst, $src, $position, $shape, $unit, $options);

        if (isset($this->methodSuffixInterceptors90df7['geosearchstore'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['geosearchstore']->__invoke($this, $this->valueHolder2528f, 'geosearchstore', array('dst' => $dst, 'src' => $src, 'position' => $position, 'shape' => $shape, 'unit' => $unit, 'options' => $options), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function get(string $key) : mixed
    {
        if (isset($this->methodPrefixInterceptors2175e['get'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['get']->__invoke($this, $this->valueHolder2528f, 'get', array('key' => $key), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->get($key);

        if (isset($this->methodSuffixInterceptors90df7['get'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['get']->__invoke($this, $this->valueHolder2528f, 'get', array('key' => $key), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function getAuth() : mixed
    {
        if (isset($this->methodPrefixInterceptors2175e['getAuth'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['getAuth']->__invoke($this, $this->valueHolder2528f, 'getAuth', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->getAuth();

        if (isset($this->methodSuffixInterceptors90df7['getAuth'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['getAuth']->__invoke($this, $this->valueHolder2528f, 'getAuth', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function getBit(string $key, int $idx) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['getBit'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['getBit']->__invoke($this, $this->valueHolder2528f, 'getBit', array('key' => $key, 'idx' => $idx), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->getBit($key, $idx);

        if (isset($this->methodSuffixInterceptors90df7['getBit'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['getBit']->__invoke($this, $this->valueHolder2528f, 'getBit', array('key' => $key, 'idx' => $idx), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function getEx(string $key, array $options = []) : \Redis|bool|string
    {
        if (isset($this->methodPrefixInterceptors2175e['getEx'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['getEx']->__invoke($this, $this->valueHolder2528f, 'getEx', array('key' => $key, 'options' => $options), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->getEx($key, $options);

        if (isset($this->methodSuffixInterceptors90df7['getEx'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['getEx']->__invoke($this, $this->valueHolder2528f, 'getEx', array('key' => $key, 'options' => $options), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function getDBNum() : int
    {
        if (isset($this->methodPrefixInterceptors2175e['getDBNum'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['getDBNum']->__invoke($this, $this->valueHolder2528f, 'getDBNum', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->getDBNum();

        if (isset($this->methodSuffixInterceptors90df7['getDBNum'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['getDBNum']->__invoke($this, $this->valueHolder2528f, 'getDBNum', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function getDel(string $key) : \Redis|bool|string
    {
        if (isset($this->methodPrefixInterceptors2175e['getDel'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['getDel']->__invoke($this, $this->valueHolder2528f, 'getDel', array('key' => $key), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->getDel($key);

        if (isset($this->methodSuffixInterceptors90df7['getDel'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['getDel']->__invoke($this, $this->valueHolder2528f, 'getDel', array('key' => $key), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function getHost() : string
    {
        if (isset($this->methodPrefixInterceptors2175e['getHost'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['getHost']->__invoke($this, $this->valueHolder2528f, 'getHost', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->getHost();

        if (isset($this->methodSuffixInterceptors90df7['getHost'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['getHost']->__invoke($this, $this->valueHolder2528f, 'getHost', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function getLastError() : ?string
    {
        if (isset($this->methodPrefixInterceptors2175e['getLastError'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['getLastError']->__invoke($this, $this->valueHolder2528f, 'getLastError', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->getLastError();

        if (isset($this->methodSuffixInterceptors90df7['getLastError'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['getLastError']->__invoke($this, $this->valueHolder2528f, 'getLastError', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function getMode() : int
    {
        if (isset($this->methodPrefixInterceptors2175e['getMode'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['getMode']->__invoke($this, $this->valueHolder2528f, 'getMode', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->getMode();

        if (isset($this->methodSuffixInterceptors90df7['getMode'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['getMode']->__invoke($this, $this->valueHolder2528f, 'getMode', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function getOption(int $option) : mixed
    {
        if (isset($this->methodPrefixInterceptors2175e['getOption'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['getOption']->__invoke($this, $this->valueHolder2528f, 'getOption', array('option' => $option), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->getOption($option);

        if (isset($this->methodSuffixInterceptors90df7['getOption'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['getOption']->__invoke($this, $this->valueHolder2528f, 'getOption', array('option' => $option), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function getPersistentID() : ?string
    {
        if (isset($this->methodPrefixInterceptors2175e['getPersistentID'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['getPersistentID']->__invoke($this, $this->valueHolder2528f, 'getPersistentID', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->getPersistentID();

        if (isset($this->methodSuffixInterceptors90df7['getPersistentID'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['getPersistentID']->__invoke($this, $this->valueHolder2528f, 'getPersistentID', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function getPort() : int
    {
        if (isset($this->methodPrefixInterceptors2175e['getPort'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['getPort']->__invoke($this, $this->valueHolder2528f, 'getPort', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->getPort();

        if (isset($this->methodSuffixInterceptors90df7['getPort'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['getPort']->__invoke($this, $this->valueHolder2528f, 'getPort', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function getRange(string $key, int $start, int $end) : \Redis|string|false
    {
        if (isset($this->methodPrefixInterceptors2175e['getRange'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['getRange']->__invoke($this, $this->valueHolder2528f, 'getRange', array('key' => $key, 'start' => $start, 'end' => $end), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->getRange($key, $start, $end);

        if (isset($this->methodSuffixInterceptors90df7['getRange'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['getRange']->__invoke($this, $this->valueHolder2528f, 'getRange', array('key' => $key, 'start' => $start, 'end' => $end), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function lcs(string $key1, string $key2, ?array $options = null) : \Redis|int|string|array|false
    {
        if (isset($this->methodPrefixInterceptors2175e['lcs'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['lcs']->__invoke($this, $this->valueHolder2528f, 'lcs', array('key1' => $key1, 'key2' => $key2, 'options' => $options), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->lcs($key1, $key2, $options);

        if (isset($this->methodSuffixInterceptors90df7['lcs'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['lcs']->__invoke($this, $this->valueHolder2528f, 'lcs', array('key1' => $key1, 'key2' => $key2, 'options' => $options), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function getReadTimeout() : float
    {
        if (isset($this->methodPrefixInterceptors2175e['getReadTimeout'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['getReadTimeout']->__invoke($this, $this->valueHolder2528f, 'getReadTimeout', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->getReadTimeout();

        if (isset($this->methodSuffixInterceptors90df7['getReadTimeout'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['getReadTimeout']->__invoke($this, $this->valueHolder2528f, 'getReadTimeout', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function getset(string $key, mixed $value) : \Redis|string|false
    {
        if (isset($this->methodPrefixInterceptors2175e['getset'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['getset']->__invoke($this, $this->valueHolder2528f, 'getset', array('key' => $key, 'value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->getset($key, $value);

        if (isset($this->methodSuffixInterceptors90df7['getset'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['getset']->__invoke($this, $this->valueHolder2528f, 'getset', array('key' => $key, 'value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function getTimeout() : float|false
    {
        if (isset($this->methodPrefixInterceptors2175e['getTimeout'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['getTimeout']->__invoke($this, $this->valueHolder2528f, 'getTimeout', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->getTimeout();

        if (isset($this->methodSuffixInterceptors90df7['getTimeout'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['getTimeout']->__invoke($this, $this->valueHolder2528f, 'getTimeout', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function getTransferredBytes() : array
    {
        if (isset($this->methodPrefixInterceptors2175e['getTransferredBytes'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['getTransferredBytes']->__invoke($this, $this->valueHolder2528f, 'getTransferredBytes', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->getTransferredBytes();

        if (isset($this->methodSuffixInterceptors90df7['getTransferredBytes'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['getTransferredBytes']->__invoke($this, $this->valueHolder2528f, 'getTransferredBytes', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function clearTransferredBytes() : void
    {
        if (isset($this->methodPrefixInterceptors2175e['clearTransferredBytes'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['clearTransferredBytes']->__invoke($this, $this->valueHolder2528f, 'clearTransferredBytes', array(), $returnEarly);

            if ($returnEarly) {
                $prefixReturnValue;
return;
            }
        }

        $returnValue = $this->valueHolder2528f->clearTransferredBytes();

        if (isset($this->methodSuffixInterceptors90df7['clearTransferredBytes'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['clearTransferredBytes']->__invoke($this, $this->valueHolder2528f, 'clearTransferredBytes', array(), $returnValue, $returnEarly);

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
        if (isset($this->methodPrefixInterceptors2175e['hDel'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['hDel']->__invoke($this, $this->valueHolder2528f, 'hDel', array('key' => $key, 'field' => $field, 'other_fields' => $other_fields), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->hDel($key, $field, ...$other_fields);

        if (isset($this->methodSuffixInterceptors90df7['hDel'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['hDel']->__invoke($this, $this->valueHolder2528f, 'hDel', array('key' => $key, 'field' => $field, 'other_fields' => $other_fields), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function hExists(string $key, string $field) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptors2175e['hExists'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['hExists']->__invoke($this, $this->valueHolder2528f, 'hExists', array('key' => $key, 'field' => $field), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->hExists($key, $field);

        if (isset($this->methodSuffixInterceptors90df7['hExists'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['hExists']->__invoke($this, $this->valueHolder2528f, 'hExists', array('key' => $key, 'field' => $field), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function hGet(string $key, string $member) : mixed
    {
        if (isset($this->methodPrefixInterceptors2175e['hGet'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['hGet']->__invoke($this, $this->valueHolder2528f, 'hGet', array('key' => $key, 'member' => $member), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->hGet($key, $member);

        if (isset($this->methodSuffixInterceptors90df7['hGet'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['hGet']->__invoke($this, $this->valueHolder2528f, 'hGet', array('key' => $key, 'member' => $member), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function hGetAll(string $key) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptors2175e['hGetAll'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['hGetAll']->__invoke($this, $this->valueHolder2528f, 'hGetAll', array('key' => $key), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->hGetAll($key);

        if (isset($this->methodSuffixInterceptors90df7['hGetAll'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['hGetAll']->__invoke($this, $this->valueHolder2528f, 'hGetAll', array('key' => $key), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function hIncrBy(string $key, string $field, int $value) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['hIncrBy'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['hIncrBy']->__invoke($this, $this->valueHolder2528f, 'hIncrBy', array('key' => $key, 'field' => $field, 'value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->hIncrBy($key, $field, $value);

        if (isset($this->methodSuffixInterceptors90df7['hIncrBy'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['hIncrBy']->__invoke($this, $this->valueHolder2528f, 'hIncrBy', array('key' => $key, 'field' => $field, 'value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function hIncrByFloat(string $key, string $field, float $value) : \Redis|float|false
    {
        if (isset($this->methodPrefixInterceptors2175e['hIncrByFloat'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['hIncrByFloat']->__invoke($this, $this->valueHolder2528f, 'hIncrByFloat', array('key' => $key, 'field' => $field, 'value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->hIncrByFloat($key, $field, $value);

        if (isset($this->methodSuffixInterceptors90df7['hIncrByFloat'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['hIncrByFloat']->__invoke($this, $this->valueHolder2528f, 'hIncrByFloat', array('key' => $key, 'field' => $field, 'value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function hKeys(string $key) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptors2175e['hKeys'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['hKeys']->__invoke($this, $this->valueHolder2528f, 'hKeys', array('key' => $key), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->hKeys($key);

        if (isset($this->methodSuffixInterceptors90df7['hKeys'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['hKeys']->__invoke($this, $this->valueHolder2528f, 'hKeys', array('key' => $key), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function hLen(string $key) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['hLen'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['hLen']->__invoke($this, $this->valueHolder2528f, 'hLen', array('key' => $key), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->hLen($key);

        if (isset($this->methodSuffixInterceptors90df7['hLen'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['hLen']->__invoke($this, $this->valueHolder2528f, 'hLen', array('key' => $key), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function hMget(string $key, array $fields) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptors2175e['hMget'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['hMget']->__invoke($this, $this->valueHolder2528f, 'hMget', array('key' => $key, 'fields' => $fields), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->hMget($key, $fields);

        if (isset($this->methodSuffixInterceptors90df7['hMget'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['hMget']->__invoke($this, $this->valueHolder2528f, 'hMget', array('key' => $key, 'fields' => $fields), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function hMset(string $key, array $fieldvals) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptors2175e['hMset'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['hMset']->__invoke($this, $this->valueHolder2528f, 'hMset', array('key' => $key, 'fieldvals' => $fieldvals), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->hMset($key, $fieldvals);

        if (isset($this->methodSuffixInterceptors90df7['hMset'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['hMset']->__invoke($this, $this->valueHolder2528f, 'hMset', array('key' => $key, 'fieldvals' => $fieldvals), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function hRandField(string $key, ?array $options = null) : \Redis|string|array|false
    {
        if (isset($this->methodPrefixInterceptors2175e['hRandField'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['hRandField']->__invoke($this, $this->valueHolder2528f, 'hRandField', array('key' => $key, 'options' => $options), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->hRandField($key, $options);

        if (isset($this->methodSuffixInterceptors90df7['hRandField'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['hRandField']->__invoke($this, $this->valueHolder2528f, 'hRandField', array('key' => $key, 'options' => $options), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function hSet(string $key, mixed ... $fields_and_vals) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['hSet'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['hSet']->__invoke($this, $this->valueHolder2528f, 'hSet', array('key' => $key, 'fields_and_vals' => $fields_and_vals), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->hSet($key, ...$fields_and_vals);

        if (isset($this->methodSuffixInterceptors90df7['hSet'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['hSet']->__invoke($this, $this->valueHolder2528f, 'hSet', array('key' => $key, 'fields_and_vals' => $fields_and_vals), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function hSetNx(string $key, string $field, mixed $value) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptors2175e['hSetNx'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['hSetNx']->__invoke($this, $this->valueHolder2528f, 'hSetNx', array('key' => $key, 'field' => $field, 'value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->hSetNx($key, $field, $value);

        if (isset($this->methodSuffixInterceptors90df7['hSetNx'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['hSetNx']->__invoke($this, $this->valueHolder2528f, 'hSetNx', array('key' => $key, 'field' => $field, 'value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function hStrLen(string $key, string $field) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['hStrLen'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['hStrLen']->__invoke($this, $this->valueHolder2528f, 'hStrLen', array('key' => $key, 'field' => $field), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->hStrLen($key, $field);

        if (isset($this->methodSuffixInterceptors90df7['hStrLen'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['hStrLen']->__invoke($this, $this->valueHolder2528f, 'hStrLen', array('key' => $key, 'field' => $field), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function hVals(string $key) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptors2175e['hVals'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['hVals']->__invoke($this, $this->valueHolder2528f, 'hVals', array('key' => $key), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->hVals($key);

        if (isset($this->methodSuffixInterceptors90df7['hVals'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['hVals']->__invoke($this, $this->valueHolder2528f, 'hVals', array('key' => $key), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function hscan(string $key, int|string|null &$iterator, ?string $pattern = null, int $count = 0) : \Redis|bool|array
    {
        if (isset($this->methodPrefixInterceptors2175e['hscan'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['hscan']->__invoke($this, $this->valueHolder2528f, 'hscan', array('key' => $key, 'iterator' => &$iterator, 'pattern' => $pattern, 'count' => $count), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->hscan($key, $iterator, $pattern, $count);

        if (isset($this->methodSuffixInterceptors90df7['hscan'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['hscan']->__invoke($this, $this->valueHolder2528f, 'hscan', array('key' => $key, 'iterator' => &$iterator, 'pattern' => $pattern, 'count' => $count), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function incr(string $key, int $by = 1) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['incr'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['incr']->__invoke($this, $this->valueHolder2528f, 'incr', array('key' => $key, 'by' => $by), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->incr($key, $by);

        if (isset($this->methodSuffixInterceptors90df7['incr'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['incr']->__invoke($this, $this->valueHolder2528f, 'incr', array('key' => $key, 'by' => $by), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function incrBy(string $key, int $value) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['incrBy'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['incrBy']->__invoke($this, $this->valueHolder2528f, 'incrBy', array('key' => $key, 'value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->incrBy($key, $value);

        if (isset($this->methodSuffixInterceptors90df7['incrBy'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['incrBy']->__invoke($this, $this->valueHolder2528f, 'incrBy', array('key' => $key, 'value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function incrByFloat(string $key, float $value) : \Redis|float|false
    {
        if (isset($this->methodPrefixInterceptors2175e['incrByFloat'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['incrByFloat']->__invoke($this, $this->valueHolder2528f, 'incrByFloat', array('key' => $key, 'value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->incrByFloat($key, $value);

        if (isset($this->methodSuffixInterceptors90df7['incrByFloat'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['incrByFloat']->__invoke($this, $this->valueHolder2528f, 'incrByFloat', array('key' => $key, 'value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function info(string ... $sections) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptors2175e['info'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['info']->__invoke($this, $this->valueHolder2528f, 'info', array('sections' => $sections), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->info(...$sections);

        if (isset($this->methodSuffixInterceptors90df7['info'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['info']->__invoke($this, $this->valueHolder2528f, 'info', array('sections' => $sections), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function isConnected() : bool
    {
        if (isset($this->methodPrefixInterceptors2175e['isConnected'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['isConnected']->__invoke($this, $this->valueHolder2528f, 'isConnected', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->isConnected();

        if (isset($this->methodSuffixInterceptors90df7['isConnected'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['isConnected']->__invoke($this, $this->valueHolder2528f, 'isConnected', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function keys(string $pattern)
    {
        if (isset($this->methodPrefixInterceptors2175e['keys'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['keys']->__invoke($this, $this->valueHolder2528f, 'keys', array('pattern' => $pattern), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->keys($pattern);

        if (isset($this->methodSuffixInterceptors90df7['keys'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['keys']->__invoke($this, $this->valueHolder2528f, 'keys', array('pattern' => $pattern), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function lInsert(string $key, string $pos, mixed $pivot, mixed $value)
    {
        if (isset($this->methodPrefixInterceptors2175e['lInsert'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['lInsert']->__invoke($this, $this->valueHolder2528f, 'lInsert', array('key' => $key, 'pos' => $pos, 'pivot' => $pivot, 'value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->lInsert($key, $pos, $pivot, $value);

        if (isset($this->methodSuffixInterceptors90df7['lInsert'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['lInsert']->__invoke($this, $this->valueHolder2528f, 'lInsert', array('key' => $key, 'pos' => $pos, 'pivot' => $pivot, 'value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function lLen(string $key) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['lLen'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['lLen']->__invoke($this, $this->valueHolder2528f, 'lLen', array('key' => $key), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->lLen($key);

        if (isset($this->methodSuffixInterceptors90df7['lLen'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['lLen']->__invoke($this, $this->valueHolder2528f, 'lLen', array('key' => $key), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function lMove(string $src, string $dst, string $wherefrom, string $whereto) : \Redis|string|false
    {
        if (isset($this->methodPrefixInterceptors2175e['lMove'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['lMove']->__invoke($this, $this->valueHolder2528f, 'lMove', array('src' => $src, 'dst' => $dst, 'wherefrom' => $wherefrom, 'whereto' => $whereto), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->lMove($src, $dst, $wherefrom, $whereto);

        if (isset($this->methodSuffixInterceptors90df7['lMove'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['lMove']->__invoke($this, $this->valueHolder2528f, 'lMove', array('src' => $src, 'dst' => $dst, 'wherefrom' => $wherefrom, 'whereto' => $whereto), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function blmove(string $src, string $dst, string $wherefrom, string $whereto, float $timeout) : \Redis|string|false
    {
        if (isset($this->methodPrefixInterceptors2175e['blmove'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['blmove']->__invoke($this, $this->valueHolder2528f, 'blmove', array('src' => $src, 'dst' => $dst, 'wherefrom' => $wherefrom, 'whereto' => $whereto, 'timeout' => $timeout), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->blmove($src, $dst, $wherefrom, $whereto, $timeout);

        if (isset($this->methodSuffixInterceptors90df7['blmove'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['blmove']->__invoke($this, $this->valueHolder2528f, 'blmove', array('src' => $src, 'dst' => $dst, 'wherefrom' => $wherefrom, 'whereto' => $whereto, 'timeout' => $timeout), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function lPop(string $key, int $count = 0) : \Redis|bool|string|array
    {
        if (isset($this->methodPrefixInterceptors2175e['lPop'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['lPop']->__invoke($this, $this->valueHolder2528f, 'lPop', array('key' => $key, 'count' => $count), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->lPop($key, $count);

        if (isset($this->methodSuffixInterceptors90df7['lPop'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['lPop']->__invoke($this, $this->valueHolder2528f, 'lPop', array('key' => $key, 'count' => $count), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function lPos(string $key, mixed $value, ?array $options = null) : \Redis|bool|int|array|null
    {
        if (isset($this->methodPrefixInterceptors2175e['lPos'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['lPos']->__invoke($this, $this->valueHolder2528f, 'lPos', array('key' => $key, 'value' => $value, 'options' => $options), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->lPos($key, $value, $options);

        if (isset($this->methodSuffixInterceptors90df7['lPos'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['lPos']->__invoke($this, $this->valueHolder2528f, 'lPos', array('key' => $key, 'value' => $value, 'options' => $options), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function lPush(string $key, mixed ... $elements) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['lPush'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['lPush']->__invoke($this, $this->valueHolder2528f, 'lPush', array('key' => $key, 'elements' => $elements), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->lPush($key, ...$elements);

        if (isset($this->methodSuffixInterceptors90df7['lPush'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['lPush']->__invoke($this, $this->valueHolder2528f, 'lPush', array('key' => $key, 'elements' => $elements), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function rPush(string $key, mixed ... $elements) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['rPush'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['rPush']->__invoke($this, $this->valueHolder2528f, 'rPush', array('key' => $key, 'elements' => $elements), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->rPush($key, ...$elements);

        if (isset($this->methodSuffixInterceptors90df7['rPush'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['rPush']->__invoke($this, $this->valueHolder2528f, 'rPush', array('key' => $key, 'elements' => $elements), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function lPushx(string $key, mixed $value) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['lPushx'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['lPushx']->__invoke($this, $this->valueHolder2528f, 'lPushx', array('key' => $key, 'value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->lPushx($key, $value);

        if (isset($this->methodSuffixInterceptors90df7['lPushx'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['lPushx']->__invoke($this, $this->valueHolder2528f, 'lPushx', array('key' => $key, 'value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function rPushx(string $key, mixed $value) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['rPushx'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['rPushx']->__invoke($this, $this->valueHolder2528f, 'rPushx', array('key' => $key, 'value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->rPushx($key, $value);

        if (isset($this->methodSuffixInterceptors90df7['rPushx'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['rPushx']->__invoke($this, $this->valueHolder2528f, 'rPushx', array('key' => $key, 'value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function lSet(string $key, int $index, mixed $value) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptors2175e['lSet'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['lSet']->__invoke($this, $this->valueHolder2528f, 'lSet', array('key' => $key, 'index' => $index, 'value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->lSet($key, $index, $value);

        if (isset($this->methodSuffixInterceptors90df7['lSet'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['lSet']->__invoke($this, $this->valueHolder2528f, 'lSet', array('key' => $key, 'index' => $index, 'value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function lastSave() : int
    {
        if (isset($this->methodPrefixInterceptors2175e['lastSave'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['lastSave']->__invoke($this, $this->valueHolder2528f, 'lastSave', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->lastSave();

        if (isset($this->methodSuffixInterceptors90df7['lastSave'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['lastSave']->__invoke($this, $this->valueHolder2528f, 'lastSave', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function lindex(string $key, int $index) : mixed
    {
        if (isset($this->methodPrefixInterceptors2175e['lindex'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['lindex']->__invoke($this, $this->valueHolder2528f, 'lindex', array('key' => $key, 'index' => $index), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->lindex($key, $index);

        if (isset($this->methodSuffixInterceptors90df7['lindex'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['lindex']->__invoke($this, $this->valueHolder2528f, 'lindex', array('key' => $key, 'index' => $index), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function lrange(string $key, int $start, int $end) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptors2175e['lrange'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['lrange']->__invoke($this, $this->valueHolder2528f, 'lrange', array('key' => $key, 'start' => $start, 'end' => $end), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->lrange($key, $start, $end);

        if (isset($this->methodSuffixInterceptors90df7['lrange'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['lrange']->__invoke($this, $this->valueHolder2528f, 'lrange', array('key' => $key, 'start' => $start, 'end' => $end), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function lrem(string $key, mixed $value, int $count = 0) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['lrem'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['lrem']->__invoke($this, $this->valueHolder2528f, 'lrem', array('key' => $key, 'value' => $value, 'count' => $count), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->lrem($key, $value, $count);

        if (isset($this->methodSuffixInterceptors90df7['lrem'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['lrem']->__invoke($this, $this->valueHolder2528f, 'lrem', array('key' => $key, 'value' => $value, 'count' => $count), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function ltrim(string $key, int $start, int $end) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptors2175e['ltrim'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['ltrim']->__invoke($this, $this->valueHolder2528f, 'ltrim', array('key' => $key, 'start' => $start, 'end' => $end), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->ltrim($key, $start, $end);

        if (isset($this->methodSuffixInterceptors90df7['ltrim'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['ltrim']->__invoke($this, $this->valueHolder2528f, 'ltrim', array('key' => $key, 'start' => $start, 'end' => $end), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function mget(array $keys) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptors2175e['mget'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['mget']->__invoke($this, $this->valueHolder2528f, 'mget', array('keys' => $keys), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->mget($keys);

        if (isset($this->methodSuffixInterceptors90df7['mget'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['mget']->__invoke($this, $this->valueHolder2528f, 'mget', array('keys' => $keys), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function migrate(string $host, int $port, string|array $key, int $dstdb, int $timeout, bool $copy = false, bool $replace = false, mixed $credentials = null) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptors2175e['migrate'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['migrate']->__invoke($this, $this->valueHolder2528f, 'migrate', array('host' => $host, 'port' => $port, 'key' => $key, 'dstdb' => $dstdb, 'timeout' => $timeout, 'copy' => $copy, 'replace' => $replace, 'credentials' => $credentials), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->migrate($host, $port, $key, $dstdb, $timeout, $copy, $replace, $credentials);

        if (isset($this->methodSuffixInterceptors90df7['migrate'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['migrate']->__invoke($this, $this->valueHolder2528f, 'migrate', array('host' => $host, 'port' => $port, 'key' => $key, 'dstdb' => $dstdb, 'timeout' => $timeout, 'copy' => $copy, 'replace' => $replace, 'credentials' => $credentials), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function move(string $key, int $index) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptors2175e['move'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['move']->__invoke($this, $this->valueHolder2528f, 'move', array('key' => $key, 'index' => $index), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->move($key, $index);

        if (isset($this->methodSuffixInterceptors90df7['move'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['move']->__invoke($this, $this->valueHolder2528f, 'move', array('key' => $key, 'index' => $index), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function mset(array $key_values) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptors2175e['mset'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['mset']->__invoke($this, $this->valueHolder2528f, 'mset', array('key_values' => $key_values), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->mset($key_values);

        if (isset($this->methodSuffixInterceptors90df7['mset'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['mset']->__invoke($this, $this->valueHolder2528f, 'mset', array('key_values' => $key_values), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function msetnx(array $key_values) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptors2175e['msetnx'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['msetnx']->__invoke($this, $this->valueHolder2528f, 'msetnx', array('key_values' => $key_values), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->msetnx($key_values);

        if (isset($this->methodSuffixInterceptors90df7['msetnx'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['msetnx']->__invoke($this, $this->valueHolder2528f, 'msetnx', array('key_values' => $key_values), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function multi(int $value = 1) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptors2175e['multi'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['multi']->__invoke($this, $this->valueHolder2528f, 'multi', array('value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->multi($value);

        if (isset($this->methodSuffixInterceptors90df7['multi'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['multi']->__invoke($this, $this->valueHolder2528f, 'multi', array('value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function object(string $subcommand, string $key) : \Redis|int|string|false
    {
        if (isset($this->methodPrefixInterceptors2175e['object'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['object']->__invoke($this, $this->valueHolder2528f, 'object', array('subcommand' => $subcommand, 'key' => $key), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->object($subcommand, $key);

        if (isset($this->methodSuffixInterceptors90df7['object'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['object']->__invoke($this, $this->valueHolder2528f, 'object', array('subcommand' => $subcommand, 'key' => $key), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function open(string $host, int $port = 6379, float $timeout = 0, ?string $persistent_id = null, int $retry_interval = 0, float $read_timeout = 0, ?array $context = null) : bool
    {
        if (isset($this->methodPrefixInterceptors2175e['open'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['open']->__invoke($this, $this->valueHolder2528f, 'open', array('host' => $host, 'port' => $port, 'timeout' => $timeout, 'persistent_id' => $persistent_id, 'retry_interval' => $retry_interval, 'read_timeout' => $read_timeout, 'context' => $context), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->open($host, $port, $timeout, $persistent_id, $retry_interval, $read_timeout, $context);

        if (isset($this->methodSuffixInterceptors90df7['open'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['open']->__invoke($this, $this->valueHolder2528f, 'open', array('host' => $host, 'port' => $port, 'timeout' => $timeout, 'persistent_id' => $persistent_id, 'retry_interval' => $retry_interval, 'read_timeout' => $read_timeout, 'context' => $context), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function pconnect(string $host, int $port = 6379, float $timeout = 0, ?string $persistent_id = null, int $retry_interval = 0, float $read_timeout = 0, ?array $context = null) : bool
    {
        if (isset($this->methodPrefixInterceptors2175e['pconnect'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['pconnect']->__invoke($this, $this->valueHolder2528f, 'pconnect', array('host' => $host, 'port' => $port, 'timeout' => $timeout, 'persistent_id' => $persistent_id, 'retry_interval' => $retry_interval, 'read_timeout' => $read_timeout, 'context' => $context), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->pconnect($host, $port, $timeout, $persistent_id, $retry_interval, $read_timeout, $context);

        if (isset($this->methodSuffixInterceptors90df7['pconnect'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['pconnect']->__invoke($this, $this->valueHolder2528f, 'pconnect', array('host' => $host, 'port' => $port, 'timeout' => $timeout, 'persistent_id' => $persistent_id, 'retry_interval' => $retry_interval, 'read_timeout' => $read_timeout, 'context' => $context), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function persist(string $key) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptors2175e['persist'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['persist']->__invoke($this, $this->valueHolder2528f, 'persist', array('key' => $key), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->persist($key);

        if (isset($this->methodSuffixInterceptors90df7['persist'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['persist']->__invoke($this, $this->valueHolder2528f, 'persist', array('key' => $key), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function pexpire(string $key, int $timeout, ?string $mode = null) : bool
    {
        if (isset($this->methodPrefixInterceptors2175e['pexpire'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['pexpire']->__invoke($this, $this->valueHolder2528f, 'pexpire', array('key' => $key, 'timeout' => $timeout, 'mode' => $mode), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->pexpire($key, $timeout, $mode);

        if (isset($this->methodSuffixInterceptors90df7['pexpire'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['pexpire']->__invoke($this, $this->valueHolder2528f, 'pexpire', array('key' => $key, 'timeout' => $timeout, 'mode' => $mode), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function pexpireAt(string $key, int $timestamp, ?string $mode = null) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptors2175e['pexpireAt'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['pexpireAt']->__invoke($this, $this->valueHolder2528f, 'pexpireAt', array('key' => $key, 'timestamp' => $timestamp, 'mode' => $mode), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->pexpireAt($key, $timestamp, $mode);

        if (isset($this->methodSuffixInterceptors90df7['pexpireAt'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['pexpireAt']->__invoke($this, $this->valueHolder2528f, 'pexpireAt', array('key' => $key, 'timestamp' => $timestamp, 'mode' => $mode), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function pfadd(string $key, array $elements) : \Redis|int
    {
        if (isset($this->methodPrefixInterceptors2175e['pfadd'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['pfadd']->__invoke($this, $this->valueHolder2528f, 'pfadd', array('key' => $key, 'elements' => $elements), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->pfadd($key, $elements);

        if (isset($this->methodSuffixInterceptors90df7['pfadd'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['pfadd']->__invoke($this, $this->valueHolder2528f, 'pfadd', array('key' => $key, 'elements' => $elements), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function pfcount(string|array $key_or_keys) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['pfcount'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['pfcount']->__invoke($this, $this->valueHolder2528f, 'pfcount', array('key_or_keys' => $key_or_keys), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->pfcount($key_or_keys);

        if (isset($this->methodSuffixInterceptors90df7['pfcount'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['pfcount']->__invoke($this, $this->valueHolder2528f, 'pfcount', array('key_or_keys' => $key_or_keys), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function pfmerge(string $dst, array $srckeys) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptors2175e['pfmerge'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['pfmerge']->__invoke($this, $this->valueHolder2528f, 'pfmerge', array('dst' => $dst, 'srckeys' => $srckeys), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->pfmerge($dst, $srckeys);

        if (isset($this->methodSuffixInterceptors90df7['pfmerge'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['pfmerge']->__invoke($this, $this->valueHolder2528f, 'pfmerge', array('dst' => $dst, 'srckeys' => $srckeys), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function ping(?string $message = null) : \Redis|bool|string
    {
        if (isset($this->methodPrefixInterceptors2175e['ping'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['ping']->__invoke($this, $this->valueHolder2528f, 'ping', array('message' => $message), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->ping($message);

        if (isset($this->methodSuffixInterceptors90df7['ping'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['ping']->__invoke($this, $this->valueHolder2528f, 'ping', array('message' => $message), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function pipeline() : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptors2175e['pipeline'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['pipeline']->__invoke($this, $this->valueHolder2528f, 'pipeline', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->pipeline();

        if (isset($this->methodSuffixInterceptors90df7['pipeline'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['pipeline']->__invoke($this, $this->valueHolder2528f, 'pipeline', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function popen(string $host, int $port = 6379, float $timeout = 0, ?string $persistent_id = null, int $retry_interval = 0, float $read_timeout = 0, ?array $context = null) : bool
    {
        if (isset($this->methodPrefixInterceptors2175e['popen'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['popen']->__invoke($this, $this->valueHolder2528f, 'popen', array('host' => $host, 'port' => $port, 'timeout' => $timeout, 'persistent_id' => $persistent_id, 'retry_interval' => $retry_interval, 'read_timeout' => $read_timeout, 'context' => $context), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->popen($host, $port, $timeout, $persistent_id, $retry_interval, $read_timeout, $context);

        if (isset($this->methodSuffixInterceptors90df7['popen'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['popen']->__invoke($this, $this->valueHolder2528f, 'popen', array('host' => $host, 'port' => $port, 'timeout' => $timeout, 'persistent_id' => $persistent_id, 'retry_interval' => $retry_interval, 'read_timeout' => $read_timeout, 'context' => $context), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function psetex(string $key, int $expire, mixed $value) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptors2175e['psetex'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['psetex']->__invoke($this, $this->valueHolder2528f, 'psetex', array('key' => $key, 'expire' => $expire, 'value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->psetex($key, $expire, $value);

        if (isset($this->methodSuffixInterceptors90df7['psetex'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['psetex']->__invoke($this, $this->valueHolder2528f, 'psetex', array('key' => $key, 'expire' => $expire, 'value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function psubscribe(array $patterns, callable $cb) : bool
    {
        if (isset($this->methodPrefixInterceptors2175e['psubscribe'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['psubscribe']->__invoke($this, $this->valueHolder2528f, 'psubscribe', array('patterns' => $patterns, 'cb' => $cb), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->psubscribe($patterns, $cb);

        if (isset($this->methodSuffixInterceptors90df7['psubscribe'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['psubscribe']->__invoke($this, $this->valueHolder2528f, 'psubscribe', array('patterns' => $patterns, 'cb' => $cb), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function pttl(string $key) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['pttl'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['pttl']->__invoke($this, $this->valueHolder2528f, 'pttl', array('key' => $key), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->pttl($key);

        if (isset($this->methodSuffixInterceptors90df7['pttl'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['pttl']->__invoke($this, $this->valueHolder2528f, 'pttl', array('key' => $key), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function publish(string $channel, string $message) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['publish'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['publish']->__invoke($this, $this->valueHolder2528f, 'publish', array('channel' => $channel, 'message' => $message), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->publish($channel, $message);

        if (isset($this->methodSuffixInterceptors90df7['publish'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['publish']->__invoke($this, $this->valueHolder2528f, 'publish', array('channel' => $channel, 'message' => $message), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function pubsub(string $command, mixed $arg = null) : mixed
    {
        if (isset($this->methodPrefixInterceptors2175e['pubsub'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['pubsub']->__invoke($this, $this->valueHolder2528f, 'pubsub', array('command' => $command, 'arg' => $arg), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->pubsub($command, $arg);

        if (isset($this->methodSuffixInterceptors90df7['pubsub'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['pubsub']->__invoke($this, $this->valueHolder2528f, 'pubsub', array('command' => $command, 'arg' => $arg), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function punsubscribe(array $patterns) : \Redis|bool|array
    {
        if (isset($this->methodPrefixInterceptors2175e['punsubscribe'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['punsubscribe']->__invoke($this, $this->valueHolder2528f, 'punsubscribe', array('patterns' => $patterns), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->punsubscribe($patterns);

        if (isset($this->methodSuffixInterceptors90df7['punsubscribe'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['punsubscribe']->__invoke($this, $this->valueHolder2528f, 'punsubscribe', array('patterns' => $patterns), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function rPop(string $key, int $count = 0) : \Redis|bool|string|array
    {
        if (isset($this->methodPrefixInterceptors2175e['rPop'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['rPop']->__invoke($this, $this->valueHolder2528f, 'rPop', array('key' => $key, 'count' => $count), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->rPop($key, $count);

        if (isset($this->methodSuffixInterceptors90df7['rPop'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['rPop']->__invoke($this, $this->valueHolder2528f, 'rPop', array('key' => $key, 'count' => $count), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function randomKey() : \Redis|string|false
    {
        if (isset($this->methodPrefixInterceptors2175e['randomKey'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['randomKey']->__invoke($this, $this->valueHolder2528f, 'randomKey', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->randomKey();

        if (isset($this->methodSuffixInterceptors90df7['randomKey'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['randomKey']->__invoke($this, $this->valueHolder2528f, 'randomKey', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function rawcommand(string $command, mixed ... $args) : mixed
    {
        if (isset($this->methodPrefixInterceptors2175e['rawcommand'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['rawcommand']->__invoke($this, $this->valueHolder2528f, 'rawcommand', array('command' => $command, 'args' => $args), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->rawcommand($command, ...$args);

        if (isset($this->methodSuffixInterceptors90df7['rawcommand'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['rawcommand']->__invoke($this, $this->valueHolder2528f, 'rawcommand', array('command' => $command, 'args' => $args), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function rename(string $old_name, string $new_name) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptors2175e['rename'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['rename']->__invoke($this, $this->valueHolder2528f, 'rename', array('old_name' => $old_name, 'new_name' => $new_name), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->rename($old_name, $new_name);

        if (isset($this->methodSuffixInterceptors90df7['rename'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['rename']->__invoke($this, $this->valueHolder2528f, 'rename', array('old_name' => $old_name, 'new_name' => $new_name), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function renameNx(string $key_src, string $key_dst) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptors2175e['renameNx'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['renameNx']->__invoke($this, $this->valueHolder2528f, 'renameNx', array('key_src' => $key_src, 'key_dst' => $key_dst), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->renameNx($key_src, $key_dst);

        if (isset($this->methodSuffixInterceptors90df7['renameNx'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['renameNx']->__invoke($this, $this->valueHolder2528f, 'renameNx', array('key_src' => $key_src, 'key_dst' => $key_dst), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function reset() : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptors2175e['reset'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['reset']->__invoke($this, $this->valueHolder2528f, 'reset', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->reset();

        if (isset($this->methodSuffixInterceptors90df7['reset'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['reset']->__invoke($this, $this->valueHolder2528f, 'reset', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function restore(string $key, int $ttl, string $value, ?array $options = null) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptors2175e['restore'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['restore']->__invoke($this, $this->valueHolder2528f, 'restore', array('key' => $key, 'ttl' => $ttl, 'value' => $value, 'options' => $options), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->restore($key, $ttl, $value, $options);

        if (isset($this->methodSuffixInterceptors90df7['restore'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['restore']->__invoke($this, $this->valueHolder2528f, 'restore', array('key' => $key, 'ttl' => $ttl, 'value' => $value, 'options' => $options), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function role() : mixed
    {
        if (isset($this->methodPrefixInterceptors2175e['role'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['role']->__invoke($this, $this->valueHolder2528f, 'role', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->role();

        if (isset($this->methodSuffixInterceptors90df7['role'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['role']->__invoke($this, $this->valueHolder2528f, 'role', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function rpoplpush(string $srckey, string $dstkey) : \Redis|string|false
    {
        if (isset($this->methodPrefixInterceptors2175e['rpoplpush'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['rpoplpush']->__invoke($this, $this->valueHolder2528f, 'rpoplpush', array('srckey' => $srckey, 'dstkey' => $dstkey), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->rpoplpush($srckey, $dstkey);

        if (isset($this->methodSuffixInterceptors90df7['rpoplpush'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['rpoplpush']->__invoke($this, $this->valueHolder2528f, 'rpoplpush', array('srckey' => $srckey, 'dstkey' => $dstkey), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function sAdd(string $key, mixed $value, mixed ... $other_values) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['sAdd'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['sAdd']->__invoke($this, $this->valueHolder2528f, 'sAdd', array('key' => $key, 'value' => $value, 'other_values' => $other_values), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->sAdd($key, $value, ...$other_values);

        if (isset($this->methodSuffixInterceptors90df7['sAdd'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['sAdd']->__invoke($this, $this->valueHolder2528f, 'sAdd', array('key' => $key, 'value' => $value, 'other_values' => $other_values), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function sAddArray(string $key, array $values) : int
    {
        if (isset($this->methodPrefixInterceptors2175e['sAddArray'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['sAddArray']->__invoke($this, $this->valueHolder2528f, 'sAddArray', array('key' => $key, 'values' => $values), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->sAddArray($key, $values);

        if (isset($this->methodSuffixInterceptors90df7['sAddArray'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['sAddArray']->__invoke($this, $this->valueHolder2528f, 'sAddArray', array('key' => $key, 'values' => $values), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function sDiff(string $key, string ... $other_keys) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptors2175e['sDiff'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['sDiff']->__invoke($this, $this->valueHolder2528f, 'sDiff', array('key' => $key, 'other_keys' => $other_keys), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->sDiff($key, ...$other_keys);

        if (isset($this->methodSuffixInterceptors90df7['sDiff'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['sDiff']->__invoke($this, $this->valueHolder2528f, 'sDiff', array('key' => $key, 'other_keys' => $other_keys), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function sDiffStore(string $dst, string $key, string ... $other_keys) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['sDiffStore'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['sDiffStore']->__invoke($this, $this->valueHolder2528f, 'sDiffStore', array('dst' => $dst, 'key' => $key, 'other_keys' => $other_keys), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->sDiffStore($dst, $key, ...$other_keys);

        if (isset($this->methodSuffixInterceptors90df7['sDiffStore'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['sDiffStore']->__invoke($this, $this->valueHolder2528f, 'sDiffStore', array('dst' => $dst, 'key' => $key, 'other_keys' => $other_keys), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function sInter(string|array $key, string ... $other_keys) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptors2175e['sInter'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['sInter']->__invoke($this, $this->valueHolder2528f, 'sInter', array('key' => $key, 'other_keys' => $other_keys), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->sInter($key, ...$other_keys);

        if (isset($this->methodSuffixInterceptors90df7['sInter'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['sInter']->__invoke($this, $this->valueHolder2528f, 'sInter', array('key' => $key, 'other_keys' => $other_keys), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function sintercard(array $keys, int $limit = -1) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['sintercard'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['sintercard']->__invoke($this, $this->valueHolder2528f, 'sintercard', array('keys' => $keys, 'limit' => $limit), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->sintercard($keys, $limit);

        if (isset($this->methodSuffixInterceptors90df7['sintercard'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['sintercard']->__invoke($this, $this->valueHolder2528f, 'sintercard', array('keys' => $keys, 'limit' => $limit), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function sInterStore(string|array $key, string ... $other_keys) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['sInterStore'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['sInterStore']->__invoke($this, $this->valueHolder2528f, 'sInterStore', array('key' => $key, 'other_keys' => $other_keys), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->sInterStore($key, ...$other_keys);

        if (isset($this->methodSuffixInterceptors90df7['sInterStore'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['sInterStore']->__invoke($this, $this->valueHolder2528f, 'sInterStore', array('key' => $key, 'other_keys' => $other_keys), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function sMembers(string $key) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptors2175e['sMembers'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['sMembers']->__invoke($this, $this->valueHolder2528f, 'sMembers', array('key' => $key), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->sMembers($key);

        if (isset($this->methodSuffixInterceptors90df7['sMembers'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['sMembers']->__invoke($this, $this->valueHolder2528f, 'sMembers', array('key' => $key), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function sMisMember(string $key, string $member, string ... $other_members) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptors2175e['sMisMember'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['sMisMember']->__invoke($this, $this->valueHolder2528f, 'sMisMember', array('key' => $key, 'member' => $member, 'other_members' => $other_members), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->sMisMember($key, $member, ...$other_members);

        if (isset($this->methodSuffixInterceptors90df7['sMisMember'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['sMisMember']->__invoke($this, $this->valueHolder2528f, 'sMisMember', array('key' => $key, 'member' => $member, 'other_members' => $other_members), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function sMove(string $src, string $dst, mixed $value) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptors2175e['sMove'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['sMove']->__invoke($this, $this->valueHolder2528f, 'sMove', array('src' => $src, 'dst' => $dst, 'value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->sMove($src, $dst, $value);

        if (isset($this->methodSuffixInterceptors90df7['sMove'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['sMove']->__invoke($this, $this->valueHolder2528f, 'sMove', array('src' => $src, 'dst' => $dst, 'value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function sPop(string $key, int $count = 0) : \Redis|string|array|false
    {
        if (isset($this->methodPrefixInterceptors2175e['sPop'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['sPop']->__invoke($this, $this->valueHolder2528f, 'sPop', array('key' => $key, 'count' => $count), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->sPop($key, $count);

        if (isset($this->methodSuffixInterceptors90df7['sPop'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['sPop']->__invoke($this, $this->valueHolder2528f, 'sPop', array('key' => $key, 'count' => $count), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function sRandMember(string $key, int $count = 0) : mixed
    {
        if (isset($this->methodPrefixInterceptors2175e['sRandMember'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['sRandMember']->__invoke($this, $this->valueHolder2528f, 'sRandMember', array('key' => $key, 'count' => $count), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->sRandMember($key, $count);

        if (isset($this->methodSuffixInterceptors90df7['sRandMember'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['sRandMember']->__invoke($this, $this->valueHolder2528f, 'sRandMember', array('key' => $key, 'count' => $count), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function sUnion(string $key, string ... $other_keys) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptors2175e['sUnion'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['sUnion']->__invoke($this, $this->valueHolder2528f, 'sUnion', array('key' => $key, 'other_keys' => $other_keys), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->sUnion($key, ...$other_keys);

        if (isset($this->methodSuffixInterceptors90df7['sUnion'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['sUnion']->__invoke($this, $this->valueHolder2528f, 'sUnion', array('key' => $key, 'other_keys' => $other_keys), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function sUnionStore(string $dst, string $key, string ... $other_keys) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['sUnionStore'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['sUnionStore']->__invoke($this, $this->valueHolder2528f, 'sUnionStore', array('dst' => $dst, 'key' => $key, 'other_keys' => $other_keys), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->sUnionStore($dst, $key, ...$other_keys);

        if (isset($this->methodSuffixInterceptors90df7['sUnionStore'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['sUnionStore']->__invoke($this, $this->valueHolder2528f, 'sUnionStore', array('dst' => $dst, 'key' => $key, 'other_keys' => $other_keys), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function save() : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptors2175e['save'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['save']->__invoke($this, $this->valueHolder2528f, 'save', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->save();

        if (isset($this->methodSuffixInterceptors90df7['save'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['save']->__invoke($this, $this->valueHolder2528f, 'save', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function scan(int|string|null &$iterator, ?string $pattern = null, int $count = 0, ?string $type = null) : array|false
    {
        if (isset($this->methodPrefixInterceptors2175e['scan'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['scan']->__invoke($this, $this->valueHolder2528f, 'scan', array('iterator' => &$iterator, 'pattern' => $pattern, 'count' => $count, 'type' => $type), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->scan($iterator, $pattern, $count, $type);

        if (isset($this->methodSuffixInterceptors90df7['scan'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['scan']->__invoke($this, $this->valueHolder2528f, 'scan', array('iterator' => &$iterator, 'pattern' => $pattern, 'count' => $count, 'type' => $type), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function scard(string $key) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['scard'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['scard']->__invoke($this, $this->valueHolder2528f, 'scard', array('key' => $key), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->scard($key);

        if (isset($this->methodSuffixInterceptors90df7['scard'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['scard']->__invoke($this, $this->valueHolder2528f, 'scard', array('key' => $key), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function script(string $command, mixed ... $args) : mixed
    {
        if (isset($this->methodPrefixInterceptors2175e['script'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['script']->__invoke($this, $this->valueHolder2528f, 'script', array('command' => $command, 'args' => $args), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->script($command, ...$args);

        if (isset($this->methodSuffixInterceptors90df7['script'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['script']->__invoke($this, $this->valueHolder2528f, 'script', array('command' => $command, 'args' => $args), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function select(int $db) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptors2175e['select'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['select']->__invoke($this, $this->valueHolder2528f, 'select', array('db' => $db), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->select($db);

        if (isset($this->methodSuffixInterceptors90df7['select'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['select']->__invoke($this, $this->valueHolder2528f, 'select', array('db' => $db), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function set(string $key, mixed $value, mixed $options = null) : \Redis|bool|string
    {
        if (isset($this->methodPrefixInterceptors2175e['set'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['set']->__invoke($this, $this->valueHolder2528f, 'set', array('key' => $key, 'value' => $value, 'options' => $options), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->set($key, $value, $options);

        if (isset($this->methodSuffixInterceptors90df7['set'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['set']->__invoke($this, $this->valueHolder2528f, 'set', array('key' => $key, 'value' => $value, 'options' => $options), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function setBit(string $key, int $idx, bool $value) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['setBit'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['setBit']->__invoke($this, $this->valueHolder2528f, 'setBit', array('key' => $key, 'idx' => $idx, 'value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->setBit($key, $idx, $value);

        if (isset($this->methodSuffixInterceptors90df7['setBit'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['setBit']->__invoke($this, $this->valueHolder2528f, 'setBit', array('key' => $key, 'idx' => $idx, 'value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function setRange(string $key, int $index, string $value) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['setRange'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['setRange']->__invoke($this, $this->valueHolder2528f, 'setRange', array('key' => $key, 'index' => $index, 'value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->setRange($key, $index, $value);

        if (isset($this->methodSuffixInterceptors90df7['setRange'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['setRange']->__invoke($this, $this->valueHolder2528f, 'setRange', array('key' => $key, 'index' => $index, 'value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function setOption(int $option, mixed $value) : bool
    {
        if (isset($this->methodPrefixInterceptors2175e['setOption'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['setOption']->__invoke($this, $this->valueHolder2528f, 'setOption', array('option' => $option, 'value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->setOption($option, $value);

        if (isset($this->methodSuffixInterceptors90df7['setOption'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['setOption']->__invoke($this, $this->valueHolder2528f, 'setOption', array('option' => $option, 'value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function setex(string $key, int $expire, mixed $value)
    {
        if (isset($this->methodPrefixInterceptors2175e['setex'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['setex']->__invoke($this, $this->valueHolder2528f, 'setex', array('key' => $key, 'expire' => $expire, 'value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->setex($key, $expire, $value);

        if (isset($this->methodSuffixInterceptors90df7['setex'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['setex']->__invoke($this, $this->valueHolder2528f, 'setex', array('key' => $key, 'expire' => $expire, 'value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function setnx(string $key, mixed $value) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptors2175e['setnx'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['setnx']->__invoke($this, $this->valueHolder2528f, 'setnx', array('key' => $key, 'value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->setnx($key, $value);

        if (isset($this->methodSuffixInterceptors90df7['setnx'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['setnx']->__invoke($this, $this->valueHolder2528f, 'setnx', array('key' => $key, 'value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function sismember(string $key, mixed $value) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptors2175e['sismember'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['sismember']->__invoke($this, $this->valueHolder2528f, 'sismember', array('key' => $key, 'value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->sismember($key, $value);

        if (isset($this->methodSuffixInterceptors90df7['sismember'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['sismember']->__invoke($this, $this->valueHolder2528f, 'sismember', array('key' => $key, 'value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function slaveof(?string $host = null, int $port = 6379) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptors2175e['slaveof'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['slaveof']->__invoke($this, $this->valueHolder2528f, 'slaveof', array('host' => $host, 'port' => $port), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->slaveof($host, $port);

        if (isset($this->methodSuffixInterceptors90df7['slaveof'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['slaveof']->__invoke($this, $this->valueHolder2528f, 'slaveof', array('host' => $host, 'port' => $port), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function replicaof(?string $host = null, int $port = 6379) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptors2175e['replicaof'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['replicaof']->__invoke($this, $this->valueHolder2528f, 'replicaof', array('host' => $host, 'port' => $port), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->replicaof($host, $port);

        if (isset($this->methodSuffixInterceptors90df7['replicaof'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['replicaof']->__invoke($this, $this->valueHolder2528f, 'replicaof', array('host' => $host, 'port' => $port), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function touch(string|array $key_or_array, string ... $more_keys) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['touch'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['touch']->__invoke($this, $this->valueHolder2528f, 'touch', array('key_or_array' => $key_or_array, 'more_keys' => $more_keys), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->touch($key_or_array, ...$more_keys);

        if (isset($this->methodSuffixInterceptors90df7['touch'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['touch']->__invoke($this, $this->valueHolder2528f, 'touch', array('key_or_array' => $key_or_array, 'more_keys' => $more_keys), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function slowlog(string $operation, int $length = 0) : mixed
    {
        if (isset($this->methodPrefixInterceptors2175e['slowlog'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['slowlog']->__invoke($this, $this->valueHolder2528f, 'slowlog', array('operation' => $operation, 'length' => $length), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->slowlog($operation, $length);

        if (isset($this->methodSuffixInterceptors90df7['slowlog'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['slowlog']->__invoke($this, $this->valueHolder2528f, 'slowlog', array('operation' => $operation, 'length' => $length), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function sort(string $key, ?array $options = null) : mixed
    {
        if (isset($this->methodPrefixInterceptors2175e['sort'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['sort']->__invoke($this, $this->valueHolder2528f, 'sort', array('key' => $key, 'options' => $options), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->sort($key, $options);

        if (isset($this->methodSuffixInterceptors90df7['sort'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['sort']->__invoke($this, $this->valueHolder2528f, 'sort', array('key' => $key, 'options' => $options), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function sort_ro(string $key, ?array $options = null) : mixed
    {
        if (isset($this->methodPrefixInterceptors2175e['sort_ro'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['sort_ro']->__invoke($this, $this->valueHolder2528f, 'sort_ro', array('key' => $key, 'options' => $options), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->sort_ro($key, $options);

        if (isset($this->methodSuffixInterceptors90df7['sort_ro'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['sort_ro']->__invoke($this, $this->valueHolder2528f, 'sort_ro', array('key' => $key, 'options' => $options), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function sortAsc(string $key, ?string $pattern = null, mixed $get = null, int $offset = -1, int $count = -1, ?string $store = null) : array
    {
        if (isset($this->methodPrefixInterceptors2175e['sortAsc'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['sortAsc']->__invoke($this, $this->valueHolder2528f, 'sortAsc', array('key' => $key, 'pattern' => $pattern, 'get' => $get, 'offset' => $offset, 'count' => $count, 'store' => $store), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->sortAsc($key, $pattern, $get, $offset, $count, $store);

        if (isset($this->methodSuffixInterceptors90df7['sortAsc'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['sortAsc']->__invoke($this, $this->valueHolder2528f, 'sortAsc', array('key' => $key, 'pattern' => $pattern, 'get' => $get, 'offset' => $offset, 'count' => $count, 'store' => $store), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function sortAscAlpha(string $key, ?string $pattern = null, mixed $get = null, int $offset = -1, int $count = -1, ?string $store = null) : array
    {
        if (isset($this->methodPrefixInterceptors2175e['sortAscAlpha'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['sortAscAlpha']->__invoke($this, $this->valueHolder2528f, 'sortAscAlpha', array('key' => $key, 'pattern' => $pattern, 'get' => $get, 'offset' => $offset, 'count' => $count, 'store' => $store), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->sortAscAlpha($key, $pattern, $get, $offset, $count, $store);

        if (isset($this->methodSuffixInterceptors90df7['sortAscAlpha'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['sortAscAlpha']->__invoke($this, $this->valueHolder2528f, 'sortAscAlpha', array('key' => $key, 'pattern' => $pattern, 'get' => $get, 'offset' => $offset, 'count' => $count, 'store' => $store), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function sortDesc(string $key, ?string $pattern = null, mixed $get = null, int $offset = -1, int $count = -1, ?string $store = null) : array
    {
        if (isset($this->methodPrefixInterceptors2175e['sortDesc'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['sortDesc']->__invoke($this, $this->valueHolder2528f, 'sortDesc', array('key' => $key, 'pattern' => $pattern, 'get' => $get, 'offset' => $offset, 'count' => $count, 'store' => $store), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->sortDesc($key, $pattern, $get, $offset, $count, $store);

        if (isset($this->methodSuffixInterceptors90df7['sortDesc'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['sortDesc']->__invoke($this, $this->valueHolder2528f, 'sortDesc', array('key' => $key, 'pattern' => $pattern, 'get' => $get, 'offset' => $offset, 'count' => $count, 'store' => $store), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function sortDescAlpha(string $key, ?string $pattern = null, mixed $get = null, int $offset = -1, int $count = -1, ?string $store = null) : array
    {
        if (isset($this->methodPrefixInterceptors2175e['sortDescAlpha'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['sortDescAlpha']->__invoke($this, $this->valueHolder2528f, 'sortDescAlpha', array('key' => $key, 'pattern' => $pattern, 'get' => $get, 'offset' => $offset, 'count' => $count, 'store' => $store), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->sortDescAlpha($key, $pattern, $get, $offset, $count, $store);

        if (isset($this->methodSuffixInterceptors90df7['sortDescAlpha'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['sortDescAlpha']->__invoke($this, $this->valueHolder2528f, 'sortDescAlpha', array('key' => $key, 'pattern' => $pattern, 'get' => $get, 'offset' => $offset, 'count' => $count, 'store' => $store), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function srem(string $key, mixed $value, mixed ... $other_values) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['srem'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['srem']->__invoke($this, $this->valueHolder2528f, 'srem', array('key' => $key, 'value' => $value, 'other_values' => $other_values), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->srem($key, $value, ...$other_values);

        if (isset($this->methodSuffixInterceptors90df7['srem'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['srem']->__invoke($this, $this->valueHolder2528f, 'srem', array('key' => $key, 'value' => $value, 'other_values' => $other_values), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function sscan(string $key, int|string|null &$iterator, ?string $pattern = null, int $count = 0) : array|false
    {
        if (isset($this->methodPrefixInterceptors2175e['sscan'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['sscan']->__invoke($this, $this->valueHolder2528f, 'sscan', array('key' => $key, 'iterator' => &$iterator, 'pattern' => $pattern, 'count' => $count), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->sscan($key, $iterator, $pattern, $count);

        if (isset($this->methodSuffixInterceptors90df7['sscan'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['sscan']->__invoke($this, $this->valueHolder2528f, 'sscan', array('key' => $key, 'iterator' => &$iterator, 'pattern' => $pattern, 'count' => $count), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function ssubscribe(array $channels, callable $cb) : bool
    {
        if (isset($this->methodPrefixInterceptors2175e['ssubscribe'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['ssubscribe']->__invoke($this, $this->valueHolder2528f, 'ssubscribe', array('channels' => $channels, 'cb' => $cb), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->ssubscribe($channels, $cb);

        if (isset($this->methodSuffixInterceptors90df7['ssubscribe'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['ssubscribe']->__invoke($this, $this->valueHolder2528f, 'ssubscribe', array('channels' => $channels, 'cb' => $cb), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function strlen(string $key) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['strlen'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['strlen']->__invoke($this, $this->valueHolder2528f, 'strlen', array('key' => $key), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->strlen($key);

        if (isset($this->methodSuffixInterceptors90df7['strlen'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['strlen']->__invoke($this, $this->valueHolder2528f, 'strlen', array('key' => $key), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function subscribe(array $channels, callable $cb) : bool
    {
        if (isset($this->methodPrefixInterceptors2175e['subscribe'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['subscribe']->__invoke($this, $this->valueHolder2528f, 'subscribe', array('channels' => $channels, 'cb' => $cb), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->subscribe($channels, $cb);

        if (isset($this->methodSuffixInterceptors90df7['subscribe'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['subscribe']->__invoke($this, $this->valueHolder2528f, 'subscribe', array('channels' => $channels, 'cb' => $cb), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function sunsubscribe(array $channels) : \Redis|bool|array
    {
        if (isset($this->methodPrefixInterceptors2175e['sunsubscribe'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['sunsubscribe']->__invoke($this, $this->valueHolder2528f, 'sunsubscribe', array('channels' => $channels), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->sunsubscribe($channels);

        if (isset($this->methodSuffixInterceptors90df7['sunsubscribe'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['sunsubscribe']->__invoke($this, $this->valueHolder2528f, 'sunsubscribe', array('channels' => $channels), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function swapdb(int $src, int $dst) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptors2175e['swapdb'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['swapdb']->__invoke($this, $this->valueHolder2528f, 'swapdb', array('src' => $src, 'dst' => $dst), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->swapdb($src, $dst);

        if (isset($this->methodSuffixInterceptors90df7['swapdb'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['swapdb']->__invoke($this, $this->valueHolder2528f, 'swapdb', array('src' => $src, 'dst' => $dst), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function time() : \Redis|array
    {
        if (isset($this->methodPrefixInterceptors2175e['time'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['time']->__invoke($this, $this->valueHolder2528f, 'time', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->time();

        if (isset($this->methodSuffixInterceptors90df7['time'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['time']->__invoke($this, $this->valueHolder2528f, 'time', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function ttl(string $key) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['ttl'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['ttl']->__invoke($this, $this->valueHolder2528f, 'ttl', array('key' => $key), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->ttl($key);

        if (isset($this->methodSuffixInterceptors90df7['ttl'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['ttl']->__invoke($this, $this->valueHolder2528f, 'ttl', array('key' => $key), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function type(string $key) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['type'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['type']->__invoke($this, $this->valueHolder2528f, 'type', array('key' => $key), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->type($key);

        if (isset($this->methodSuffixInterceptors90df7['type'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['type']->__invoke($this, $this->valueHolder2528f, 'type', array('key' => $key), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function unlink(string|array $key, string ... $other_keys) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['unlink'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['unlink']->__invoke($this, $this->valueHolder2528f, 'unlink', array('key' => $key, 'other_keys' => $other_keys), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->unlink($key, ...$other_keys);

        if (isset($this->methodSuffixInterceptors90df7['unlink'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['unlink']->__invoke($this, $this->valueHolder2528f, 'unlink', array('key' => $key, 'other_keys' => $other_keys), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function unsubscribe(array $channels) : \Redis|bool|array
    {
        if (isset($this->methodPrefixInterceptors2175e['unsubscribe'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['unsubscribe']->__invoke($this, $this->valueHolder2528f, 'unsubscribe', array('channels' => $channels), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->unsubscribe($channels);

        if (isset($this->methodSuffixInterceptors90df7['unsubscribe'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['unsubscribe']->__invoke($this, $this->valueHolder2528f, 'unsubscribe', array('channels' => $channels), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function unwatch() : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptors2175e['unwatch'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['unwatch']->__invoke($this, $this->valueHolder2528f, 'unwatch', array(), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->unwatch();

        if (isset($this->methodSuffixInterceptors90df7['unwatch'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['unwatch']->__invoke($this, $this->valueHolder2528f, 'unwatch', array(), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function watch(string|array $key, string ... $other_keys) : \Redis|bool
    {
        if (isset($this->methodPrefixInterceptors2175e['watch'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['watch']->__invoke($this, $this->valueHolder2528f, 'watch', array('key' => $key, 'other_keys' => $other_keys), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->watch($key, ...$other_keys);

        if (isset($this->methodSuffixInterceptors90df7['watch'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['watch']->__invoke($this, $this->valueHolder2528f, 'watch', array('key' => $key, 'other_keys' => $other_keys), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function wait(int $numreplicas, int $timeout) : int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['wait'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['wait']->__invoke($this, $this->valueHolder2528f, 'wait', array('numreplicas' => $numreplicas, 'timeout' => $timeout), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->wait($numreplicas, $timeout);

        if (isset($this->methodSuffixInterceptors90df7['wait'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['wait']->__invoke($this, $this->valueHolder2528f, 'wait', array('numreplicas' => $numreplicas, 'timeout' => $timeout), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function xack(string $key, string $group, array $ids) : int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['xack'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['xack']->__invoke($this, $this->valueHolder2528f, 'xack', array('key' => $key, 'group' => $group, 'ids' => $ids), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->xack($key, $group, $ids);

        if (isset($this->methodSuffixInterceptors90df7['xack'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['xack']->__invoke($this, $this->valueHolder2528f, 'xack', array('key' => $key, 'group' => $group, 'ids' => $ids), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function xadd(string $key, string $id, array $values, int $maxlen = 0, bool $approx = false, bool $nomkstream = false) : \Redis|string|false
    {
        if (isset($this->methodPrefixInterceptors2175e['xadd'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['xadd']->__invoke($this, $this->valueHolder2528f, 'xadd', array('key' => $key, 'id' => $id, 'values' => $values, 'maxlen' => $maxlen, 'approx' => $approx, 'nomkstream' => $nomkstream), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->xadd($key, $id, $values, $maxlen, $approx, $nomkstream);

        if (isset($this->methodSuffixInterceptors90df7['xadd'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['xadd']->__invoke($this, $this->valueHolder2528f, 'xadd', array('key' => $key, 'id' => $id, 'values' => $values, 'maxlen' => $maxlen, 'approx' => $approx, 'nomkstream' => $nomkstream), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function xautoclaim(string $key, string $group, string $consumer, int $min_idle, string $start, int $count = -1, bool $justid = false) : \Redis|bool|array
    {
        if (isset($this->methodPrefixInterceptors2175e['xautoclaim'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['xautoclaim']->__invoke($this, $this->valueHolder2528f, 'xautoclaim', array('key' => $key, 'group' => $group, 'consumer' => $consumer, 'min_idle' => $min_idle, 'start' => $start, 'count' => $count, 'justid' => $justid), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->xautoclaim($key, $group, $consumer, $min_idle, $start, $count, $justid);

        if (isset($this->methodSuffixInterceptors90df7['xautoclaim'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['xautoclaim']->__invoke($this, $this->valueHolder2528f, 'xautoclaim', array('key' => $key, 'group' => $group, 'consumer' => $consumer, 'min_idle' => $min_idle, 'start' => $start, 'count' => $count, 'justid' => $justid), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function xclaim(string $key, string $group, string $consumer, int $min_idle, array $ids, array $options) : \Redis|bool|array
    {
        if (isset($this->methodPrefixInterceptors2175e['xclaim'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['xclaim']->__invoke($this, $this->valueHolder2528f, 'xclaim', array('key' => $key, 'group' => $group, 'consumer' => $consumer, 'min_idle' => $min_idle, 'ids' => $ids, 'options' => $options), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->xclaim($key, $group, $consumer, $min_idle, $ids, $options);

        if (isset($this->methodSuffixInterceptors90df7['xclaim'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['xclaim']->__invoke($this, $this->valueHolder2528f, 'xclaim', array('key' => $key, 'group' => $group, 'consumer' => $consumer, 'min_idle' => $min_idle, 'ids' => $ids, 'options' => $options), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function xdel(string $key, array $ids) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['xdel'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['xdel']->__invoke($this, $this->valueHolder2528f, 'xdel', array('key' => $key, 'ids' => $ids), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->xdel($key, $ids);

        if (isset($this->methodSuffixInterceptors90df7['xdel'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['xdel']->__invoke($this, $this->valueHolder2528f, 'xdel', array('key' => $key, 'ids' => $ids), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function xgroup(string $operation, ?string $key = null, ?string $group = null, ?string $id_or_consumer = null, bool $mkstream = false, int $entries_read = -2) : mixed
    {
        if (isset($this->methodPrefixInterceptors2175e['xgroup'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['xgroup']->__invoke($this, $this->valueHolder2528f, 'xgroup', array('operation' => $operation, 'key' => $key, 'group' => $group, 'id_or_consumer' => $id_or_consumer, 'mkstream' => $mkstream, 'entries_read' => $entries_read), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->xgroup($operation, $key, $group, $id_or_consumer, $mkstream, $entries_read);

        if (isset($this->methodSuffixInterceptors90df7['xgroup'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['xgroup']->__invoke($this, $this->valueHolder2528f, 'xgroup', array('operation' => $operation, 'key' => $key, 'group' => $group, 'id_or_consumer' => $id_or_consumer, 'mkstream' => $mkstream, 'entries_read' => $entries_read), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function xinfo(string $operation, ?string $arg1 = null, ?string $arg2 = null, int $count = -1) : mixed
    {
        if (isset($this->methodPrefixInterceptors2175e['xinfo'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['xinfo']->__invoke($this, $this->valueHolder2528f, 'xinfo', array('operation' => $operation, 'arg1' => $arg1, 'arg2' => $arg2, 'count' => $count), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->xinfo($operation, $arg1, $arg2, $count);

        if (isset($this->methodSuffixInterceptors90df7['xinfo'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['xinfo']->__invoke($this, $this->valueHolder2528f, 'xinfo', array('operation' => $operation, 'arg1' => $arg1, 'arg2' => $arg2, 'count' => $count), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function xlen(string $key) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['xlen'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['xlen']->__invoke($this, $this->valueHolder2528f, 'xlen', array('key' => $key), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->xlen($key);

        if (isset($this->methodSuffixInterceptors90df7['xlen'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['xlen']->__invoke($this, $this->valueHolder2528f, 'xlen', array('key' => $key), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function xpending(string $key, string $group, ?string $start = null, ?string $end = null, int $count = -1, ?string $consumer = null) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptors2175e['xpending'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['xpending']->__invoke($this, $this->valueHolder2528f, 'xpending', array('key' => $key, 'group' => $group, 'start' => $start, 'end' => $end, 'count' => $count, 'consumer' => $consumer), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->xpending($key, $group, $start, $end, $count, $consumer);

        if (isset($this->methodSuffixInterceptors90df7['xpending'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['xpending']->__invoke($this, $this->valueHolder2528f, 'xpending', array('key' => $key, 'group' => $group, 'start' => $start, 'end' => $end, 'count' => $count, 'consumer' => $consumer), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function xrange(string $key, string $start, string $end, int $count = -1) : \Redis|bool|array
    {
        if (isset($this->methodPrefixInterceptors2175e['xrange'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['xrange']->__invoke($this, $this->valueHolder2528f, 'xrange', array('key' => $key, 'start' => $start, 'end' => $end, 'count' => $count), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->xrange($key, $start, $end, $count);

        if (isset($this->methodSuffixInterceptors90df7['xrange'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['xrange']->__invoke($this, $this->valueHolder2528f, 'xrange', array('key' => $key, 'start' => $start, 'end' => $end, 'count' => $count), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function xread(array $streams, int $count = -1, int $block = -1) : \Redis|bool|array
    {
        if (isset($this->methodPrefixInterceptors2175e['xread'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['xread']->__invoke($this, $this->valueHolder2528f, 'xread', array('streams' => $streams, 'count' => $count, 'block' => $block), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->xread($streams, $count, $block);

        if (isset($this->methodSuffixInterceptors90df7['xread'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['xread']->__invoke($this, $this->valueHolder2528f, 'xread', array('streams' => $streams, 'count' => $count, 'block' => $block), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function xreadgroup(string $group, string $consumer, array $streams, int $count = 1, int $block = 1) : \Redis|bool|array
    {
        if (isset($this->methodPrefixInterceptors2175e['xreadgroup'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['xreadgroup']->__invoke($this, $this->valueHolder2528f, 'xreadgroup', array('group' => $group, 'consumer' => $consumer, 'streams' => $streams, 'count' => $count, 'block' => $block), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->xreadgroup($group, $consumer, $streams, $count, $block);

        if (isset($this->methodSuffixInterceptors90df7['xreadgroup'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['xreadgroup']->__invoke($this, $this->valueHolder2528f, 'xreadgroup', array('group' => $group, 'consumer' => $consumer, 'streams' => $streams, 'count' => $count, 'block' => $block), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function xrevrange(string $key, string $end, string $start, int $count = -1) : \Redis|bool|array
    {
        if (isset($this->methodPrefixInterceptors2175e['xrevrange'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['xrevrange']->__invoke($this, $this->valueHolder2528f, 'xrevrange', array('key' => $key, 'end' => $end, 'start' => $start, 'count' => $count), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->xrevrange($key, $end, $start, $count);

        if (isset($this->methodSuffixInterceptors90df7['xrevrange'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['xrevrange']->__invoke($this, $this->valueHolder2528f, 'xrevrange', array('key' => $key, 'end' => $end, 'start' => $start, 'count' => $count), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function xtrim(string $key, string $threshold, bool $approx = false, bool $minid = false, int $limit = -1) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['xtrim'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['xtrim']->__invoke($this, $this->valueHolder2528f, 'xtrim', array('key' => $key, 'threshold' => $threshold, 'approx' => $approx, 'minid' => $minid, 'limit' => $limit), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->xtrim($key, $threshold, $approx, $minid, $limit);

        if (isset($this->methodSuffixInterceptors90df7['xtrim'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['xtrim']->__invoke($this, $this->valueHolder2528f, 'xtrim', array('key' => $key, 'threshold' => $threshold, 'approx' => $approx, 'minid' => $minid, 'limit' => $limit), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zAdd(string $key, float|array $score_or_options, mixed ... $more_scores_and_mems) : \Redis|int|float|false
    {
        if (isset($this->methodPrefixInterceptors2175e['zAdd'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['zAdd']->__invoke($this, $this->valueHolder2528f, 'zAdd', array('key' => $key, 'score_or_options' => $score_or_options, 'more_scores_and_mems' => $more_scores_and_mems), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->zAdd($key, $score_or_options, ...$more_scores_and_mems);

        if (isset($this->methodSuffixInterceptors90df7['zAdd'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['zAdd']->__invoke($this, $this->valueHolder2528f, 'zAdd', array('key' => $key, 'score_or_options' => $score_or_options, 'more_scores_and_mems' => $more_scores_and_mems), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zCard(string $key) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['zCard'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['zCard']->__invoke($this, $this->valueHolder2528f, 'zCard', array('key' => $key), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->zCard($key);

        if (isset($this->methodSuffixInterceptors90df7['zCard'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['zCard']->__invoke($this, $this->valueHolder2528f, 'zCard', array('key' => $key), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zCount(string $key, int|string $start, int|string $end) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['zCount'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['zCount']->__invoke($this, $this->valueHolder2528f, 'zCount', array('key' => $key, 'start' => $start, 'end' => $end), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->zCount($key, $start, $end);

        if (isset($this->methodSuffixInterceptors90df7['zCount'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['zCount']->__invoke($this, $this->valueHolder2528f, 'zCount', array('key' => $key, 'start' => $start, 'end' => $end), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zIncrBy(string $key, float $value, mixed $member) : \Redis|float|false
    {
        if (isset($this->methodPrefixInterceptors2175e['zIncrBy'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['zIncrBy']->__invoke($this, $this->valueHolder2528f, 'zIncrBy', array('key' => $key, 'value' => $value, 'member' => $member), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->zIncrBy($key, $value, $member);

        if (isset($this->methodSuffixInterceptors90df7['zIncrBy'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['zIncrBy']->__invoke($this, $this->valueHolder2528f, 'zIncrBy', array('key' => $key, 'value' => $value, 'member' => $member), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zLexCount(string $key, string $min, string $max) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['zLexCount'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['zLexCount']->__invoke($this, $this->valueHolder2528f, 'zLexCount', array('key' => $key, 'min' => $min, 'max' => $max), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->zLexCount($key, $min, $max);

        if (isset($this->methodSuffixInterceptors90df7['zLexCount'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['zLexCount']->__invoke($this, $this->valueHolder2528f, 'zLexCount', array('key' => $key, 'min' => $min, 'max' => $max), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zMscore(string $key, mixed $member, mixed ... $other_members) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptors2175e['zMscore'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['zMscore']->__invoke($this, $this->valueHolder2528f, 'zMscore', array('key' => $key, 'member' => $member, 'other_members' => $other_members), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->zMscore($key, $member, ...$other_members);

        if (isset($this->methodSuffixInterceptors90df7['zMscore'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['zMscore']->__invoke($this, $this->valueHolder2528f, 'zMscore', array('key' => $key, 'member' => $member, 'other_members' => $other_members), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zPopMax(string $key, ?int $count = null) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptors2175e['zPopMax'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['zPopMax']->__invoke($this, $this->valueHolder2528f, 'zPopMax', array('key' => $key, 'count' => $count), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->zPopMax($key, $count);

        if (isset($this->methodSuffixInterceptors90df7['zPopMax'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['zPopMax']->__invoke($this, $this->valueHolder2528f, 'zPopMax', array('key' => $key, 'count' => $count), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zPopMin(string $key, ?int $count = null) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptors2175e['zPopMin'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['zPopMin']->__invoke($this, $this->valueHolder2528f, 'zPopMin', array('key' => $key, 'count' => $count), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->zPopMin($key, $count);

        if (isset($this->methodSuffixInterceptors90df7['zPopMin'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['zPopMin']->__invoke($this, $this->valueHolder2528f, 'zPopMin', array('key' => $key, 'count' => $count), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zRange(string $key, int|string $start, int|string $end, bool|array|null $options = null) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptors2175e['zRange'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['zRange']->__invoke($this, $this->valueHolder2528f, 'zRange', array('key' => $key, 'start' => $start, 'end' => $end, 'options' => $options), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->zRange($key, $start, $end, $options);

        if (isset($this->methodSuffixInterceptors90df7['zRange'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['zRange']->__invoke($this, $this->valueHolder2528f, 'zRange', array('key' => $key, 'start' => $start, 'end' => $end, 'options' => $options), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zRangeByLex(string $key, string $min, string $max, int $offset = -1, int $count = -1) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptors2175e['zRangeByLex'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['zRangeByLex']->__invoke($this, $this->valueHolder2528f, 'zRangeByLex', array('key' => $key, 'min' => $min, 'max' => $max, 'offset' => $offset, 'count' => $count), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->zRangeByLex($key, $min, $max, $offset, $count);

        if (isset($this->methodSuffixInterceptors90df7['zRangeByLex'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['zRangeByLex']->__invoke($this, $this->valueHolder2528f, 'zRangeByLex', array('key' => $key, 'min' => $min, 'max' => $max, 'offset' => $offset, 'count' => $count), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zRangeByScore(string $key, string $start, string $end, array $options = []) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptors2175e['zRangeByScore'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['zRangeByScore']->__invoke($this, $this->valueHolder2528f, 'zRangeByScore', array('key' => $key, 'start' => $start, 'end' => $end, 'options' => $options), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->zRangeByScore($key, $start, $end, $options);

        if (isset($this->methodSuffixInterceptors90df7['zRangeByScore'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['zRangeByScore']->__invoke($this, $this->valueHolder2528f, 'zRangeByScore', array('key' => $key, 'start' => $start, 'end' => $end, 'options' => $options), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zrangestore(string $dstkey, string $srckey, string $start, string $end, bool|array|null $options = null) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['zrangestore'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['zrangestore']->__invoke($this, $this->valueHolder2528f, 'zrangestore', array('dstkey' => $dstkey, 'srckey' => $srckey, 'start' => $start, 'end' => $end, 'options' => $options), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->zrangestore($dstkey, $srckey, $start, $end, $options);

        if (isset($this->methodSuffixInterceptors90df7['zrangestore'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['zrangestore']->__invoke($this, $this->valueHolder2528f, 'zrangestore', array('dstkey' => $dstkey, 'srckey' => $srckey, 'start' => $start, 'end' => $end, 'options' => $options), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zRandMember(string $key, ?array $options = null) : \Redis|string|array
    {
        if (isset($this->methodPrefixInterceptors2175e['zRandMember'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['zRandMember']->__invoke($this, $this->valueHolder2528f, 'zRandMember', array('key' => $key, 'options' => $options), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->zRandMember($key, $options);

        if (isset($this->methodSuffixInterceptors90df7['zRandMember'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['zRandMember']->__invoke($this, $this->valueHolder2528f, 'zRandMember', array('key' => $key, 'options' => $options), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zRank(string $key, mixed $member) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['zRank'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['zRank']->__invoke($this, $this->valueHolder2528f, 'zRank', array('key' => $key, 'member' => $member), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->zRank($key, $member);

        if (isset($this->methodSuffixInterceptors90df7['zRank'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['zRank']->__invoke($this, $this->valueHolder2528f, 'zRank', array('key' => $key, 'member' => $member), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zRem(mixed $key, mixed $member, mixed ... $other_members) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['zRem'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['zRem']->__invoke($this, $this->valueHolder2528f, 'zRem', array('key' => $key, 'member' => $member, 'other_members' => $other_members), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->zRem($key, $member, ...$other_members);

        if (isset($this->methodSuffixInterceptors90df7['zRem'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['zRem']->__invoke($this, $this->valueHolder2528f, 'zRem', array('key' => $key, 'member' => $member, 'other_members' => $other_members), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zRemRangeByLex(string $key, string $min, string $max) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['zRemRangeByLex'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['zRemRangeByLex']->__invoke($this, $this->valueHolder2528f, 'zRemRangeByLex', array('key' => $key, 'min' => $min, 'max' => $max), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->zRemRangeByLex($key, $min, $max);

        if (isset($this->methodSuffixInterceptors90df7['zRemRangeByLex'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['zRemRangeByLex']->__invoke($this, $this->valueHolder2528f, 'zRemRangeByLex', array('key' => $key, 'min' => $min, 'max' => $max), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zRemRangeByRank(string $key, int $start, int $end) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['zRemRangeByRank'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['zRemRangeByRank']->__invoke($this, $this->valueHolder2528f, 'zRemRangeByRank', array('key' => $key, 'start' => $start, 'end' => $end), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->zRemRangeByRank($key, $start, $end);

        if (isset($this->methodSuffixInterceptors90df7['zRemRangeByRank'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['zRemRangeByRank']->__invoke($this, $this->valueHolder2528f, 'zRemRangeByRank', array('key' => $key, 'start' => $start, 'end' => $end), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zRemRangeByScore(string $key, string $start, string $end) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['zRemRangeByScore'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['zRemRangeByScore']->__invoke($this, $this->valueHolder2528f, 'zRemRangeByScore', array('key' => $key, 'start' => $start, 'end' => $end), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->zRemRangeByScore($key, $start, $end);

        if (isset($this->methodSuffixInterceptors90df7['zRemRangeByScore'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['zRemRangeByScore']->__invoke($this, $this->valueHolder2528f, 'zRemRangeByScore', array('key' => $key, 'start' => $start, 'end' => $end), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zRevRange(string $key, int $start, int $end, mixed $scores = null) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptors2175e['zRevRange'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['zRevRange']->__invoke($this, $this->valueHolder2528f, 'zRevRange', array('key' => $key, 'start' => $start, 'end' => $end, 'scores' => $scores), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->zRevRange($key, $start, $end, $scores);

        if (isset($this->methodSuffixInterceptors90df7['zRevRange'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['zRevRange']->__invoke($this, $this->valueHolder2528f, 'zRevRange', array('key' => $key, 'start' => $start, 'end' => $end, 'scores' => $scores), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zRevRangeByLex(string $key, string $max, string $min, int $offset = -1, int $count = -1) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptors2175e['zRevRangeByLex'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['zRevRangeByLex']->__invoke($this, $this->valueHolder2528f, 'zRevRangeByLex', array('key' => $key, 'max' => $max, 'min' => $min, 'offset' => $offset, 'count' => $count), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->zRevRangeByLex($key, $max, $min, $offset, $count);

        if (isset($this->methodSuffixInterceptors90df7['zRevRangeByLex'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['zRevRangeByLex']->__invoke($this, $this->valueHolder2528f, 'zRevRangeByLex', array('key' => $key, 'max' => $max, 'min' => $min, 'offset' => $offset, 'count' => $count), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zRevRangeByScore(string $key, string $max, string $min, bool|array $options = []) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptors2175e['zRevRangeByScore'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['zRevRangeByScore']->__invoke($this, $this->valueHolder2528f, 'zRevRangeByScore', array('key' => $key, 'max' => $max, 'min' => $min, 'options' => $options), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->zRevRangeByScore($key, $max, $min, $options);

        if (isset($this->methodSuffixInterceptors90df7['zRevRangeByScore'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['zRevRangeByScore']->__invoke($this, $this->valueHolder2528f, 'zRevRangeByScore', array('key' => $key, 'max' => $max, 'min' => $min, 'options' => $options), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zRevRank(string $key, mixed $member) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['zRevRank'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['zRevRank']->__invoke($this, $this->valueHolder2528f, 'zRevRank', array('key' => $key, 'member' => $member), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->zRevRank($key, $member);

        if (isset($this->methodSuffixInterceptors90df7['zRevRank'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['zRevRank']->__invoke($this, $this->valueHolder2528f, 'zRevRank', array('key' => $key, 'member' => $member), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zScore(string $key, mixed $member) : \Redis|float|false
    {
        if (isset($this->methodPrefixInterceptors2175e['zScore'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['zScore']->__invoke($this, $this->valueHolder2528f, 'zScore', array('key' => $key, 'member' => $member), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->zScore($key, $member);

        if (isset($this->methodSuffixInterceptors90df7['zScore'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['zScore']->__invoke($this, $this->valueHolder2528f, 'zScore', array('key' => $key, 'member' => $member), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zdiff(array $keys, ?array $options = null) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptors2175e['zdiff'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['zdiff']->__invoke($this, $this->valueHolder2528f, 'zdiff', array('keys' => $keys, 'options' => $options), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->zdiff($keys, $options);

        if (isset($this->methodSuffixInterceptors90df7['zdiff'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['zdiff']->__invoke($this, $this->valueHolder2528f, 'zdiff', array('keys' => $keys, 'options' => $options), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zdiffstore(string $dst, array $keys) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['zdiffstore'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['zdiffstore']->__invoke($this, $this->valueHolder2528f, 'zdiffstore', array('dst' => $dst, 'keys' => $keys), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->zdiffstore($dst, $keys);

        if (isset($this->methodSuffixInterceptors90df7['zdiffstore'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['zdiffstore']->__invoke($this, $this->valueHolder2528f, 'zdiffstore', array('dst' => $dst, 'keys' => $keys), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zinter(array $keys, ?array $weights = null, ?array $options = null) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptors2175e['zinter'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['zinter']->__invoke($this, $this->valueHolder2528f, 'zinter', array('keys' => $keys, 'weights' => $weights, 'options' => $options), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->zinter($keys, $weights, $options);

        if (isset($this->methodSuffixInterceptors90df7['zinter'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['zinter']->__invoke($this, $this->valueHolder2528f, 'zinter', array('keys' => $keys, 'weights' => $weights, 'options' => $options), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zintercard(array $keys, int $limit = -1) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['zintercard'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['zintercard']->__invoke($this, $this->valueHolder2528f, 'zintercard', array('keys' => $keys, 'limit' => $limit), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->zintercard($keys, $limit);

        if (isset($this->methodSuffixInterceptors90df7['zintercard'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['zintercard']->__invoke($this, $this->valueHolder2528f, 'zintercard', array('keys' => $keys, 'limit' => $limit), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zinterstore(string $dst, array $keys, ?array $weights = null, ?string $aggregate = null) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['zinterstore'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['zinterstore']->__invoke($this, $this->valueHolder2528f, 'zinterstore', array('dst' => $dst, 'keys' => $keys, 'weights' => $weights, 'aggregate' => $aggregate), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->zinterstore($dst, $keys, $weights, $aggregate);

        if (isset($this->methodSuffixInterceptors90df7['zinterstore'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['zinterstore']->__invoke($this, $this->valueHolder2528f, 'zinterstore', array('dst' => $dst, 'keys' => $keys, 'weights' => $weights, 'aggregate' => $aggregate), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zscan(string $key, int|string|null &$iterator, ?string $pattern = null, int $count = 0) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptors2175e['zscan'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['zscan']->__invoke($this, $this->valueHolder2528f, 'zscan', array('key' => $key, 'iterator' => &$iterator, 'pattern' => $pattern, 'count' => $count), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->zscan($key, $iterator, $pattern, $count);

        if (isset($this->methodSuffixInterceptors90df7['zscan'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['zscan']->__invoke($this, $this->valueHolder2528f, 'zscan', array('key' => $key, 'iterator' => &$iterator, 'pattern' => $pattern, 'count' => $count), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zunion(array $keys, ?array $weights = null, ?array $options = null) : \Redis|array|false
    {
        if (isset($this->methodPrefixInterceptors2175e['zunion'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['zunion']->__invoke($this, $this->valueHolder2528f, 'zunion', array('keys' => $keys, 'weights' => $weights, 'options' => $options), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->zunion($keys, $weights, $options);

        if (isset($this->methodSuffixInterceptors90df7['zunion'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['zunion']->__invoke($this, $this->valueHolder2528f, 'zunion', array('keys' => $keys, 'weights' => $weights, 'options' => $options), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function zunionstore(string $dst, array $keys, ?array $weights = null, ?string $aggregate = null) : \Redis|int|false
    {
        if (isset($this->methodPrefixInterceptors2175e['zunionstore'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['zunionstore']->__invoke($this, $this->valueHolder2528f, 'zunionstore', array('dst' => $dst, 'keys' => $keys, 'weights' => $weights, 'aggregate' => $aggregate), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $returnValue = $this->valueHolder2528f->zunionstore($dst, $keys, $weights, $aggregate);

        if (isset($this->methodSuffixInterceptors90df7['zunionstore'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['zunionstore']->__invoke($this, $this->valueHolder2528f, 'zunionstore', array('dst' => $dst, 'keys' => $keys, 'weights' => $weights, 'aggregate' => $aggregate), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function __construct(?array $options = null)
    {
        static $reflection;

        if (! $this->valueHolder2528f) {
            $reflection = $reflection ?? new \ReflectionClass('Redis');
            $this->valueHolder2528f = $reflection->newInstanceWithoutConstructor();
        }

        $this->valueHolder2528f->__construct($options);
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

        $instance->valueHolder2528f = $wrappedObject;
        $instance->methodPrefixInterceptors2175e = $prefixInterceptors;
        $instance->methodSuffixInterceptors90df7 = $suffixInterceptors;

        return $instance;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2528f;
    }

    public function setMethodPrefixInterceptor(string $methodName, ?\Closure $prefixInterceptor = null) : void
    {
        $this->methodPrefixInterceptors2175e[$methodName] = $prefixInterceptor;
    }

    public function setMethodSuffixInterceptor(string $methodName, ?\Closure $suffixInterceptor = null) : void
    {
        $this->methodSuffixInterceptors90df7[$methodName] = $suffixInterceptor;
    }

    public function & __get($name)
    {
        if (isset($this->methodPrefixInterceptors2175e['__get'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['__get']->__invoke($this, $this->valueHolder2528f, '__get', array('name' => $name), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $realInstanceReflection = new \ReflectionClass('Redis');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2528f;

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

        $targetObject = $this->valueHolder2528f;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        if (isset($this->methodSuffixInterceptors90df7['__get'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['__get']->__invoke($this, $this->valueHolder2528f, '__get', array('name' => $name), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function __set($name, $value)
    {
        if (isset($this->methodPrefixInterceptors2175e['__set'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['__set']->__invoke($this, $this->valueHolder2528f, '__set', array('name' => $name, 'value' => $value), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $realInstanceReflection = new \ReflectionClass('Redis');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2528f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder2528f;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        if (isset($this->methodSuffixInterceptors90df7['__set'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['__set']->__invoke($this, $this->valueHolder2528f, '__set', array('name' => $name, 'value' => $value), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function __isset($name)
    {
        if (isset($this->methodPrefixInterceptors2175e['__isset'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['__isset']->__invoke($this, $this->valueHolder2528f, '__isset', array('name' => $name), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $realInstanceReflection = new \ReflectionClass('Redis');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2528f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder2528f;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        if (isset($this->methodSuffixInterceptors90df7['__isset'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['__isset']->__invoke($this, $this->valueHolder2528f, '__isset', array('name' => $name), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function __unset($name)
    {
        if (isset($this->methodPrefixInterceptors2175e['__unset'])) {
            $returnEarly       = false;
            $prefixReturnValue = $this->methodPrefixInterceptors2175e['__unset']->__invoke($this, $this->valueHolder2528f, '__unset', array('name' => $name), $returnEarly);

            if ($returnEarly) {
                return $prefixReturnValue;
            }
        }

        $realInstanceReflection = new \ReflectionClass('Redis');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2528f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder2528f;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();$returnValue = false;

        if (isset($this->methodSuffixInterceptors90df7['__unset'])) {
            $returnEarly       = false;
            $suffixReturnValue = $this->methodSuffixInterceptors90df7['__unset']->__invoke($this, $this->valueHolder2528f, '__unset', array('name' => $name), $returnValue, $returnEarly);

            if ($returnEarly) {
                return $suffixReturnValue;
            }
        }

        return $returnValue;
    }

    public function __clone()
    {
        $this->valueHolder2528f = clone $this->valueHolder2528f;

        foreach ($this->methodPrefixInterceptors2175e as $key => $value) {
            $this->methodPrefixInterceptors2175e[$key] = clone $value;
        }

        foreach ($this->methodSuffixInterceptors90df7 as $key => $value) {
            $this->methodSuffixInterceptors90df7[$key] = clone $value;
        }
    }

    public function __sleep()
    {
        return array('valueHolder2528f');
    }

    public function __wakeup()
    {
    }
}
