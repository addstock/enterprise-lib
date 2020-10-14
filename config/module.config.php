<?php

namespace EnterpriseLib;

return [
    'EnterpriseLib' => [
        // 'array_mapper_path' => 'path/to/PHP/file/returning/array.php',
    ],
    'service_manager' => [
        'aliases' => [
            Mapper::class => ArrayMapper::class,

            // Legacy Zend Framework aliases
        ],
        'factories' => [
            ArrayMapper::class        => ArrayMapperFactory::class,
            TableGatewayMapper::class => TableGatewayMapperFactory::class,
            TableGateway::class       => TableGatewayFactory::class,
        ],
    ],
    'doctrine' => [
        'driver' => [
            // defines an annotation driver with two paths, and names it `my_annotation_driver`
            'my_annotation_driver' => [
                'class' => \Doctrine\ORM\Mapping\Driver\AnnotationDriver::class,
                'cache' => 'array',
                'paths' => [
                    __DIR__ . '/../src/Entity',
                ],
            ],
            // default metadata driver, aggregates all other drivers into a single one.
            // Override `orm_default` only if you know what you're doing
            'orm_default' => [
                'drivers' => [
                    // register `my_annotation_driver` for any entity under namespace `My\Namespace`
                    'Entity' => 'my_annotation_driver'
                ],
            ],
        ],
        'connection_params' => [
            'user' => '',
            'password' => '',
            'host' => '',
            'port' => '',
            'dbname' => '',
        ],
    ],
];
