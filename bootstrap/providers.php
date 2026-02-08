<?php

$providers = require(var_path('providers/index.php'));

return array_merge([
    App\Providers\AppServiceProvider::class,
    App\Providers\AuthServiceProvider::class,
    App\Providers\FFMpegServiceProvider::class,
    App\Providers\FileStorageDisksProvider::class,
    App\Providers\HorizonServiceProvider::class,
    App\Providers\ViewServiceProvider::class,
    App\Providers\FileStorageDisksProvider::class,
], $providers);
