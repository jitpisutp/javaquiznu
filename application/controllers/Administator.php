<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Administator extends CI_Controller
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
        $this->load->model('adminmodel');
        $this->load->library('pagination');
        
    }
    public function index()
    {
        $data['query'] = $this->adminmodel->showquestion();

        $this->load->view('css');
        $this->load->view('navbar_Admin');
        $this->load->view('dball/dashboardAll', $data);
        

        // $data2['quiz_choice'] = $this->adminmodel->tampil_data();
        // $this->load->view('dashboardAll',$data2);

    }

    public function dashboardAllu1()
    {
        $data['query'] = $this->adminmodel->showquestion();
        $this->load->view('css');
        $this->load->view('navbar_Admin');
        $this->load->view('dball/dashboardAllu1', $data);
    }

    public function dashboardAllu2()
    {
        $data['query'] = $this->adminmodel->showquestion2();
        $this->load->view('css');
        $this->load->view('navbar_Admin');
        $this->load->view('dball/dashboardAllu2', $data);
    }

    public function dashboardAllu3()
    {
        $data['query'] = $this->adminmodel->showquestion3();
        $this->load->view('css');
        $this->load->view('navbar_Admin');
        $this->load->view('dball/dashboardAllu3', $data);
    }

    public function dashboardAllu4()
    {
        $data['query'] = $this->adminmodel->showquestion4();
        $this->load->view('css');
        $this->load->view('navbar_Admin');
        $this->load->view('dball/dashboardAllu4', $data);
    }

    public function dashboardAllu5()
    {
        $data['query'] = $this->adminmodel->showquestion5();
        $this->load->view('css');
        $this->load->view('navbar_Admin');
        $this->load->view('dball/dashboardAllu5', $data);
    }

    // public function index()
    // {
    //     $config = array();
    //     $config['base_url'] = base_url('index.php/Administator/page');
    //     $config['total_rows'] = $this->adminmodel->record_count();
    //     $config['per_page'] = 5;
    //     $config['uri_segment'] = 3;
    //     $choice = $config['total_rows'] / $config['per_page'];
    //     $config['num_links'] = round($choice);

    //     $this->pagination->initialize($config);

    //     $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
    //     $data['results'] = $this->adminmodel->fetch_quiz($config['per_page'], $page);
    //     $data['link'] = $this->pagination->create_links();
    //     $data['total_rows'] = $config['total_rows'];

    //     //$data['query'] = $this->adminmodel->showquestion(); //อันเก่า

    //     $this->load->view('css');
    //     $this->load->view('navbar_Admin');
    //     $this->load->view('dashboardAll', $data);

    //     // $data2['quiz_choice'] = $this->adminmodel->tampil_data();
    //     // $this->load->view('dashboardAll',$data2);

    // }

    // public function page()
    // {
    //     $config = array();
    //     $config['base_url'] = base_url('index.php/Administator/page');
    //     $config['total_rows'] = $this->adminmodel->record_count();
    //     $config['per_page'] = 5;
    //     $config['uri_segment'] = 3;
    //     $choice = $config['total_rows'] / $config['per_page'];
    //     $config['num_links'] = round($choice);

    //     $this->pagination->initialize($config);

    //     $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
    //     $data['results'] = $this->adminmodel->fetch_quiz($config['per_page'], $page);
    //     $data['link'] = $this->pagination->create_links();
    //     $data['total_rows'] = $config['total_rows'];

    //     //$data['query'] = $this->adminmodel->showquestion(); //อันเก่า

    //     $this->load->view('css');
    //     $this->load->view('navbar_Admin');
    //     $this->load->view('dashboardAll', $data);

    //     // $data2['quiz_choice'] = $this->adminmodel->tampil_data();
    //     // $this->load->view('dashboardAll',$data2);

    // }

    public function login()
    {
        $this->load->view('css');
        $this->load->view('navbar_Home');
        $this->load->view('loginadmin_New');
    }

    public function check()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        if ($username == 'admin' && $password == 'admin') {
            $data['result'] = "Login Successfully";
            $this->index();
        } else {
            redirect('?act=F', 'refresh');
        }
    }

    public function logout()
    {
        redirect('Home_new', 'refresh');
    }


    public function dashboardAdd()
    {
        $this->load->view('css');
        $this->load->view('navbar_Admin');
        $this->load->view('dbadd/dashboardAdd');
    }
    public function dashboardAdd2()
    {
        $this->load->view('css');
        $this->load->view('navbar_Admin');
        $this->load->view('dbadd/dashboardAdd2');
    }
    public function dashboardAdd3()
    {
        $this->load->view('css');
        $this->load->view('navbar_Admin');
        $this->load->view('dbadd/dashboardAdd3');
    }
    public function dashboardAdd4()
    {
        $this->load->view('css');
        $this->load->view('navbar_Admin');
        $this->load->view('dbadd/dashboardAdd4');
    }
    public function dashboardAdd5()
    {
        $this->load->view('css');
        $this->load->view('navbar_Admin');
        $this->load->view('dbadd/dashboardAdd5');
    }

    public function addingg()
    {
        $this->adminmodel->addQuestion();
        $data['query'] = $this->adminmodel->showquestion();
        $this->load->view('css');
        $this->load->view('navbar_Admin');
        $this->load->view('dball/dashboardAllu1', $data);
        // $this->load->view('dashboardAll');
        //redirect('','refresh');
    }
    public function addingg2()
    {
        $this->adminmodel->addQuestion2();
        $data['query'] = $this->adminmodel->showquestion2();
        $this->load->view('css');
        $this->load->view('navbar_Admin');
        $this->load->view('dball/dashboardAllu2', $data);
    }
    public function addingg3()
    {
        $this->adminmodel->addQuestion3();
        $data['query'] = $this->adminmodel->showquestion3();
        $this->load->view('css');
        $this->load->view('navbar_Admin');
        $this->load->view('dball/dashboardAllu3', $data);
    }
    public function addingg4()
    {
        $this->adminmodel->addQuestion4();
        $data['query'] = $this->adminmodel->showquestion4();
        $this->load->view('css');
        $this->load->view('navbar_Admin');
        $this->load->view('dball/dashboardAllu4', $data);
    }
    public function addingg5()
    {
        $this->adminmodel->addQuestion5();
        $data['query'] = $this->adminmodel->showquestion5();
        $this->load->view('css');
        $this->load->view('navbar_Admin');
        $this->load->view('dball/dashboardAllu5', $data);
    }

    public function edit($quiz_ID)
    {
        $data['questedit'] = $this->adminmodel->read($quiz_ID);

        $this->load->view('css');
        $this->load->view('navbar_Admin');
        $this->load->view('dbedit/dashboardEdit', $data);
    }
    public function edit2($quiz_ID)
    {
        $data['questedit'] = $this->adminmodel->read2($quiz_ID);

        $this->load->view('css');
        $this->load->view('navbar_Admin');
        $this->load->view('dbedit/dashboardEdit2', $data);
    }
    public function edit3($quiz_ID)
    {
        $data['questedit'] = $this->adminmodel->read3($quiz_ID);

        $this->load->view('css');
        $this->load->view('navbar_Admin');
        $this->load->view('dbedit/dashboardEdit3', $data);
    }
    public function edit4($quiz_ID)
    {
        $data['questedit'] = $this->adminmodel->read4($quiz_ID);

        $this->load->view('css');
        $this->load->view('navbar_Admin');
        $this->load->view('dbedit/dashboardEdit4', $data);
    }
    public function edit5($quiz_ID)
    {
        $data['questedit'] = $this->adminmodel->read5($quiz_ID);

        $this->load->view('css');
        $this->load->view('navbar_Admin');
        $this->load->view('dbedit/dashboardEdit5', $data);
    }
    

    public function editupdate()
    {
        $this->adminmodel->editupdate();
        redirect('Administator/dashboardAllu1', 'refresh');
    }
    public function editupdate2()
    {
        $this->adminmodel->editupdate2();
        redirect('Administator/dashboardAllu2', 'refresh');
    }
    public function editupdate3()
    {
        $this->adminmodel->editupdate3();
        redirect('Administator/dashboardAllu3', 'refresh');
    }
    public function editupdate4()
    {
        $this->adminmodel->editupdate4();
        redirect('Administator/dashboardAllu4', 'refresh');
    }
    public function editupdate5()
    {
        $this->adminmodel->editupdate5();
        redirect('Administator/dashboardAllu5', 'refresh');
    }

    public function del($quiz_ID)
    {
        //print_r($_POST);
        $this->db->delete('quiz_choice', array('quiz_ID' => $quiz_ID));
        redirect('Administator', 'refresh');

        
    }
}
