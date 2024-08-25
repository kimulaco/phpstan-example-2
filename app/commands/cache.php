<?php
require_once __DIR__ . '/../core/cache.php';

use App\Core\Cache;

$cache = new Cache();

$type = $argv[1] ?? null;
$key = $argv[2] ?? null;
$value = $argv[3] ?? null;

if (empty($type)) {
    throw new Exception('Required $type.');
}
if (in_array($type, ['set', 'get']) === false) {
    throw new Exception('Invalid $type. Required "set" or "get".');
}

if (empty($key)) {
    throw new Exception('Required $key.');
}

if ($type == 'set') {
    $cache->set($key, $value);
} else if ($type == 'get') {
    $cache->get($key);
}
