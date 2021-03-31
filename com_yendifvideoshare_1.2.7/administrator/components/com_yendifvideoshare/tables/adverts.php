<?php

/*
 * @version		$Id: adverts.php 1.2.7 06-08-2018 $
 * @package		Yendif Video Share
 * @copyright   Copyright (C) 2014-2018 Yendif Technologies (P) Ltd
 * @license     GNU/GPL http://www.gnu.org/licenses/gpl-2.0.html
*/

// no direct access
defined('_JEXEC') or die('Restricted access'); 

class YendifVideoShareTableAdverts extends JTable {

	var $id          = null;
  	var $title       = null;
	var $cat_ids     = null;
  	var $type        = null;
	var $mp4         = null;
	var $link        = null;
	var $impressions = null;
	var $clicks      = null;
	var $published   = null; 

	public function __construct( &$db ) {
		parent::__construct( '#__yendifvideoshare_adverts', 'id', $db );
	}

	public function check() {
		return true;
	}
	
}