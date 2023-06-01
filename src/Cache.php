<?php
namespace Lubed\Caches;
interface Cache {
    public function getInstance(?array $params=NULL);
}