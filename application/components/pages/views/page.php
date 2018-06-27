<?php
/**
 * Static page view
 *
 * @author Andrii Biriev <a@konservs.com>
 * @copyright © Andrii Biriev, a@konservs.com, www.konservs.com
 */
defined('BEXEC') or die('No direct access!');

class View_pages_page extends \Brilliant\MVC\BView{
	/**
	 * Generate HTML and some headers.
	 */
	public function generate($data = NULL){
		$this->page = $data->page;
		$this->setTitle($data->page->title);
		$this->addMeta('description', $data->page->metadesc);
		$this->addMeta('keywords',  $data->page->metakeyw);
		$this->setcache(true,3600);//Cache for 1 hour
		return $this->templateLoad();
		}
	}
