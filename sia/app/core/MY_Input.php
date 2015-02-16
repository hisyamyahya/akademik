<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
	* MY_Input.php
	* Created: 04 Juli 2014
	* Updated: 23 Nov 2014
	* Creator: Egar Rizki [ Ch0c0-ID ]
	* Contact: egarg4ul@gmail.com || egarg4ul@protonmail.ch || https://fb.me/egar.never.fun
**/

class MY_Input extends CI_Input {
	function _sanitize_globals() {
		$ignore_csrf = config_item("csrf_ignore");

		if(is_array($ignore_csrf) && count($ignore_csrf)) {
			global $URI;

			$stack = $URI->uri_string();

			foreach($ignore_csrf as $needle) {

				if(strlen($stack) >= strlen($needle) && substr($stack, 0, strlen($needle)) == $needle) {
					$this->_enable_csrf = false;

					break;
				}
			}
		}

		parent::_sanitize_globals();
	}
}
