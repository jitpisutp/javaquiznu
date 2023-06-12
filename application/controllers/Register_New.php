<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_New extends CI_Controller {

	public function index()
	{
		$this->load->view('css');
		$this->load->view('navbar_New');
        $this->load->view('loginadmin_New');
	}

    // public function adding()
	// {
	// 	echo '<pre>';
    //     print_r($_POST);
    //     echo '</pre';
	// }
    public function logincheck()
	{
		$this->load->view('css');
		$this->load->view('navbar_New');
        $this->load->view('loginadmin_New');
		// if($this->input->post('a_username')=='') {
		// 	$this->load->view('register_new');
		// }else{
		// 	$result = $this->Member_model->fetch_user_login(
		// 		$this->input->post('a_password'),
		// 		sha1($this->input->post('a_password'))
		// 	);


		// 	if(!empty($result)){
		// 		$sess=array(
		// 			'a_id' 			=> $result->a_id,
		// 			'a_username' 	=> $result->a_username,
		// 			'a_password'	=> $result->a_password,
		// 		);


		// 		$this->session->set_userdata($sess);
		// 	}
		// }
	}



    public function showlogin()
	{
		echo '<pre>';
        print_r($_POST);
        echo '</pre';
	}
}
