<?php
defined('BEXEC') or die('No direct access!');
use \Brilliant\CMS\BLang;

class View_mainpage_mainpage extends \Brilliant\MVC\BView{
	/**
	 * Generate HTML and some headers.
	 */
	public function generate($data = NULL){
		$lang=BLang::$langcode;
		//Set headers
		$this->items = $data->items;
		$this->rootCategory = $data->rootCategory;
		//Try to generate the title
		$title = $this->rootCategory->title;
		if(empty($title)){
			$title = $this->rootCategory->name;
			}
		$this->setTitle($title);
		//Try to generate the META description
		$metadesc = $this->rootCategory->metadesc;
		$this->addMeta('description', $metadesc);
		//Try to generate the META keywords
		$metakeyw = $this->rootCategory->metakeyw;
		$this->addMeta('keywords', $metakeyw);
		//Cache (if the cache is enabled) and return HTML!
		$this->setcache(true,3600);//Cache for 1 hour
		return $this->templateLoad();
		}
	}
