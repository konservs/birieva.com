<?php
/**
 * Sets of functions and classes to work with routes: Get the
 * URL and convert it to MVC, load component
 * 
 * Get the MVC and convert into URL
 * 
 * @author Andrii Biriev, <a@konservs.com>
 * 
 * @copyright © Andrii Biriev, <a@konservs.com>
 */
namespace Application;
use Brilliant\CMS\BLang;
use Brilliant\CMS\BRouterBase;
use Brilliant\Log\BLog;
use Brilliant\Users\BUsers;

class BRouter extends BRouterBase{
	use \Brilliant\BSingleton;
	protected static $starttime=0;
	protected static $instance=NULL;
	protected $components=array('portfolio','users');
	protected $router=array();
	protected $positions=array();
	protected $rules=array();
	protected $soft_rules=array();
	protected $maincom=NULL;
	protected $langcode='';
	protected $deflang='en';
	public $templatename='default';
	public $frontendtemplate='default';

	/**
	 * Generate URL by component, language and segments
	 * in case of sucessfull parse return URL, else return false;
	 *
	 * @param string $component
	 * @param string $lang
	 * @param array $segments
	 */
	public function generateURL($component,$segments,$options=array()){
		$opt_protocol=isset($options['protocol'])?$options['protocol']:'//';
		$opt_hostname=isset($options['usehostname'])?$options['usehostname']:false;
		//forming preffix
		$pref='';
		if($opt_hostname){
			$pref=$opt_protocol.BHOSTNAME;
			}
		$pref.='/';
		$lang=isset($segments['lang'])?$segments['lang']:\Brilliant\CMS\BLang::$langcode;
		if(($lang!=='en')&&(!empty($lang))){
			$pref.=$lang.'/';
			}
		switch($component){
			case 'mainpage':
				return $pref.'';
			}
		}
	/**
	 *
	 */
	public function generateURLmain($lang='',$useparams=true){
		if(empty($lang)){
			$lang=BLang::$langcode;
			}
		$url=$this->generateURL($this->maincom->com,$lang,$this->maincom->segments);
		if($useparams){
			bimport('http.request');
			$url.=BRequest::getGetString();
			}
		return $url;
		}
	/**
	 * Parse URL and returns segments, if all is ok.
	 */
	public function parseurl($URL,$host){
		$u=parse_url($URL);
		$u_path=$u['path'];
		$u_query=$u['query'];
		$u_fragment=$u['fragment'];
		//
		parse_str($u_query,$f_query);
		$f_path=explode('/',$u_path);
		array_shift($f_path);
		//Get subdomain type
		$exploded_host=explode('.',$host);
		if($exploded_host[0]=='www'){
			$this->ctype=CTYPE_REDIRECT301;
			$this->redirectURL='//'.BHOSTNAME.$URL;
			return;
			}
		BLang::init('en');

		if(count($f_path)==0||(count($f_path)==1&&$f_path[0]=='')){
			$this->maincom=(object)array(
				'com'=>'mainpage',
				'position'=>'content',
				'segments'=>array('view'=>'mainpage')
				);
			//$this->addFixedRules();
			$this->rules[]=$this->maincom;
			//$this->softmodulesget('mainpage:mainpage');
			return true;
			}
		if(count($f_path)==0||(count($f_path)==1&&$f_path[0]=='contact')){
			$this->maincom=(object)array(
				'com'=>'contacts',
				'position'=>'content',
				'segments'=>array('view'=>'contacts')
				);
			//$this->addFixedRules();
			$this->rules[]=$this->maincom;
			//$this->softmodulesget('mainpage:mainpage');
			return true;
			}

		return false;
		}//end of ParseURL
	}

