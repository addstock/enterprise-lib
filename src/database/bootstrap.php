<?php
// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once __DIR__ . "/../../vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
$doctrine_type_mappings = [
                'enum' => 'string',
                'status_options' => 'string',
            ];
$config = Setup::createAnnotationMetadataConfiguration([__DIR__ . "/../Entity"], $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);

// database configuration parameters
$conn = [
    'driver' => 'pdo_pgsql',
    'user' => 'addstockuser',
    'password' => 'MirCamFix',
    'host' => 'localhost',
    'port' => '5432',
    'dbname' => 'addstockdb',
];

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);
