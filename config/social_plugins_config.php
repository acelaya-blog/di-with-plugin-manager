<?php
use Acelaya\Social\Connector;

return [
    'factories' => [
        'facebook' => Connector\FacebookConnectorFactory::class,
        'twitter' => Connector\TwitterConnectorFactory::class,
        'linkedin' => Connector\LinkedinConnectorFactory::class,
    ]
];
