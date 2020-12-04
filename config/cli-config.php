<?php

use Doctrine\ORM\Tools\Console\ConsoleRunner;

require_once './src/database/bootstrap.php';

return ConsoleRunner::createHelperSet($entityManager);
