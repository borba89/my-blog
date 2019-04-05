<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'fos_elastica.pager_persister_registry' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/elastica-bundle/src/Persister/PagerPersisterRegistry.php';

$this->services['fos_elastica.pager_persister_registry'] = $instance = new \FOS\ElasticaBundle\Persister\PagerPersisterRegistry(array('in_place' => 'fos_elastica.in_place_pager_persister'));

$instance->setContainer($this);

return $instance;
