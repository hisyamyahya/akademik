<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");


class Akademik_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function ceklogin($username,$password)
	{
		$user = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($username,ENT_QUOTES))));
	        	$pass = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($password,ENT_QUOTES))));
	        	$this->db->select('*');
	        	$this->db->from('sia_login');
	        	$this->db->where('username',$user);
	        	$this->db->where('password',$pass);
	        	$query = $this->db->get();
	        	return $query;
	}
}