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
    $this->form_validation->set_rules('username', 'Username', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');
    if ($this->form_validation->run() == TRUE)
    {       
           $username = $this->input->post('username'); 
           $usr=$this->Login_model->getuser($username);
           if(!empty($usr))
           {
            $password = $this->input->post('password');
            if(password_verify($password , $usr['password'])==true)
            {
                $userArray['user_id'] = $usr['id'];
                $userArray['username'] = $usr['username'];
                $userArray['email'] = $usr['email'];                 
                $this->session->set_userdata( 'users' , $userArray );                
                redirect(base_url().'Admin/Dashboard');                   
            }
            else
            {
             $this->session->set_flashdata('msg', 'Either Username or Password is incorrect');           
             redirect(base_url().'login');
            }


           }
           else
           {
           $this->session->set_flashdata('msg', 'Either Username or Password is incorrect');           
           redirect(base_url().'login');
           
           }
    }
    else
    {
            $this->load->view('Admin/login');
    }
   }

   public function logout(){
       
       $this->session->unset_userdata('users');
       redirect(base_url().'login'); 
       
   }
    
}