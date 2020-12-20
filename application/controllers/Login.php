<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Login_model');
    }

	public function index()
	{
       
		$this->load->view('Admin/login');
    }

   public function auth()
   {
       
   }
    
}