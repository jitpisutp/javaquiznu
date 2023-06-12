<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_New extends CI_Controller {

    // public function __construct()
    // {
    //         parent::__construct();
    //         $this->load->model('member_model');
    //     }

    function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function index()
	{
        //$data['query']=$this->member_model->showdata8();

        // echo '<pre>';
        // print_r($data);
        // echo '</pre>'; 
        // exit;

		$this->load->view('css');
		$this->load->view('navbar_Home');
        $this->load->view('bodytext_New');
        
        //$this->load->view('member_view', $data);
		

	}

    public function login()
	{
		$this->load->view('css');
		$this->load->view('navbar_Home');
        $this->load->view('loginadmin_New');
	}

    public function showlogin()
	{
		echo '<pre>';
        print_r($_POST);
        echo '</pre';
	}

    public function unit1()
    {
        $this->load->view('css');
		$this->load->view('navbar_New');
        $this->load->view('unit1/quiz_unit1');

    }

    public function quizdisplay()
	{
        $this->load->view('css');
		$this->load->view('navbar_New');
		$this->load->model('quizmodel');
		$this->data['questions'] = $this->quizmodel->getQuestions();
		$this->load->view('unit1/quiz_unit1display', $this->data);
	}

    public function resultdisplay()
	{
        $this->load->view('css');
		$this->load->view('navbar_New');
		$this->data['checks'] = array(
		     'ques1' => $this->input->post('quizid1'),
		     'ques2' => $this->input->post('quizid2'),
			 'ques3' => $this->input->post('quizid3'),
			 'ques4' => $this->input->post('quizid4'),
		     'ques5' => $this->input->post('quizid5'),
			 'ques6' => $this->input->post('quizid6'),
			 'ques7' => $this->input->post('quizid7'),
			 'ques8' => $this->input->post('quizid8'),
		     'ques9' => $this->input->post('quizid9'),
			 'ques10' => $this->input->post('quizid10'),
		);

        $this->load->model('quizmodel');
		$this->data['results'] = $this->quizmodel->getQuestions();
		$this->load->view('unit1/quiz_unit1result', $this->data);
	}

    public function unit2()
    {
        $this->load->view('css');
		$this->load->view('navbar_New');
        $this->load->view('quiz_unit2');

    }

    public function unit3()
    {
        $this->load->view('css');
		$this->load->view('navbar_New');
        $this->load->view('quiz_unit3');

    }

    public function unit4()
    {
        $this->load->view('css');
		$this->load->view('navbar_New');
        $this->load->view('quiz_unit4');

    }

    public function unit5()
    {
        $this->load->view('css');
		$this->load->view('navbar_New');
        $this->load->view('quiz_unit5');

    }

    public function unit6()
    {
        $this->load->view('css');
		$this->load->view('navbar_New');
        $this->load->view('quiz_unit6');

    }

    // public function edit($m_id)
	// {
    //     $data['rsedit']=$this->member_model->read($m_id);

	// 	$this->load->view('css');
	// 	$this->load->view('header');
	// 	$this->load->view('banner');
	// 	$this->load->view('navbar');
    //     $this->load->view('edit_view', $data);
    //     $this->load->view('footer');
	// 	$this->load->view('js');

	// }
    // public function addingg()
	// {
    //     $this->member_model->addmember();
    //     //redirect('','refresh');
	// }
    // public function addingg2()
	// {
    //     $this->member_model->addmember2();
    //     //redirect('','refresh');
	// }
    // public function editdata()
	// {
    //     //print_r($_POST);
    //     $this->member_model->editmember();
    //     redirect('','refresh');
	
	// }
    // public function del($m_id)
	// {
    //     //print_r($_POST);
    //     $this->member_model->deldata($m_id);
    //     redirect('','refresh');
	
	// }
    
}
    