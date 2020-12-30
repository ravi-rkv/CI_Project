<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $admin = $this->session->userdata( 'users' ); 
        if(empty($admin))
        {
            $this->session->set_flashdata('msg', 'Your session has been expired');
            redirect(base_url().'login');
        }        
    }

	public function index()
	{
        $admin = $this->session->userdata( 'users' ); 
        // echo '<pre>';
        // print_r($admin['username']); 
      
		$this->load->view('Admin/Dashboard');
    }
}