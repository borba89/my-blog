class AppKernel extends Kernel
{
public function registerBundles()
{
$bundles = [
// ...

new Knp\Bundle\PaginatorBundle\KnpPaginatorBundle(),
new EightPoints\Bundle\GuzzleBundle\EightPointsGuzzleBundle(),
];

// ...
}

// ...
}
