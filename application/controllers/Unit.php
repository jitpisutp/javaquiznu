<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Unit extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('quizmodel');
        $this->load->library('pagination');
    }

    public function index()
    {
        $this->load->helper('url');
        $data['title'] = "Scopri i nostri prodotti";
        $data['description'] = "Description";
        $data['keywords'] = "Keywords";
        $data['products'] = $this->quizmodel->getAllProductsLimit();
        $data['get_products'] = $this->quizmodel->get_products();
        $this->load->view('welcome', $data);
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
        
        $this->data['results'] = $this->quizmodel->getQuestionsAll();
        $this->load->view('unit1/quiz_unit1result', $this->data);
    }

    public function resultdisplaysolve()
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
        
        $this->data['results'] = $this->quizmodel->getQuestions1();
        $this->load->view('unit1/quiz_unit1resultSolve', $this->data);
    }

    public function page()
    {
        $config = array();
        $config['base_url'] = base_url('index.php/Unit1/page');
        $config['total_rows'] = $this->quizmodel->record_count();
        $config['per_page'] = 5;
        $config['uri_segment'] = 3;
        $choice = $config['total_rows'] / $config['per_page'];
        $config['num_links'] = round($choice);

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['results'] = $this->quizmodel->fetch_quiz($config['per_page'], $page);
        $data['link'] = $this->pagination->create_links();
        $data['total_rows'] = $config['total_rows'];

        //$data['query'] = $this->quizmodel->showquestion(); //อันเก่า

        $this->load->view('css');
        $this->load->view('navbar_Admin');
        $this->load->view('unit1/quiz_unit1', $data);

        // $data2['quiz_choice'] = $this->quizmodel->tampil_data();
        // $this->load->view('dashboardAll',$data2);

    }
    public function getRandomQuiz() {

        
        $this->load->view('css');
        $this->load->view('navbar_New');
        $this->load->model('quizmodel');
        // $limit = 10; // Set the desired limit here
        // $data['records'] = $this->quizmodel->getRandomQuestions($limit);
        // // Load your view and pass the data
        // $this->load->view('unit1/quiz_unit1display', $data);

        $randomQuestions = $this->quizmodel->getRandomQuestions(10); // Set the desired number of random questions
        
        // Pass the questions to the view
        $data['records'] = $randomQuestions;
        //$this->session->set_userdata('random_data', $randomQuestions);
        // Load the view to display the random questions
        $this->load->view('unit1/quiz_unit1display', $data);
        
        
    }

    
    
}
