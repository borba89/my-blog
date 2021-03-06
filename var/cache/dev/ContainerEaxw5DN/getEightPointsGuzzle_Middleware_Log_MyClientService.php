<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'eight_points_guzzle.middleware.log.my_client' shared service.

include_once $this->targetDirs[3].'/vendor/eightpoints/guzzle-bundle/src/Middleware/LogMiddleware.php';
include_once $this->targetDirs[3].'/vendor/guzzlehttp/guzzle/src/MessageFormatter.php';

return $this->services['eight_points_guzzle.middleware.log.my_client'] = new \EightPoints\Bundle\GuzzleBundle\Middleware\LogMiddleware(($this->services['eight_points_guzzle.logger'] ?? ($this->services['eight_points_guzzle.logger'] = new \EightPoints\Bundle\GuzzleBundle\Log\Logger())), ($this->services['eight_points_guzzle.formatter'] ?? ($this->services['eight_points_guzzle.formatter'] = new \GuzzleHttp\MessageFormatter())));
