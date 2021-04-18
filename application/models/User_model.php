<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function checklogin($email,$pwd)
	{
        $where_arr = array(
            "email" => $email,
            "password" => $pwd
        );
		$res = $this->db->select('*')->from('tk_users')->where($where_arr)->get()->result();
        if(count($res)>0){
            return $res;
        }else{
            return [];
        }  
    }

    public function get_all_users()
    {
		return $this->db->select('*')->from('tk_users')->get()->result();
    }
}