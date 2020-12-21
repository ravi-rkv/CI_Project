<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model{

    public function getuser()
    {
        $this->db->where('user_name',$username);
        $user=$this->db->get('tbl_user')->row_array();
        return $user;
    }

}