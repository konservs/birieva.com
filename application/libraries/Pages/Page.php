<?php
namespace Application\Pages;
use Application\Pages\Pages;

/**
 * Basic class to control single bugtracker issue
 *
 * @author Andrii Biriev <a@konservs.com>
 * @copyright © Andrii Biriev, a@konservs.com, www.konservs.com
 */
class Page extends \Brilliant\Items\BItemsItem{
	protected $collectionname='\Application\Pages\Pages';
	protected $tableName='pages';
	/**
	 * @var DateTime
	 */
	public $created;
	/**
	 * @var DateTime
	 */
	public $modified;
	/**
	 * Constructor - init fields...
	 */
	function __construct() {
		parent::__construct();
		$this->fieldAddRaw('heading','string');
		$this->fieldAddRaw('textLeft','string');
		$this->fieldAddRaw('textMain','string');
		//HTML tags
		$this->fieldAddRaw('title','string');
		$this->fieldAddRaw('metadesc','string');
		$this->fieldAddRaw('metakeyw','string');
		//Created & modified
		$this->fieldAddRaw('created','dt',array('readonly'=>true));
		$this->fieldAddRaw('modified','dt',array('readonly'=>true));
		}

	public function getHeading(){
		return $this->heading;
		}
	}
