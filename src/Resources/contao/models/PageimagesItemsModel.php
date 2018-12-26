<?php

/**
 * @package		contao-page-images-bundle
 * @author		Ruud Walraven <ruud.walraven@gmail.com>
 * @copyright	Ruud Walraven 2011 - 2018
 * @license		http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


namespace Srhinow\ContaoPageImagesBundle\Models;

use Contao\Model;

/**
 * Reads and writes pageimagesitems
 * @author		Ruud Walraven <ruud.walraven@gmail.com>
 */
class PageimagesItemsModel extends Model
{

	/**
	 * Table name
	 * @var string
	 */
	protected static $strTable = 'tl_pageimages_items';
}
