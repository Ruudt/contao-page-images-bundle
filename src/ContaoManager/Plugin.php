<?php

/**
 * @copyright  Ruud Walraven 2013-2018
 * @author     Ruud Walraven <ruud.walraven@gmail.com>
 * @author     Sven Rhinow
 * @package    contao-page-images-bundle
 * @license    GPL-3.0+
 *
 */

namespace Srhinow\ContaoPageImagesBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

use Srhinow\ContaoPageImagesBundle\SrhinowContaoPageImagesBundle;

/**
 * Plugin for the Contao Manager.
 *
 * @author Sven Rhinow
 */
class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(SrhinowContaoPageImagesBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class])
        ];
    }
}
