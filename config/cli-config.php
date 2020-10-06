<?php

use Doctrine\ORM\Tools\Console\ConsoleRunner;

require_once __DIR__ . '/../src/database/bootstrap.php';

return ConsoleRunner::createHelperSet($entityManager);
