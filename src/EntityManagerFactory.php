<?php
namespace EnterpriseLib;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

/**
 *
 */
class EntityManagerFactory
{
	public function __invoke($services)
    {
    	$paths = array("/path/to/entity-files");
		$isDevMode = false;

		// the connection configuration
		$dbParams = array(
		    'driver'   => 'pdo_mysql',
		    'user'     => 'root',
		    'password' => '',
		    'dbname'   => 'foo',
		);

		$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);

		return EntityManager::create($dbParams, $config);
    }
}
