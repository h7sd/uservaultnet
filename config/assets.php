<?php

$fonts = require(var_path('config/assets/fonts.php'));

return [
    'watermark' => [
        'local_path' => public_path('assets/watermark.png'),
        'position' => 'absolute',
        'y' => 30,
        'x' => 30
    ],
    'fonts' => $fonts,
];
