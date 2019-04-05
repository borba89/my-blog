<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'jms_serializer.metadata_driver' shared service.

include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Driver/DriverInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/Metadata/Driver/AbstractDoctrineTypeDriver.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/Metadata/Driver/DoctrineTypeDriver.php';
include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Driver/AdvancedDriverInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Driver/DriverChain.php';
include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Driver/AbstractFileDriver.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/Metadata/Driver/ExpressionMetadataTrait.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/Metadata/Driver/YamlDriver.php';
include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Driver/FileLocatorInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Driver/AdvancedFileLocatorInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Driver/FileLocator.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/Naming/PropertyNamingStrategyInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/Naming/SerializedNameAnnotationStrategy.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/Naming/CamelCaseNamingStrategy.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/Metadata/Driver/XmlDriver.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/Metadata/Driver/AnnotationDriver.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/Type/ParserInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/Type/Parser.php';

$a = new \Metadata\Driver\FileLocator(array('Sonata\\DatagridBundle' => ($this->targetDirs[3].'/vendor/sonata-project/datagrid-bundle/src/Resources/config/serializer'), 'Sonata\\BlockBundle' => ($this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Resources/config/serializer')));
$b = new \JMS\Serializer\Naming\SerializedNameAnnotationStrategy(new \JMS\Serializer\Naming\CamelCaseNamingStrategy('_', true));
$c = ($this->privates['jms_serializer.type_parser'] ?? ($this->privates['jms_serializer.type_parser'] = new \JMS\Serializer\Type\Parser()));

return $this->services['jms_serializer.metadata_driver'] = new \JMS\Serializer\Metadata\Driver\DoctrineTypeDriver(new \Metadata\Driver\DriverChain(array(0 => new \JMS\Serializer\Metadata\Driver\YamlDriver($a, $b, $c), 1 => new \JMS\Serializer\Metadata\Driver\XmlDriver($a, $b, $c), 2 => new \JMS\Serializer\Metadata\Driver\AnnotationDriver(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()), $b, $c))), ($this->services['doctrine'] ?? $this->getDoctrineService()));
