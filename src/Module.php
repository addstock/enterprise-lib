<?php

/**
 * @see       https://github.com/laminas-api-tools/EnterpriseLib-example for the canonical source repository
 * @copyright https://github.com/laminas-api-tools/EnterpriseLib-example/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas-api-tools/EnterpriseLib-example/blob/master/LICENSE.md New BSD License
 */

namespace EnterpriseLib;

/**
 * Laminas module
 */
class Module
{
    /**
     * @return array
     */
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
}
