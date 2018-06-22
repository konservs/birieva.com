<?php
defined('BEXEC') or die('No direct access!');
use \Brilliant\CMS\BLang;

class View_mainpage_mainpage extends \Brilliant\MVC\BView{
	/**
	 *
	 */
	public function generate($data = NULL){
		$lang=BLang::$langcode;
		//Set headers
		$this->setTitle(BLang::_('COM_MAINPAGE_TITLE'));
		$this->addMeta('description',COM_MAINPAGE_METADESC_UA);
		$this->addMeta('keywords',COM_MAINPAGE_METAKEYW_UA);
		$this->items = $data->items;
		//no html for mainpage!
		$this->setcache(true,3600);//Cache for 1 hour
		return $this->templateLoad();
		}
	}
