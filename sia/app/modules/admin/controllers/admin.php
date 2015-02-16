<?php if  ( ! defined("BASEPATH")) exit("No direct script access allowed");

class Admin extends Application {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$cek = $this->session->userdata('loggend_in');
		if ( $cek == TRUE ) {
			# code...
		echo"berhasil";
		} else {
			redirect('auth');
		}
	}
}