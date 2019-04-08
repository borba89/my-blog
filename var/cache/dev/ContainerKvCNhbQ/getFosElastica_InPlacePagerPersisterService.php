<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'fos_elastica.in_place_pager_persister' shared service.

include_once $this->targetDirs[3].'/vendor/friendsofsymfony/elastica-bundle/src/Persister/PagerPersisterInterface.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/elastica-bundle/src/Persister/InPlacePagerPersister.php';

return $this->services['fos_elastica.in_place_pager_persister'] = new \FOS\ElasticaBundle\Persister\InPlacePagerPersister(($this->services['fos_elastica.persister_registry'] ?? $this->load('getFosElastica_PersisterRegistryService.php')), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));