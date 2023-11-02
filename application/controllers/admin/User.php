<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __constract(){
        parent::__constract();
		$this->load->model("User_model");
        $this->load->library('form_validation');
    }
	public function index()
	{
       $data = array(
		'title' => 'View Data User',
		'user' => $this->User_model->getAll(),		
		'content' => 'admin/user/index',
	   );
            $this->load->view('admin/template/main',$data);      
	}
}
