<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;
use function Revonia\ThrowExceptionBlog\env;

$dotenv = new Dotenv(__DIR__ . '/../');
$dotenv->overload();


$services = [
    'cnblogs' => \Revonia\ThrowExceptionBlog\Services\CnBlogs::class
];

$builder = new DI\ContainerBuilder();

$k = env('ENABLED_SERVICES');

array_map(function ($service) use ($services) {
    $boot = [$services[$service], 'boot'];
    if (is_callable($boot)) {
        $boot();
    }
}, explode(',', env('ENABLED_SERVICES')));

$a = 1;
