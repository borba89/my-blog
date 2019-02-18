<?php
/**
 * Created by PhpStorm.
 * User: boris
 * Date: 26.12.18
 * Time: 19:57
 */

namespace App\Twig;

use App\Twig\AppRuntime;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class AppExtension extends AbstractExtension
{
    public function getFilters()
    {
        return array(
            // the logic of this filter is now implemented in a different class
            new TwigFilter('price', array(AppRuntime::class, 'priceFilter')),
        );
    }
}