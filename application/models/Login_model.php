<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model{

    public function getuser($username)
    {
        $this->db->where('username',$username);
        $user=$this->db->get('users')->row_array();
        return $user;
    }

}