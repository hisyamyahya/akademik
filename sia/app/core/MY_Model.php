<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

//declaration of interface
interface DbManagement {

	//Crud(Create Read Update Delete) Function
	public function add($o);
	public function see($id);
	public function apply($o);
	public function remove($o);

	//Sorter ~
	// public function sort_by($sort);
	// public function order_by($order);

	//Utils ~
	// public function get_one($filter);
	public function get_all($filter, $limit, $offset, $sort);
	public function count($filter);
	public function clean($data);
	public function repair($table);	
	public function optimize($db);
}

/**
	* MY_Model.php
	* Created: 04 Juli 2014
	* Updated: 23 Nov 2014
	* Creator: Egar Rizki [ Ch0c0-ID ]
	* Contact: egarg4ul@gmail.com || egarg4ul@protonmail.ch || https://fb.me/egar.never.fun
**/

class MY_Model extends CI_Model implements DbManagement {
	//protects the object
	protected $table, $pk;

	//construct__
	public function __construct() {
		parent::__construct();
	}

	//set the table
	public function set_table($table) {
		$this->table = $table;
	}

	//get the table
	public function get_table() {
		return $this->table;
	}

	//set the index of table
	public function set_index($pk) {
		$this->pk = $pk;
	}

	//index of primary key
	public function get_index() {
		return $this->pk;
	}

	//add a data
	public function add($o) {
		$this->db->insert($this->table, $o);

		return $this->db->insert_id();
	}

	//read a data
	public function see($id) {
		$filter = array();
		for($i = 0; $i < count($this->pk); $i++) {
			$filter[$this->pk[$i]] = $id[$this->pk[$i]];
		}

		$this->db->from($this->table);
		$this->db->where($filter);

		return $this->db->get()->row_array();
	}

	//update a data
	public function apply($o) {
		$filter = array();

		for($i = 0; $i < count($this->pk); $i++) {
			$filter[$this->pk[$i]] = $o[$this->pk[$i]];
		}

		$this->db->where($filter);
		$this->db->update($this->table, $o);

		return $this->db->affected_rows();
	}

	//removing a data from database
	public function remove($o) {
		for($i = 0; $i < count($this->pk); $i++) {
			if(!array_key_exists($this->pk[$i], $o)) {
				return FALSE;
			}
		}

		$filter = array();
		for($i = 0; $i < count($this->pk); $i++) {
			$filter[$this->pk[$i]] = $o[$this->pk[$i]];
		}

		$this->db->delete($this->table, $filter);

		return $this->db->affected_rows();
	}

	//getting all data from database(params may included)
	public function get_all($filter=array(), $limit=0, $offset=0, $sort=array(), $debug=0) {
		$this->db->from($this->table);

		if(!empty($filter)) {
			$this->db->where($filter);
		}

		if(!empty($sort)) {
			foreach($sort as $key => $value) {
				$this->db->order_by($key, $value);
			}
		}

		if($limit > 0) {
			$this->db->limit($limit, $offset);
		}

		if($debug) {
			var_dump($this->db->_compile_select());
		}

		return $this->db->get()->result_array();
	}

	//count all data from table
	public function count($filter, $debug = 0) {
		$this->db->from($this->table);

		if(!empty($filter)) {
			$this->db->where($filter);
		}

		if($debug) {
			var_dump($this->db->_compile_select());
		}

		return $this->db->count_all_results();
	}
	
	//cleaning data from database
	public function clean($data) {
		$this->db->from($this->table);

		if(empty($data)) {
			return false;
		}

		return $this->db->empty_table();
	}

	//repairing database
	public function repair($table) {
		$this->load->dbutil();

		if(empty($table)) {
			return false;
		}

		return $this->dbutil->repair_table($table);
	}

	//optimizing database
	public function optimize($db) {
		$this->load->dbutil();

		if(empty($db)) {
			return false;
		}

		return $this->dbutil->optimize_database();
	}

}

?>
