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
 * Reads and writes pageimages pages
 * 
 * @author		Ruud Walraven <ruud.walraven@gmail.com>
 * @copyright	Ruud Walraven 2011 - 2018
 */
class PageimagesPagesModel extends Model
{

	/**
	 * Table name
	 */
	protected static $strTable = 'tl_pageimages_pages';


	/**
	 * Find published items by their ID and pageimages ID
	 * 
	 * @param int $varId   			The numeric ID
	 * @param int $pageimagesPid	The numeric pageimages ID
	 * 
	 * @return \Model|null The PageimagesPagesModel or null if there are no items
	 */
	public static function findParentAndItemsById($varId, $pageimagesPid)
	{
		// TODO: LEFT JOIN is supposed to return all results from left + whatever records where found right. But the where clause somehow messes it up...
		// That's why I'm using inner joins and doing the second lookup to find the parent page later on...
		$objPages = \Database::getInstance()->prepare("SELECT `tl_pageimages_items`.*, `tl_pageimages_pages`.`pageId`, `tl_page`.`pid` AS `pagePid` FROM ((`tl_page` INNER JOIN `tl_pageimages_pages` ON `tl_page`.`id` = `tl_pageimages_pages`.`pageId`) INNER JOIN `tl_pageimages_items` ON `tl_pageimages_pages`.`pid` = `tl_pageimages_items`.`id`) WHERE `tl_page`.`id`=? AND `tl_pageimages_items`.`pid`=?")
											->execute($varId, $pageimagesPid);
		return $objPages->numRows ? $objPages : null;
	}
}
