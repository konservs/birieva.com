<?php
defined('BEXEC') or die('No direct access!');

class View_contacts_contacts extends \Brilliant\MVC\BView{
	/**
	 * Generate HTML and some headers.
	 */
	public function generate($data = NULL){
		$this->setTitle('Contacts');
		$this->addMeta('description', 'Contacts');
		$this->addMeta('keywords', 'Contacts');
		$this->setcache(true,3600);//Cache for 1 hour
		return $this->templateLoad();
		}
	}
