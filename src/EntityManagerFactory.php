<?php
namespace EnterpriseLib;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

use DomainException;

/**
 * This factory gets the EntityManager as a object.
 */
class EntityManagerFactory
{
    public function __invoke($services)
    {
        if (! $services->has('config')) {
            throw new DomainException('The config service is necessary and that\'s is unable');
        }

        $config = $services->get('config');

        if (! isset($config['doctrine']['driver']['my_annotation_driver']['paths'])) {
            throw new DomainException('The config property is necessary and that\'s is unable');
        }

        $paths = $config['doctrine']['driver']['my_annotation_driver']['paths'];
        $isDevMode = $config['doctrine']['driver']['isDevMode'];

        // the connection configuration
        $dbParams = $config['doctrine']['connection_params'];

        $config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);

        return EntityManager::create($dbParams, $config);
    }
}
