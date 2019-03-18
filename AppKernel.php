<?php
class AppKernel extends Kernel
{
public function registerBundles()
{
$bundles = [
// ...

new Knp\Bundle\PaginatorBundle\KnpPaginatorBundle(),
new EightPoints\Bundle\GuzzleBundle\EightPointsGuzzleBundle(),
new FOS\RestBundle\FOSRestBundle(),
new JMS\SerializerBundle\JMSSerializerBundle(),
new Nelmio\ApiDocBundle\NelmioApiDocBundle(),
];

// ...
}

// ...
}
