<?php
/**
 * Pages page model
 *
 * @author Andrii Biriev <a@konservs.com>
 * @copyright © Andrii Biriev, a@konservs.com, www.konservs.com
 */
defined('BEXEC') or die('No direct access!');

use \Application\Pages\Pages;

class Model_pages_page extends \Brilliant\MVC\BModel{
	public function getData($segments){
		$data=new stdClass;
		$bStaticPages = Pages::getInstance();
		$data->page = $bStaticPages->itemGet($segments['id']);
		return $data;
		}
	}
