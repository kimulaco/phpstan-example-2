<?php
namespace App\Core;

class Cache
{
    private \Memcached $_cache;

    public function __construct()
    {
        if (class_exists('\Memcached') === false) {
            throw new \Exception('Memcached is not installed.');
        }

        $this->_cache = new \Memcached();
        $this->_cache->addServer('memcached', 11211);
    }

    public function set(string $key, string $value): void
    {
        $this->_cache->set($key, $value);
    }

    public function get(string $key): void
    {
        echo $this->_cache->get($key);
    }
}