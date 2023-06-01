<?php
namespace Lubed\Caches;

interface CacheHandler {
    public function fetch(string $name, &$result);

    public function store(string $name, $value);

    public function flush();

    public function remove(string $name);
}