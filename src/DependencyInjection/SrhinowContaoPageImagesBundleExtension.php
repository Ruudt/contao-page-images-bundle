<?php

/**
 * @copyright  Ruud Walraven 2013-2018
 * @author     Ruud Walraven <ruud.walraven@gmail.com>
 * @author     Sven Rhinow
 * @package    contao-page-images-bundle
 * @license    GPL-3.0+
 *
 */

namespace Srhinow\ContaoPageImagesBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

/**
 * Adds the bundle services to the container.
 */
class SrhinowContaoPageImagesBundleExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $mergedConfig, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader(
            $container,
            new FileLocator(__DIR__.'/../Resources/config')
        );

        $loader->load('services.yml');
;
    }
}
