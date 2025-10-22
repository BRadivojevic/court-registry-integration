<?php
require __DIR__.'/../vendor/autoload.php';
$base = getenv('REGISTRY_BASE_URL') ?: 'https://registry.example/api';
$cli = new App\Registry\Client($base);
print_r($cli->company('080000000'));
