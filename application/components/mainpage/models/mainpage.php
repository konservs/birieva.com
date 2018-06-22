<?php
/**
 * Mainpage model
 *
 * @author Andrii Biriev <a@konservs.com>
 * @copyright © Andrii Biriev, a@konservs.com, www.konservs.com
 */
defined('BEXEC') or die('No direct access!');

use \Brilliant\Portfolio\Categories;

class Model_mainpage_mainpage extends \Brilliant\MVC\BModel{
	public function getData($segments){
		$data=new stdClass;
		$bPortfolioCategories = Categories::getInstance();
		$data->items = $bPortfolioCategories->itemsFilter(['parent' => 1]);
		return $data;
		}
	}
