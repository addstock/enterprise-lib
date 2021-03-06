<?php

/**
 * @see       https://github.com/laminas-api-tools/EnterpriseLib-example for the canonical source repository
 * @copyright https://github.com/laminas-api-tools/EnterpriseLib-example/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas-api-tools/EnterpriseLib-example/blob/master/LICENSE.md New BSD License
 */

namespace EnterpriseLib;

use Laminas\Db\Adapter\AdapterInterface;
use Laminas\Db\ResultSet\HydratingResultSet;
use Laminas\Db\TableGateway\TableGateway as LaminasTableGateway;
use Laminas\Hydrator\ObjectProperty;
use Laminas\Hydrator\ObjectPropertyHydrator;

/**
 * Custom TableGateway instance for EnterpriseLib
 *
 * Creates a HydratingResultSet seeded with an ObjectProperty hydrator and Entity instance.
 */
class TableGateway extends LaminasTableGateway
{
    public function __construct($table, AdapterInterface $adapter, $features = null)
    {
        $hydratorClass = class_exists(ObjectPropertyHydrator::class)
            ? ObjectPropertyHydrator::class
            : ObjectPropertyHydrator::class;
        $resultSet = new HydratingResultSet(new $hydratorClass(), new Entity());
        return parent::__construct($table, $adapter, $features, $resultSet);
    }
}
