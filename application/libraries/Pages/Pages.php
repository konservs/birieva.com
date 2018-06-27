<?php
namespace Application\Pages;

/**
 * Basic class to control Static Pages
 *
 * @method \Application\Pages\Page itemGet(integer $id)
 * @method \Application\Pages\Page[] itemsGet(integer[] $ids)
 * @method \Application\Pages\Page[] itemsFilter($params)
 *
 * @author Andrii Biriev <a@konservs.com>
 * @copyright © Andrii Biriev, a@konservs.com, www.konservs.com
 */
class Pages extends \Brilliant\Items\BItems{
	use \Brilliant\BSingleton;
	protected $tableName='pages';
	protected $itemClassName='\Application\Pages\Page';
	}
