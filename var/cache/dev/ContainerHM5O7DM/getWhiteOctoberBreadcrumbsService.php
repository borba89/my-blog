<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'white_october_breadcrumbs' shared service.

include_once $this->targetDirs[3].'/vendor/whiteoctober/breadcrumbs-bundle/WhiteOctober/BreadcrumbsBundle/Model/Breadcrumbs.php';

$this->services['white_october_breadcrumbs'] = $instance = new \WhiteOctober\BreadcrumbsBundle\Model\Breadcrumbs();

$instance->setRouter(($this->services['router'] ?? $this->getRouterService()));

return $instance;
