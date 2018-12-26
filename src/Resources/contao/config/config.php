<?php
/**
 * @package		contao-page-images-bundle
 * @author		Ruud Walraven <ruud.walraven@gmail.com>
 * @copyright	Ruud Walraven 2011 - 2014
 * @license		http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

$GLOBALS['BE_PAGEIMAGES']['PROPERTIES']['PUBLICSRC'] = 'bundles/srhinowcontaopageimages';

/**
 * Front end modules
 */
array_insert($GLOBALS['FE_MOD']['miscellaneous'], 0, array
(
    'pageimages' => 'Srhinow\ContaoPageImagesBundle\Modules\ModulePageImages'
));

/**
 * Back end modules
 */
$GLOBALS['BE_MOD']['content']['pageimages'] = array
(
	'tables'	=> array('tl_pageimages','tl_pageimages_items'),
	'icon'		=> $GLOBALS['BE_PAGEIMAGES']['PROPERTIES']['PUBLICSRC'].'/icons/icon.gif'
);

/**
 * -------------------------------------------------------------------------
 * Models
 * -------------------------------------------------------------------------
 */
$GLOBALS['TL_MODELS']['tl_pageimages'] = Srhinow\ContaoPageImagesBundle\Models\PageimagesModel::class;
$GLOBALS['TL_MODELS']['tl_pageimages_items'] = Srhinow\ContaoPageImagesBundle\Models\PageimagesItemsModel::class;
$GLOBALS['TL_MODELS']['tl_pageimages_pages'] = Srhinow\BzBbkBundle\Models\PageimagesPagesModel::class;


/**
 * Permissions are access settings for user and groups (fields in tl_user and tl_user_group)
 */
$GLOBALS['TL_PERMISSIONS'][] = 'pageimages_categories';
$GLOBALS['TL_PERMISSIONS'][] = 'pageimages_categoriesp';