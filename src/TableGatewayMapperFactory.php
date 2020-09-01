<?php

/**
 * @see       https://github.com/laminas-api-tools/EnterpriseLib-example for the canonical source repository
 * @copyright https://github.com/laminas-api-tools/EnterpriseLib-example/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas-api-tools/EnterpriseLib-example/blob/master/LICENSE.md New BSD License
 */

namespace EnterpriseLib;

use DomainException;

/**
 * Service factory for returning a EnterpriseLib\TableGatewayMapper instance.
 *
 * Requires the EnterpriseLib\TableGateway service be present in the service locator.
 */
class TableGatewayMapperFactory
{
    public function __invoke($services)
    {
        if (! $services->has('EnterpriseLib\TableGateway')) {
            throw new DomainException(sprintf(
                'Cannot create %s; missing %s dependency',
                TableGatewayMapper::class,
                TableGateway::class
            ));
        }
        return new TableGatewayMapper($services->get(TableGateway::class));
    }
}
