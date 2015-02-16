<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
	* MY_Security.php
	* Created: 04 Juli 2014
	* Updated: 23 Nov 2014
	* Creator: Egar Rizki [ Ch0c0-ID ]
	* Contact: egarg4ul@gmail.com || egarg4ul@protonmail.ch || https://fb.me/egar.never.fun
**/

class MY_Security extends CI_Security {

	function __construct() {
		parent::__construct();
	}

	function csrf_verify() {
		if(isset($_SERVER['REDIRECT_QUERY_STRING'])) {
			$path_segments = explode('/', $_SERVER['REDIRECT_QUERY_STRING']);
			$bypass = false;

			if($path_segments[0] == 'home') {
				$bypass = true;
			}

			if(!$bypass) {
				parent::csrf_verify();
			}
		}
	}
}

