<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Unit1 extends CI_Controller
{

    // public function __construct()
    // {
    //         parent::__construct();
    //         $this->load->model('member_model');
    //     }

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('quizmodel');
        $this->load->library('pagination');
    }

    public function index()
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
  
}
