<?php  
	defined('BASEPATH') OR exit('No Direct script access allowed');

	/**
	* 
	*/
	class Login_model extends CI_Model
	{
		function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}

	

   		}
?>