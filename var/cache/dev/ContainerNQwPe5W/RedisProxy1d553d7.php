<?php

namespace ContainerNQwPe5W;

class RedisProxy1d553d7 extends \Redis implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyProxyTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [];

    public function __construct(?array $options = null)
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->__construct(...\func_get_args());
        }

        return parent::__construct(...\func_get_args());
    }

    public function _compress(string $value): string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->_compress(...\func_get_args());
        }

        return parent::_compress(...\func_get_args());
    }

    public function _uncompress(string $value): string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->_uncompress(...\func_get_args());
        }

        return parent::_uncompress(...\func_get_args());
    }

    public function _prefix(string $key): string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->_prefix(...\func_get_args());
        }

        return parent::_prefix(...\func_get_args());
    }

    public function _serialize(mixed $value): string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->_serialize(...\func_get_args());
        }

        return parent::_serialize(...\func_get_args());
    }

    public function _unserialize(string $value): mixed
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->_unserialize(...\func_get_args());
        }

        return parent::_unserialize(...\func_get_args());
    }

    public function _pack(mixed $value): string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->_pack(...\func_get_args());
        }

        return parent::_pack(...\func_get_args());
    }

    public function _unpack(string $value): mixed
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->_unpack(...\func_get_args());
        }

        return parent::_unpack(...\func_get_args());
    }

    public function acl(string $subcmd, string ...$args): mixed
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->acl(...\func_get_args());
        }

        return parent::acl(...\func_get_args());
    }

    public function append(string $key, mixed $value): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->append(...\func_get_args());
        }

        return parent::append(...\func_get_args());
    }

    public function auth(#[\SensitiveParameter] mixed $credentials): \Redis|bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->auth(...\func_get_args());
        }

        return parent::auth(...\func_get_args());
    }

    public function bgSave(): \Redis|bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->bgSave(...\func_get_args());
        }

        return parent::bgSave(...\func_get_args());
    }

    public function bgrewriteaof(): \Redis|bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->bgrewriteaof(...\func_get_args());
        }

        return parent::bgrewriteaof(...\func_get_args());
    }

    public function waitaof(int $numlocal, int $numreplicas, int $timeout): \Redis|array|false
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->waitaof(...\func_get_args());
        }

        return parent::waitaof(...\func_get_args());
    }

    public function bitcount(string $key, int $start = 0, int $end = -1, bool $bybit = false): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->bitcount(...\func_get_args());
        }

        return parent::bitcount(...\func_get_args());
    }

    public function bitop(string $operation, string $deskey, string $srckey, string ...$other_keys): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->bitop(...\func_get_args());
        }

        return parent::bitop(...\func_get_args());
    }

    public function bitpos(string $key, bool $bit, int $start = 0, int $end = -1, bool $bybit = false): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->bitpos(...\func_get_args());
        }

        return parent::bitpos(...\func_get_args());
    }

    public function blPop(array|string $key_or_keys, float|int|string $timeout_or_key, mixed ...$extra_args): \Redis|array|false|null
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->blPop(...\func_get_args());
        }

        return parent::blPop(...\func_get_args());
    }

    public function brPop(array|string $key_or_keys, float|int|string $timeout_or_key, mixed ...$extra_args): \Redis|array|false|null
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->brPop(...\func_get_args());
        }

        return parent::brPop(...\func_get_args());
    }

    public function brpoplpush(string $src, string $dst, float|int $timeout): \Redis|false|string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->brpoplpush(...\func_get_args());
        }

        return parent::brpoplpush(...\func_get_args());
    }

    public function bzPopMax(array|string $key, int|string $timeout_or_key, mixed ...$extra_args): \Redis|array|false
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->bzPopMax(...\func_get_args());
        }

        return parent::bzPopMax(...\func_get_args());
    }

    public function bzPopMin(array|string $key, int|string $timeout_or_key, mixed ...$extra_args): \Redis|array|false
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->bzPopMin(...\func_get_args());
        }

        return parent::bzPopMin(...\func_get_args());
    }

    public function bzmpop(float $timeout, array $keys, string $from, int $count = 1): \Redis|array|false|null
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->bzmpop(...\func_get_args());
        }

        return parent::bzmpop(...\func_get_args());
    }

    public function zmpop(array $keys, string $from, int $count = 1): \Redis|array|false|null
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zmpop(...\func_get_args());
        }

        return parent::zmpop(...\func_get_args());
    }

    public function blmpop(float $timeout, array $keys, string $from, int $count = 1): \Redis|array|false|null
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->blmpop(...\func_get_args());
        }

        return parent::blmpop(...\func_get_args());
    }

    public function lmpop(array $keys, string $from, int $count = 1): \Redis|array|false|null
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lmpop(...\func_get_args());
        }

        return parent::lmpop(...\func_get_args());
    }

    public function clearLastError(): bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->clearLastError(...\func_get_args());
        }

        return parent::clearLastError(...\func_get_args());
    }

    public function client(string $opt, mixed ...$args): mixed
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->client(...\func_get_args());
        }

        return parent::client(...\func_get_args());
    }

    public function close(): bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->close(...\func_get_args());
        }

        return parent::close(...\func_get_args());
    }

    public function command(?string $opt = null, mixed ...$args): mixed
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->command(...\func_get_args());
        }

        return parent::command(...\func_get_args());
    }

    public function config(string $operation, array|null|string $key_or_settings = null, ?string $value = null): mixed
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->config(...\func_get_args());
        }

        return parent::config(...\func_get_args());
    }

    public function connect(string $host, int $port = 6379, float $timeout = 0, ?string $persistent_id = null, int $retry_interval = 0, float $read_timeout = 0, ?array $context = null): bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->connect(...\func_get_args());
        }

        return parent::connect(...\func_get_args());
    }

    public function copy(string $src, string $dst, ?array $options = null): \Redis|bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->copy(...\func_get_args());
        }

        return parent::copy(...\func_get_args());
    }

    public function dbSize(): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->dbSize(...\func_get_args());
        }

        return parent::dbSize(...\func_get_args());
    }

    public function debug(string $key): \Redis|string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->debug(...\func_get_args());
        }

        return parent::debug(...\func_get_args());
    }

    public function decr(string $key, int $by = 1): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->decr(...\func_get_args());
        }

        return parent::decr(...\func_get_args());
    }

    public function decrBy(string $key, int $value): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->decrBy(...\func_get_args());
        }

        return parent::decrBy(...\func_get_args());
    }

    public function del(array|string $key, string ...$other_keys): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->del(...\func_get_args());
        }

        return parent::del(...\func_get_args());
    }

    public function delete(array|string $key, string ...$other_keys): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->delete(...\func_get_args());
        }

        return parent::delete(...\func_get_args());
    }

    public function discard(): \Redis|bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->discard(...\func_get_args());
        }

        return parent::discard(...\func_get_args());
    }

    public function dump(string $key): \Redis|false|string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->dump(...\func_get_args());
        }

        return parent::dump(...\func_get_args());
    }

    public function echo(string $str): \Redis|false|string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->echo(...\func_get_args());
        }

        return parent::echo(...\func_get_args());
    }

    public function eval(string $script, array $args = [], int $num_keys = 0): mixed
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->eval(...\func_get_args());
        }

        return parent::eval(...\func_get_args());
    }

    public function eval_ro(string $script_sha, array $args = [], int $num_keys = 0): mixed
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->eval_ro(...\func_get_args());
        }

        return parent::eval_ro(...\func_get_args());
    }

    public function evalsha(string $sha1, array $args = [], int $num_keys = 0): mixed
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->evalsha(...\func_get_args());
        }

        return parent::evalsha(...\func_get_args());
    }

    public function evalsha_ro(string $sha1, array $args = [], int $num_keys = 0): mixed
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->evalsha_ro(...\func_get_args());
        }

        return parent::evalsha_ro(...\func_get_args());
    }

    public function exec(): \Redis|array|false
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->exec(...\func_get_args());
        }

        return parent::exec(...\func_get_args());
    }

    public function exists(mixed $key, mixed ...$other_keys): \Redis|bool|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->exists(...\func_get_args());
        }

        return parent::exists(...\func_get_args());
    }

    public function expire(string $key, int $timeout, ?string $mode = null): \Redis|bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->expire(...\func_get_args());
        }

        return parent::expire(...\func_get_args());
    }

    public function expireAt(string $key, int $timestamp, ?string $mode = null): \Redis|bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->expireAt(...\func_get_args());
        }

        return parent::expireAt(...\func_get_args());
    }

    public function failover(?array $to = null, bool $abort = false, int $timeout = 0): \Redis|bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->failover(...\func_get_args());
        }

        return parent::failover(...\func_get_args());
    }

    public function expiretime(string $key): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->expiretime(...\func_get_args());
        }

        return parent::expiretime(...\func_get_args());
    }

    public function pexpiretime(string $key): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->pexpiretime(...\func_get_args());
        }

        return parent::pexpiretime(...\func_get_args());
    }

    public function fcall(string $fn, array $keys = [], array $args = []): mixed
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->fcall(...\func_get_args());
        }

        return parent::fcall(...\func_get_args());
    }

    public function fcall_ro(string $fn, array $keys = [], array $args = []): mixed
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->fcall_ro(...\func_get_args());
        }

        return parent::fcall_ro(...\func_get_args());
    }

    public function flushAll(?bool $sync = null): \Redis|bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->flushAll(...\func_get_args());
        }

        return parent::flushAll(...\func_get_args());
    }

    public function flushDB(?bool $sync = null): \Redis|bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->flushDB(...\func_get_args());
        }

        return parent::flushDB(...\func_get_args());
    }

    public function function(string $operation, mixed ...$args): \Redis|array|bool|string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->function(...\func_get_args());
        }

        return parent::function(...\func_get_args());
    }

    public function geoadd(string $key, float $lng, float $lat, string $member, mixed ...$other_triples_and_options): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->geoadd(...\func_get_args());
        }

        return parent::geoadd(...\func_get_args());
    }

    public function geodist(string $key, string $src, string $dst, ?string $unit = null): \Redis|false|float
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->geodist(...\func_get_args());
        }

        return parent::geodist(...\func_get_args());
    }

    public function geohash(string $key, string $member, string ...$other_members): \Redis|array|false
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->geohash(...\func_get_args());
        }

        return parent::geohash(...\func_get_args());
    }

    public function geopos(string $key, string $member, string ...$other_members): \Redis|array|false
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->geopos(...\func_get_args());
        }

        return parent::geopos(...\func_get_args());
    }

    public function georadius(string $key, float $lng, float $lat, float $radius, string $unit, array $options = []): mixed
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->georadius(...\func_get_args());
        }

        return parent::georadius(...\func_get_args());
    }

    public function georadius_ro(string $key, float $lng, float $lat, float $radius, string $unit, array $options = []): mixed
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->georadius_ro(...\func_get_args());
        }

        return parent::georadius_ro(...\func_get_args());
    }

    public function georadiusbymember(string $key, string $member, float $radius, string $unit, array $options = []): mixed
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->georadiusbymember(...\func_get_args());
        }

        return parent::georadiusbymember(...\func_get_args());
    }

    public function georadiusbymember_ro(string $key, string $member, float $radius, string $unit, array $options = []): mixed
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->georadiusbymember_ro(...\func_get_args());
        }

        return parent::georadiusbymember_ro(...\func_get_args());
    }

    public function geosearch(string $key, array|string $position, array|float|int $shape, string $unit, array $options = []): array
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->geosearch(...\func_get_args());
        }

        return parent::geosearch(...\func_get_args());
    }

    public function geosearchstore(string $dst, string $src, array|string $position, array|float|int $shape, string $unit, array $options = []): \Redis|array|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->geosearchstore(...\func_get_args());
        }

        return parent::geosearchstore(...\func_get_args());
    }

    public function get(string $key): mixed
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->get(...\func_get_args());
        }

        return parent::get(...\func_get_args());
    }

    public function getAuth(): mixed
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getAuth(...\func_get_args());
        }

        return parent::getAuth(...\func_get_args());
    }

    public function getBit(string $key, int $idx): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getBit(...\func_get_args());
        }

        return parent::getBit(...\func_get_args());
    }

    public function getEx(string $key, array $options = []): \Redis|bool|string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getEx(...\func_get_args());
        }

        return parent::getEx(...\func_get_args());
    }

    public function getDBNum(): int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getDBNum(...\func_get_args());
        }

        return parent::getDBNum(...\func_get_args());
    }

    public function getDel(string $key): \Redis|bool|string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getDel(...\func_get_args());
        }

        return parent::getDel(...\func_get_args());
    }

    public function getHost(): string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getHost(...\func_get_args());
        }

        return parent::getHost(...\func_get_args());
    }

    public function getLastError(): ?string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getLastError(...\func_get_args());
        }

        return parent::getLastError(...\func_get_args());
    }

    public function getMode(): int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getMode(...\func_get_args());
        }

        return parent::getMode(...\func_get_args());
    }

    public function getOption(int $option): mixed
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getOption(...\func_get_args());
        }

        return parent::getOption(...\func_get_args());
    }

    public function getPersistentID(): ?string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getPersistentID(...\func_get_args());
        }

        return parent::getPersistentID(...\func_get_args());
    }

    public function getPort(): int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getPort(...\func_get_args());
        }

        return parent::getPort(...\func_get_args());
    }

    public function getRange(string $key, int $start, int $end): \Redis|false|string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getRange(...\func_get_args());
        }

        return parent::getRange(...\func_get_args());
    }

    public function lcs(string $key1, string $key2, ?array $options = null): \Redis|array|false|int|string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lcs(...\func_get_args());
        }

        return parent::lcs(...\func_get_args());
    }

    public function getReadTimeout(): float
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getReadTimeout(...\func_get_args());
        }

        return parent::getReadTimeout(...\func_get_args());
    }

    public function getset(string $key, mixed $value): \Redis|false|string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getset(...\func_get_args());
        }

        return parent::getset(...\func_get_args());
    }

    public function getTimeout(): false|float
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getTimeout(...\func_get_args());
        }

        return parent::getTimeout(...\func_get_args());
    }

    public function getTransferredBytes(): array
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getTransferredBytes(...\func_get_args());
        }

        return parent::getTransferredBytes(...\func_get_args());
    }

    public function clearTransferredBytes(): void
    {
        if (isset($this->lazyObjectState)) {
            ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->clearTransferredBytes(...\func_get_args());
        } else {
            parent::clearTransferredBytes(...\func_get_args());
        }
    }

    public function hDel(string $key, string $field, string ...$other_fields): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hDel(...\func_get_args());
        }

        return parent::hDel(...\func_get_args());
    }

    public function hExists(string $key, string $field): \Redis|bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hExists(...\func_get_args());
        }

        return parent::hExists(...\func_get_args());
    }

    public function hGet(string $key, string $member): mixed
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hGet(...\func_get_args());
        }

        return parent::hGet(...\func_get_args());
    }

    public function hGetAll(string $key): \Redis|array|false
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hGetAll(...\func_get_args());
        }

        return parent::hGetAll(...\func_get_args());
    }

    public function hIncrBy(string $key, string $field, int $value): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hIncrBy(...\func_get_args());
        }

        return parent::hIncrBy(...\func_get_args());
    }

    public function hIncrByFloat(string $key, string $field, float $value): \Redis|false|float
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hIncrByFloat(...\func_get_args());
        }

        return parent::hIncrByFloat(...\func_get_args());
    }

    public function hKeys(string $key): \Redis|array|false
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hKeys(...\func_get_args());
        }

        return parent::hKeys(...\func_get_args());
    }

    public function hLen(string $key): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hLen(...\func_get_args());
        }

        return parent::hLen(...\func_get_args());
    }

    public function hMget(string $key, array $fields): \Redis|array|false
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hMget(...\func_get_args());
        }

        return parent::hMget(...\func_get_args());
    }

    public function hMset(string $key, array $fieldvals): \Redis|bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hMset(...\func_get_args());
        }

        return parent::hMset(...\func_get_args());
    }

    public function hRandField(string $key, ?array $options = null): \Redis|array|false|string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hRandField(...\func_get_args());
        }

        return parent::hRandField(...\func_get_args());
    }

    public function hSet(string $key, mixed ...$fields_and_vals): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hSet(...\func_get_args());
        }

        return parent::hSet(...\func_get_args());
    }

    public function hSetNx(string $key, string $field, mixed $value): \Redis|bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hSetNx(...\func_get_args());
        }

        return parent::hSetNx(...\func_get_args());
    }

    public function hStrLen(string $key, string $field): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hStrLen(...\func_get_args());
        }

        return parent::hStrLen(...\func_get_args());
    }

    public function hVals(string $key): \Redis|array|false
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hVals(...\func_get_args());
        }

        return parent::hVals(...\func_get_args());
    }

    public function hscan(string $key, int|null|string &$iterator, ?string $pattern = null, int $count = 0): \Redis|array|bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hscan($key, $iterator, ...\array_slice(\func_get_args(), 2));
        }

        return parent::hscan($key, $iterator, ...\array_slice(\func_get_args(), 2));
    }

    public function incr(string $key, int $by = 1): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->incr(...\func_get_args());
        }

        return parent::incr(...\func_get_args());
    }

    public function incrBy(string $key, int $value): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->incrBy(...\func_get_args());
        }

        return parent::incrBy(...\func_get_args());
    }

    public function incrByFloat(string $key, float $value): \Redis|false|float
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->incrByFloat(...\func_get_args());
        }

        return parent::incrByFloat(...\func_get_args());
    }

    public function info(string ...$sections): \Redis|array|false
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->info(...\func_get_args());
        }

        return parent::info(...\func_get_args());
    }

    public function isConnected(): bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->isConnected(...\func_get_args());
        }

        return parent::isConnected(...\func_get_args());
    }

    public function keys(string $pattern)
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->keys(...\func_get_args());
        }

        return parent::keys(...\func_get_args());
    }

    public function lInsert(string $key, string $pos, mixed $pivot, mixed $value)
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lInsert(...\func_get_args());
        }

        return parent::lInsert(...\func_get_args());
    }

    public function lLen(string $key): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lLen(...\func_get_args());
        }

        return parent::lLen(...\func_get_args());
    }

    public function lMove(string $src, string $dst, string $wherefrom, string $whereto): \Redis|false|string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lMove(...\func_get_args());
        }

        return parent::lMove(...\func_get_args());
    }

    public function blmove(string $src, string $dst, string $wherefrom, string $whereto, float $timeout): \Redis|false|string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->blmove(...\func_get_args());
        }

        return parent::blmove(...\func_get_args());
    }

    public function lPop(string $key, int $count = 0): \Redis|array|bool|string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lPop(...\func_get_args());
        }

        return parent::lPop(...\func_get_args());
    }

    public function lPos(string $key, mixed $value, ?array $options = null): \Redis|array|bool|int|null
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lPos(...\func_get_args());
        }

        return parent::lPos(...\func_get_args());
    }

    public function lPush(string $key, mixed ...$elements): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lPush(...\func_get_args());
        }

        return parent::lPush(...\func_get_args());
    }

    public function rPush(string $key, mixed ...$elements): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->rPush(...\func_get_args());
        }

        return parent::rPush(...\func_get_args());
    }

    public function lPushx(string $key, mixed $value): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lPushx(...\func_get_args());
        }

        return parent::lPushx(...\func_get_args());
    }

    public function rPushx(string $key, mixed $value): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->rPushx(...\func_get_args());
        }

        return parent::rPushx(...\func_get_args());
    }

    public function lSet(string $key, int $index, mixed $value): \Redis|bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lSet(...\func_get_args());
        }

        return parent::lSet(...\func_get_args());
    }

    public function lastSave(): int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lastSave(...\func_get_args());
        }

        return parent::lastSave(...\func_get_args());
    }

    public function lindex(string $key, int $index): mixed
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lindex(...\func_get_args());
        }

        return parent::lindex(...\func_get_args());
    }

    public function lrange(string $key, int $start, int $end): \Redis|array|false
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lrange(...\func_get_args());
        }

        return parent::lrange(...\func_get_args());
    }

    public function lrem(string $key, mixed $value, int $count = 0): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lrem(...\func_get_args());
        }

        return parent::lrem(...\func_get_args());
    }

    public function ltrim(string $key, int $start, int $end): \Redis|bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->ltrim(...\func_get_args());
        }

        return parent::ltrim(...\func_get_args());
    }

    public function mget(array $keys): \Redis|array|false
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->mget(...\func_get_args());
        }

        return parent::mget(...\func_get_args());
    }

    public function migrate(string $host, int $port, array|string $key, int $dstdb, int $timeout, bool $copy = false, bool $replace = false, #[\SensitiveParameter] mixed $credentials = null): \Redis|bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->migrate(...\func_get_args());
        }

        return parent::migrate(...\func_get_args());
    }

    public function move(string $key, int $index): \Redis|bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->move(...\func_get_args());
        }

        return parent::move(...\func_get_args());
    }

    public function mset(array $key_values): \Redis|bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->mset(...\func_get_args());
        }

        return parent::mset(...\func_get_args());
    }

    public function msetnx(array $key_values): \Redis|bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->msetnx(...\func_get_args());
        }

        return parent::msetnx(...\func_get_args());
    }

    public function multi(int $value = \Redis::MULTI): \Redis|bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->multi(...\func_get_args());
        }

        return parent::multi(...\func_get_args());
    }

    public function object(string $subcommand, string $key): \Redis|false|int|string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->object(...\func_get_args());
        }

        return parent::object(...\func_get_args());
    }

    public function open(string $host, int $port = 6379, float $timeout = 0, ?string $persistent_id = null, int $retry_interval = 0, float $read_timeout = 0, ?array $context = null): bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->open(...\func_get_args());
        }

        return parent::open(...\func_get_args());
    }

    public function pconnect(string $host, int $port = 6379, float $timeout = 0, ?string $persistent_id = null, int $retry_interval = 0, float $read_timeout = 0, ?array $context = null): bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->pconnect(...\func_get_args());
        }

        return parent::pconnect(...\func_get_args());
    }

    public function persist(string $key): \Redis|bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->persist(...\func_get_args());
        }

        return parent::persist(...\func_get_args());
    }

    public function pexpire(string $key, int $timeout, ?string $mode = null): bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->pexpire(...\func_get_args());
        }

        return parent::pexpire(...\func_get_args());
    }

    public function pexpireAt(string $key, int $timestamp, ?string $mode = null): \Redis|bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->pexpireAt(...\func_get_args());
        }

        return parent::pexpireAt(...\func_get_args());
    }

    public function pfadd(string $key, array $elements): \Redis|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->pfadd(...\func_get_args());
        }

        return parent::pfadd(...\func_get_args());
    }

    public function pfcount(array|string $key_or_keys): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->pfcount(...\func_get_args());
        }

        return parent::pfcount(...\func_get_args());
    }

    public function pfmerge(string $dst, array $srckeys): \Redis|bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->pfmerge(...\func_get_args());
        }

        return parent::pfmerge(...\func_get_args());
    }

    public function ping(?string $message = null): \Redis|bool|string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->ping(...\func_get_args());
        }

        return parent::ping(...\func_get_args());
    }

    public function pipeline(): \Redis|bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->pipeline(...\func_get_args());
        }

        return parent::pipeline(...\func_get_args());
    }

    public function popen(string $host, int $port = 6379, float $timeout = 0, ?string $persistent_id = null, int $retry_interval = 0, float $read_timeout = 0, ?array $context = null): bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->popen(...\func_get_args());
        }

        return parent::popen(...\func_get_args());
    }

    public function psetex(string $key, int $expire, mixed $value): \Redis|bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->psetex(...\func_get_args());
        }

        return parent::psetex(...\func_get_args());
    }

    public function psubscribe(array $patterns, callable $cb): bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->psubscribe(...\func_get_args());
        }

        return parent::psubscribe(...\func_get_args());
    }

    public function pttl(string $key): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->pttl(...\func_get_args());
        }

        return parent::pttl(...\func_get_args());
    }

    public function publish(string $channel, string $message): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->publish(...\func_get_args());
        }

        return parent::publish(...\func_get_args());
    }

    public function pubsub(string $command, mixed $arg = null): mixed
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->pubsub(...\func_get_args());
        }

        return parent::pubsub(...\func_get_args());
    }

    public function punsubscribe(array $patterns): \Redis|array|bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->punsubscribe(...\func_get_args());
        }

        return parent::punsubscribe(...\func_get_args());
    }

    public function rPop(string $key, int $count = 0): \Redis|array|bool|string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->rPop(...\func_get_args());
        }

        return parent::rPop(...\func_get_args());
    }

    public function randomKey(): \Redis|false|string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->randomKey(...\func_get_args());
        }

        return parent::randomKey(...\func_get_args());
    }

    public function rawcommand(string $command, mixed ...$args): mixed
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->rawcommand(...\func_get_args());
        }

        return parent::rawcommand(...\func_get_args());
    }

    public function rename(string $old_name, string $new_name): \Redis|bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->rename(...\func_get_args());
        }

        return parent::rename(...\func_get_args());
    }

    public function renameNx(string $key_src, string $key_dst): \Redis|bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->renameNx(...\func_get_args());
        }

        return parent::renameNx(...\func_get_args());
    }

    public function reset(): \Redis|bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->reset(...\func_get_args());
        }

        return parent::reset(...\func_get_args());
    }

    public function restore(string $key, int $ttl, string $value, ?array $options = null): \Redis|bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->restore(...\func_get_args());
        }

        return parent::restore(...\func_get_args());
    }

    public function role(): mixed
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->role(...\func_get_args());
        }

        return parent::role(...\func_get_args());
    }

    public function rpoplpush(string $srckey, string $dstkey): \Redis|false|string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->rpoplpush(...\func_get_args());
        }

        return parent::rpoplpush(...\func_get_args());
    }

    public function sAdd(string $key, mixed $value, mixed ...$other_values): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sAdd(...\func_get_args());
        }

        return parent::sAdd(...\func_get_args());
    }

    public function sAddArray(string $key, array $values): int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sAddArray(...\func_get_args());
        }

        return parent::sAddArray(...\func_get_args());
    }

    public function sDiff(string $key, string ...$other_keys): \Redis|array|false
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sDiff(...\func_get_args());
        }

        return parent::sDiff(...\func_get_args());
    }

    public function sDiffStore(string $dst, string $key, string ...$other_keys): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sDiffStore(...\func_get_args());
        }

        return parent::sDiffStore(...\func_get_args());
    }

    public function sInter(array|string $key, string ...$other_keys): \Redis|array|false
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sInter(...\func_get_args());
        }

        return parent::sInter(...\func_get_args());
    }

    public function sintercard(array $keys, int $limit = -1): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sintercard(...\func_get_args());
        }

        return parent::sintercard(...\func_get_args());
    }

    public function sInterStore(array|string $key, string ...$other_keys): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sInterStore(...\func_get_args());
        }

        return parent::sInterStore(...\func_get_args());
    }

    public function sMembers(string $key): \Redis|array|false
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sMembers(...\func_get_args());
        }

        return parent::sMembers(...\func_get_args());
    }

    public function sMisMember(string $key, string $member, string ...$other_members): \Redis|array|false
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sMisMember(...\func_get_args());
        }

        return parent::sMisMember(...\func_get_args());
    }

    public function sMove(string $src, string $dst, mixed $value): \Redis|bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sMove(...\func_get_args());
        }

        return parent::sMove(...\func_get_args());
    }

    public function sPop(string $key, int $count = 0): \Redis|array|false|string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sPop(...\func_get_args());
        }

        return parent::sPop(...\func_get_args());
    }

    public function sRandMember(string $key, int $count = 0): mixed
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sRandMember(...\func_get_args());
        }

        return parent::sRandMember(...\func_get_args());
    }

    public function sUnion(string $key, string ...$other_keys): \Redis|array|false
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sUnion(...\func_get_args());
        }

        return parent::sUnion(...\func_get_args());
    }

    public function sUnionStore(string $dst, string $key, string ...$other_keys): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sUnionStore(...\func_get_args());
        }

        return parent::sUnionStore(...\func_get_args());
    }

    public function save(): \Redis|bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->save(...\func_get_args());
        }

        return parent::save(...\func_get_args());
    }

    public function scan(int|null|string &$iterator, ?string $pattern = null, int $count = 0, ?string $type = null): array|false
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->scan($iterator, ...\array_slice(\func_get_args(), 1));
        }

        return parent::scan($iterator, ...\array_slice(\func_get_args(), 1));
    }

    public function scard(string $key): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->scard(...\func_get_args());
        }

        return parent::scard(...\func_get_args());
    }

    public function script(string $command, mixed ...$args): mixed
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->script(...\func_get_args());
        }

        return parent::script(...\func_get_args());
    }

    public function select(int $db): \Redis|bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->select(...\func_get_args());
        }

        return parent::select(...\func_get_args());
    }

    public function set(string $key, mixed $value, mixed $options = null): \Redis|bool|string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->set(...\func_get_args());
        }

        return parent::set(...\func_get_args());
    }

    public function setBit(string $key, int $idx, bool $value): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->setBit(...\func_get_args());
        }

        return parent::setBit(...\func_get_args());
    }

    public function setRange(string $key, int $index, string $value): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->setRange(...\func_get_args());
        }

        return parent::setRange(...\func_get_args());
    }

    public function setOption(int $option, mixed $value): bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->setOption(...\func_get_args());
        }

        return parent::setOption(...\func_get_args());
    }

    public function setex(string $key, int $expire, mixed $value)
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->setex(...\func_get_args());
        }

        return parent::setex(...\func_get_args());
    }

    public function setnx(string $key, mixed $value): \Redis|bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->setnx(...\func_get_args());
        }

        return parent::setnx(...\func_get_args());
    }

    public function sismember(string $key, mixed $value): \Redis|bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sismember(...\func_get_args());
        }

        return parent::sismember(...\func_get_args());
    }

    public function slaveof(?string $host = null, int $port = 6379): \Redis|bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->slaveof(...\func_get_args());
        }

        return parent::slaveof(...\func_get_args());
    }

    public function replicaof(?string $host = null, int $port = 6379): \Redis|bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->replicaof(...\func_get_args());
        }

        return parent::replicaof(...\func_get_args());
    }

    public function touch(array|string $key_or_array, string ...$more_keys): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->touch(...\func_get_args());
        }

        return parent::touch(...\func_get_args());
    }

    public function slowlog(string $operation, int $length = 0): mixed
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->slowlog(...\func_get_args());
        }

        return parent::slowlog(...\func_get_args());
    }

    public function sort(string $key, ?array $options = null): mixed
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sort(...\func_get_args());
        }

        return parent::sort(...\func_get_args());
    }

    public function sort_ro(string $key, ?array $options = null): mixed
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sort_ro(...\func_get_args());
        }

        return parent::sort_ro(...\func_get_args());
    }

    public function sortAsc(string $key, ?string $pattern = null, mixed $get = null, int $offset = -1, int $count = -1, ?string $store = null): array
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sortAsc(...\func_get_args());
        }

        return parent::sortAsc(...\func_get_args());
    }

    public function sortAscAlpha(string $key, ?string $pattern = null, mixed $get = null, int $offset = -1, int $count = -1, ?string $store = null): array
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sortAscAlpha(...\func_get_args());
        }

        return parent::sortAscAlpha(...\func_get_args());
    }

    public function sortDesc(string $key, ?string $pattern = null, mixed $get = null, int $offset = -1, int $count = -1, ?string $store = null): array
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sortDesc(...\func_get_args());
        }

        return parent::sortDesc(...\func_get_args());
    }

    public function sortDescAlpha(string $key, ?string $pattern = null, mixed $get = null, int $offset = -1, int $count = -1, ?string $store = null): array
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sortDescAlpha(...\func_get_args());
        }

        return parent::sortDescAlpha(...\func_get_args());
    }

    public function srem(string $key, mixed $value, mixed ...$other_values): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->srem(...\func_get_args());
        }

        return parent::srem(...\func_get_args());
    }

    public function sscan(string $key, int|null|string &$iterator, ?string $pattern = null, int $count = 0): array|false
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sscan($key, $iterator, ...\array_slice(\func_get_args(), 2));
        }

        return parent::sscan($key, $iterator, ...\array_slice(\func_get_args(), 2));
    }

    public function ssubscribe(array $channels, callable $cb): bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->ssubscribe(...\func_get_args());
        }

        return parent::ssubscribe(...\func_get_args());
    }

    public function strlen(string $key): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->strlen(...\func_get_args());
        }

        return parent::strlen(...\func_get_args());
    }

    public function subscribe(array $channels, callable $cb): bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->subscribe(...\func_get_args());
        }

        return parent::subscribe(...\func_get_args());
    }

    public function sunsubscribe(array $channels): \Redis|array|bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sunsubscribe(...\func_get_args());
        }

        return parent::sunsubscribe(...\func_get_args());
    }

    public function swapdb(int $src, int $dst): \Redis|bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->swapdb(...\func_get_args());
        }

        return parent::swapdb(...\func_get_args());
    }

    public function time(): \Redis|array
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->time(...\func_get_args());
        }

        return parent::time(...\func_get_args());
    }

    public function ttl(string $key): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->ttl(...\func_get_args());
        }

        return parent::ttl(...\func_get_args());
    }

    public function type(string $key): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->type(...\func_get_args());
        }

        return parent::type(...\func_get_args());
    }

    public function unlink(array|string $key, string ...$other_keys): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->unlink(...\func_get_args());
        }

        return parent::unlink(...\func_get_args());
    }

    public function unsubscribe(array $channels): \Redis|array|bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->unsubscribe(...\func_get_args());
        }

        return parent::unsubscribe(...\func_get_args());
    }

    public function unwatch(): \Redis|bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->unwatch(...\func_get_args());
        }

        return parent::unwatch(...\func_get_args());
    }

    public function watch(array|string $key, string ...$other_keys): \Redis|bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->watch(...\func_get_args());
        }

        return parent::watch(...\func_get_args());
    }

    public function wait(int $numreplicas, int $timeout): false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->wait(...\func_get_args());
        }

        return parent::wait(...\func_get_args());
    }

    public function xack(string $key, string $group, array $ids): false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xack(...\func_get_args());
        }

        return parent::xack(...\func_get_args());
    }

    public function xadd(string $key, string $id, array $values, int $maxlen = 0, bool $approx = false, bool $nomkstream = false): \Redis|false|string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xadd(...\func_get_args());
        }

        return parent::xadd(...\func_get_args());
    }

    public function xautoclaim(string $key, string $group, string $consumer, int $min_idle, string $start, int $count = -1, bool $justid = false): \Redis|array|bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xautoclaim(...\func_get_args());
        }

        return parent::xautoclaim(...\func_get_args());
    }

    public function xclaim(string $key, string $group, string $consumer, int $min_idle, array $ids, array $options): \Redis|array|bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xclaim(...\func_get_args());
        }

        return parent::xclaim(...\func_get_args());
    }

    public function xdel(string $key, array $ids): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xdel(...\func_get_args());
        }

        return parent::xdel(...\func_get_args());
    }

    public function xgroup(string $operation, ?string $key = null, ?string $group = null, ?string $id_or_consumer = null, bool $mkstream = false, int $entries_read = -2): mixed
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xgroup(...\func_get_args());
        }

        return parent::xgroup(...\func_get_args());
    }

    public function xinfo(string $operation, ?string $arg1 = null, ?string $arg2 = null, int $count = -1): mixed
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xinfo(...\func_get_args());
        }

        return parent::xinfo(...\func_get_args());
    }

    public function xlen(string $key): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xlen(...\func_get_args());
        }

        return parent::xlen(...\func_get_args());
    }

    public function xpending(string $key, string $group, ?string $start = null, ?string $end = null, int $count = -1, ?string $consumer = null): \Redis|array|false
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xpending(...\func_get_args());
        }

        return parent::xpending(...\func_get_args());
    }

    public function xrange(string $key, string $start, string $end, int $count = -1): \Redis|array|bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xrange(...\func_get_args());
        }

        return parent::xrange(...\func_get_args());
    }

    public function xread(array $streams, int $count = -1, int $block = -1): \Redis|array|bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xread(...\func_get_args());
        }

        return parent::xread(...\func_get_args());
    }

    public function xreadgroup(string $group, string $consumer, array $streams, int $count = 1, int $block = 1): \Redis|array|bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xreadgroup(...\func_get_args());
        }

        return parent::xreadgroup(...\func_get_args());
    }

    public function xrevrange(string $key, string $end, string $start, int $count = -1): \Redis|array|bool
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xrevrange(...\func_get_args());
        }

        return parent::xrevrange(...\func_get_args());
    }

    public function xtrim(string $key, string $threshold, bool $approx = false, bool $minid = false, int $limit = -1): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xtrim(...\func_get_args());
        }

        return parent::xtrim(...\func_get_args());
    }

    public function zAdd(string $key, array|float $score_or_options, mixed ...$more_scores_and_mems): \Redis|false|float|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zAdd(...\func_get_args());
        }

        return parent::zAdd(...\func_get_args());
    }

    public function zCard(string $key): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zCard(...\func_get_args());
        }

        return parent::zCard(...\func_get_args());
    }

    public function zCount(string $key, int|string $start, int|string $end): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zCount(...\func_get_args());
        }

        return parent::zCount(...\func_get_args());
    }

    public function zIncrBy(string $key, float $value, mixed $member): \Redis|false|float
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zIncrBy(...\func_get_args());
        }

        return parent::zIncrBy(...\func_get_args());
    }

    public function zLexCount(string $key, string $min, string $max): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zLexCount(...\func_get_args());
        }

        return parent::zLexCount(...\func_get_args());
    }

    public function zMscore(string $key, mixed $member, mixed ...$other_members): \Redis|array|false
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zMscore(...\func_get_args());
        }

        return parent::zMscore(...\func_get_args());
    }

    public function zPopMax(string $key, ?int $count = null): \Redis|array|false
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zPopMax(...\func_get_args());
        }

        return parent::zPopMax(...\func_get_args());
    }

    public function zPopMin(string $key, ?int $count = null): \Redis|array|false
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zPopMin(...\func_get_args());
        }

        return parent::zPopMin(...\func_get_args());
    }

    public function zRange(string $key, int|string $start, int|string $end, array|bool|null $options = null): \Redis|array|false
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zRange(...\func_get_args());
        }

        return parent::zRange(...\func_get_args());
    }

    public function zRangeByLex(string $key, string $min, string $max, int $offset = -1, int $count = -1): \Redis|array|false
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zRangeByLex(...\func_get_args());
        }

        return parent::zRangeByLex(...\func_get_args());
    }

    public function zRangeByScore(string $key, string $start, string $end, array $options = []): \Redis|array|false
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zRangeByScore(...\func_get_args());
        }

        return parent::zRangeByScore(...\func_get_args());
    }

    public function zrangestore(string $dstkey, string $srckey, string $start, string $end, array|bool|null $options = null): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zrangestore(...\func_get_args());
        }

        return parent::zrangestore(...\func_get_args());
    }

    public function zRandMember(string $key, ?array $options = null): \Redis|array|string
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zRandMember(...\func_get_args());
        }

        return parent::zRandMember(...\func_get_args());
    }

    public function zRank(string $key, mixed $member): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zRank(...\func_get_args());
        }

        return parent::zRank(...\func_get_args());
    }

    public function zRem(mixed $key, mixed $member, mixed ...$other_members): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zRem(...\func_get_args());
        }

        return parent::zRem(...\func_get_args());
    }

    public function zRemRangeByLex(string $key, string $min, string $max): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zRemRangeByLex(...\func_get_args());
        }

        return parent::zRemRangeByLex(...\func_get_args());
    }

    public function zRemRangeByRank(string $key, int $start, int $end): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zRemRangeByRank(...\func_get_args());
        }

        return parent::zRemRangeByRank(...\func_get_args());
    }

    public function zRemRangeByScore(string $key, string $start, string $end): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zRemRangeByScore(...\func_get_args());
        }

        return parent::zRemRangeByScore(...\func_get_args());
    }

    public function zRevRange(string $key, int $start, int $end, mixed $scores = null): \Redis|array|false
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zRevRange(...\func_get_args());
        }

        return parent::zRevRange(...\func_get_args());
    }

    public function zRevRangeByLex(string $key, string $max, string $min, int $offset = -1, int $count = -1): \Redis|array|false
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zRevRangeByLex(...\func_get_args());
        }

        return parent::zRevRangeByLex(...\func_get_args());
    }

    public function zRevRangeByScore(string $key, string $max, string $min, array|bool $options = []): \Redis|array|false
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zRevRangeByScore(...\func_get_args());
        }

        return parent::zRevRangeByScore(...\func_get_args());
    }

    public function zRevRank(string $key, mixed $member): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zRevRank(...\func_get_args());
        }

        return parent::zRevRank(...\func_get_args());
    }

    public function zScore(string $key, mixed $member): \Redis|false|float
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zScore(...\func_get_args());
        }

        return parent::zScore(...\func_get_args());
    }

    public function zdiff(array $keys, ?array $options = null): \Redis|array|false
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zdiff(...\func_get_args());
        }

        return parent::zdiff(...\func_get_args());
    }

    public function zdiffstore(string $dst, array $keys): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zdiffstore(...\func_get_args());
        }

        return parent::zdiffstore(...\func_get_args());
    }

    public function zinter(array $keys, ?array $weights = null, ?array $options = null): \Redis|array|false
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zinter(...\func_get_args());
        }

        return parent::zinter(...\func_get_args());
    }

    public function zintercard(array $keys, int $limit = -1): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zintercard(...\func_get_args());
        }

        return parent::zintercard(...\func_get_args());
    }

    public function zinterstore(string $dst, array $keys, ?array $weights = null, ?string $aggregate = null): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zinterstore(...\func_get_args());
        }

        return parent::zinterstore(...\func_get_args());
    }

    public function zscan(string $key, int|null|string &$iterator, ?string $pattern = null, int $count = 0): \Redis|array|false
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zscan($key, $iterator, ...\array_slice(\func_get_args(), 2));
        }

        return parent::zscan($key, $iterator, ...\array_slice(\func_get_args(), 2));
    }

    public function zunion(array $keys, ?array $weights = null, ?array $options = null): \Redis|array|false
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zunion(...\func_get_args());
        }

        return parent::zunion(...\func_get_args());
    }

    public function zunionstore(string $dst, array $keys, ?array $weights = null, ?string $aggregate = null): \Redis|false|int
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zunionstore(...\func_get_args());
        }

        return parent::zunionstore(...\func_get_args());
    }
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('RedisProxy1d553d7', false)) {
    \class_alias(__NAMESPACE__.'\\RedisProxy1d553d7', 'RedisProxy1d553d7', false);
}
