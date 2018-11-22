<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Individual extends CI_Model
{
	
	public function add_donor($arg)
	{
		$this->db->insert('donors', $arg);
	}

	public function add_donation($arg)
	{
		$this->db->insert('donations', $arg);
	}
}




?>