<?php

namespace EnterpriseLib;

use DomainException;

/**
 * Factory to create the TableGatewayMapper.
 */
class TableGatewayMapperFactory
{
    public function __invoke($services)
    {
        if (! $services->has(TableGateway::class)) {
            throw new DomainException(sprintf(
                'Cannot create %s; missing %s dependency',
                TableGatewayMapper::class,
                TableGateway::class
            ));
        }

        return new TableGatewayMapper($services->get(TableGateway::class));
    }
}
