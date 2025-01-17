<?php

namespace App\Service;

use Predis\Client as Redis;

class PredisService
{
    private Redis $redis;

    public function __construct(Redis $redis)
    {
        $this->redis = $redis;
    }

    public function incrementClick(string $key): int
    {
        return $this->redis->incr($key);
    }

    public function getClick(string $key): int
    {
        return $this->redis->get($key) ?: 0;
    }
}
