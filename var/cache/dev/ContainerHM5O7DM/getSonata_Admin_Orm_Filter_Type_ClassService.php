<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.admin.orm.filter.type.class' service.

include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Filter/FilterInterface.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Filter/Filter.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Filter/Filter.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Filter/ClassFilter.php';

$this->factories['sonata.admin.orm.filter.type.class'] = function () {
    return new \Sonata\DoctrineORMAdminBundle\Filter\ClassFilter();
};

return $this->factories['sonata.admin.orm.filter.type.class']();
