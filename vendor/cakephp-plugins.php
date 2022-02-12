<?php
$baseDir = dirname(dirname(__FILE__));
return [
    'plugins' => [
        'Bake' => $baseDir . '/vendor/cakephp/bake/',
        'BootstrapUI' => $baseDir . '/plugins/BootstrapUI/',
        'Cewi/Excel' => $baseDir . '/vendor/Cewi/Excel/',
        'Customers' => $baseDir . '/plugins/Customers/',
        'DebugKit' => $baseDir . '/vendor/cakephp/debug_kit/',
        'Migrations' => $baseDir . '/vendor/cakephp/migrations/',
        'Queue' => $baseDir . '/plugins/Queue/',
        'Usermgmt' => $baseDir . '/plugins/Usermgmt/',
        'Xety/Cake3Upload' => $baseDir . '/vendor/xety/cake3-upload/'
    ]
];