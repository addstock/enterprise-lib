<?php

namespace EnterpriseLib;

use DomainException;

/**
 * Service factory for the EnterpriseLib TableGateway
 *
 * If the "EnterpriseLib" key is present, and either the "db" or "table" subkeys
 * are present and valid, uses those; otherwise, uses defaults of "Db\EnterpriseLib"
 * and "status", respectively.
 *
 * If the DB service does not exist, raises an error.
 *
 * Otherwise, creates a TableGateway instance with the DB service and table.
 */
class TableGatewayFactory
{
    public function __invoke($services)
    {
        $db    = 'Db\EnterpriseLib';
        $table = 'status';
        if ($services->has('config')) {
            $config = $services->get('config');
            if (isset($config['EnterpriseLib'])) {
                $config = $config['EnterpriseLib'];
                $db     = isset($config['db']) ? $config['db'] : $db;
                $table  = isset($config['table']) ? $config['table'] : $table;
            }
        }

        if (! $services->has($db)) {
            throw new DomainException(sprintf(
                'Unable to create %s due to missing "%s" service',
                TableGateway::class,
                $db
            ));
        }

        return new TableGateway($table, $services->get($db));
    }
}
 +b