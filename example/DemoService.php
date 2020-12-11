<?php
declare(strict_types=1);

namespace Demo;

use DocDoc\SymfonyDiLoader\CacheWatcher;

class DemoService
{
    /** @required-own */
    protected CacheWatcher $watcher;
}