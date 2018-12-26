<?php

/**
 * @copyright  Ruud Walraven 2013-2018
 * @author     Ruud Walraven <ruud.walraven@gmail.com>
 * @author     Sven Rhinow
 * @package    contao-page-images-bundle
 * @license    GPL-3.0+
 *
 */

namespace Srhinow\ContaoPageImagesBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class SrhinowContaoPageImagesBundle extends Bundle
{
    /**
     * Builds the bundle.
     *
     * It is only ever called once when the cache is empty.
     *
     * This method can be overridden to register compilation passes,
     * other extensions, ...
     *
     * @param ContainerBuilder $container A ContainerBuilder instance
     */
    public function build(ContainerBuilder $container)
    {
    }
}
