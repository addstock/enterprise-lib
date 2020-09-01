<?php

/**
 * @see       https://github.com/laminas-api-tools/EnterpriseLib-example for the canonical source repository
 * @copyright https://github.com/laminas-api-tools/EnterpriseLib-example/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas-api-tools/EnterpriseLib-example/blob/master/LICENSE.md New BSD License
 */

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
];
