<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class adminmodel extends CI_Model
{
	public function addQuestion()
	{
		$config['upload_path'] = './img/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload', $config);
	
		if (!$this->upload->do_upload('img')) {
			$data = $this->upload->data();
			
			$data = array(
				'ca_quiz' => $this->input->post('selectunit'),
				'question' => $this->input->post('questionadd'),
				'choice1' => $this->input->post('c1'),
				'choice2' => $this->input->post('c2'),
				'choice3' => $this->input->post('c3'),
				'answer' => $this->input->post('ans'),

			);
			$this->db->insert('quiz_choice1', $data);
		} else  {
			$data = $this->upload->data();
			$filename = $data['file_name'];
			$data = array(
				'ca_quiz' => $this->input->post('selectunit'),
				'question' => $this->input->post('questionadd'),
				'img_question' => $filename,
				'choice1' => $this->input->post('c1'),
				'choice2' => $this->input->post('c2'),
				'choice3' => $this->input->post('c3'),
				'answer' => $this->input->post('ans'),

			);
			$this->db->insert('quiz_choice1', $data);
		}

	}

	public function addQuestion2()
	{
		$config['upload_path'] = './img/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload', $config);
	
		if (!$this->upload->do_upload('img')) {
			$data = $this->upload->data();
			
			$data = array(
				'ca_quiz' => $this->input->post('selectunit'),
				'question' => $this->input->post('questionadd'),
				'choice1' => $this->input->post('c1'),
				'choice2' => $this->input->post('c2'),
				'choice3' => $this->input->post('c3'),
				'answer' => $this->input->post('ans'),

			);
			$this->db->insert('quiz_choice2', $data);
		} else  {
			$data = $this->upload->data();
			$filename = $data['file_name'];
			$data = array(
				'ca_quiz' => $this->input->post('selectunit'),
				'question' => $this->input->post('questionadd'),
				'img_question' => $filename,
				'choice1' => $this->input->post('c1'),
				'choice2' => $this->input->post('c2'),
				'choice3' => $this->input->post('c3'),
				'answer' => $this->input->post('ans'),

			);
			$this->db->insert('quiz_choice2', $data);
		}

	}

	public function addQuestion3()
	{
		$config['upload_path'] = './img/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload', $config);
	
		if (!$this->upload->do_upload('img')) {
			$data = $this->upload->data();
			
			$data = array(
				'ca_quiz' => $this->input->post('selectunit'),
				'question' => $this->input->post('questionadd'),
				'choice1' => $this->input->post('c1'),
				'choice2' => $this->input->post('c2'),
				'choice3' => $this->input->post('c3'),
				'answer' => $this->input->post('ans'),

			);
			$this->db->insert('quiz_choice3', $data);
		} else  {
			$data = $this->upload->data();
			$filename = $data['file_name'];
			$data = array(
				'ca_quiz' => $this->input->post('selectunit'),
				'question' => $this->input->post('questionadd'),
				'img_question' => $filename,
				'choice1' => $this->input->post('c1'),
				'choice2' => $this->input->post('c2'),
				'choice3' => $this->input->post('c3'),
				'answer' => $this->input->post('ans'),

			);
			$this->db->insert('quiz_choice3', $data);
		}

	}

	public function addQuestion4()
	{
		$config['upload_path'] = './img/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload', $config);
	
		if (!$this->upload->do_upload('img')) {
			$data = $this->upload->data();
			
			$data = array(
				'ca_quiz' => $this->input->post('selectunit'),
				'question' => $this->input->post('questionadd'),
				'choice1' => $this->input->post('c1'),
				'choice2' => $this->input->post('c2'),
				'choice3' => $this->input->post('c3'),
				'answer' => $this->input->post('ans'),

			);
			$this->db->insert('quiz_choice4', $data);
		} else  {
			$data = $this->upload->data();
			$filename = $data['file_name'];
			$data = array(
				'ca_quiz' => $this->input->post('selectunit'),
				'question' => $this->input->post('questionadd'),
				'img_question' => $filename,
				'choice1' => $this->input->post('c1'),
				'choice2' => $this->input->post('c2'),
				'choice3' => $this->input->post('c3'),
				'answer' => $this->input->post('ans'),

			);
			$this->db->insert('quiz_choice4', $data);
		}

	}

	public function addQuestion5()
	{
		$config['upload_path'] = './img/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload', $config);
	
		if (!$this->upload->do_upload('img')) {
			$data = $this->upload->data();
			
			$data = array(
				'ca_quiz' => $this->input->post('selectunit'),
				'question' => $this->input->post('questionadd'),
				'choice1' => $this->input->post('c1'),
				'choice2' => $this->input->post('c2'),
				'choice3' => $this->input->post('c3'),
				'answer' => $this->input->post('ans'),

			);
			$this->db->insert('quiz_choice5', $data);
		} else  {
			$data = $this->upload->data();
			$filename = $data['file_name'];
			$data = array(
				'ca_quiz' => $this->input->post('selectunit'),
				'question' => $this->input->post('questionadd'),
				'img_question' => $filename,
				'choice1' => $this->input->post('c1'),
				'choice2' => $this->input->post('c2'),
				'choice3' => $this->input->post('c3'),
				'answer' => $this->input->post('ans'),

			);
			$this->db->insert('quiz_choice5', $data);
		}

	}

	public function showquestion()
	{
		$this->db->select('quiz_ID,ca_quiz,question,img_question');
		$this->db->from('quiz_choice1');

		//$this->db->order_by('m.m_name','asc');
		$query = $this->db->get();
		return $query->result();


		// $query = $this->db->query("SELECT * FROM quiz_choice");

		// foreach ($query->result_array() as $row) {
		// 	echo $row['ca_quiz'];
		// }
		// return $query->result();
	}

	public function showquestion2()
	{
		$this->db->select('quiz_ID,ca_quiz,question,img_question');
		$this->db->from('quiz_choice2');
		$query = $this->db->get();
		return $query->result();
	}

	public function showquestion3()
	{
		$this->db->select('quiz_ID,ca_quiz,question,img_question');
		$this->db->from('quiz_choice3');
		$query = $this->db->get();
		return $query->result();
	}
	public function showquestion4()
	{
		$this->db->select('quiz_ID,ca_quiz,question,img_question');
		$this->db->from('quiz_choice4');
		$query = $this->db->get();
		return $query->result();
	}
	public function showquestion5()
	{
		$this->db->select('quiz_ID,ca_quiz,question,img_question');
		$this->db->from('quiz_choice5');
		$query = $this->db->get();
		return $query->result();
	}


	public function read($quiz_ID)
	{
		$this->db->select('*');
		$this->db->from('quiz_choice1');
		$this->db->where('quiz_ID', $quiz_ID);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			$data = $query->row();
			return $data;
		}
		return FALSE;
	}
	public function read2($quiz_ID)
	{
		$this->db->select('*');
		$this->db->from('quiz_choice2');
		$this->db->where('quiz_ID', $quiz_ID);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			$data = $query->row();
			return $data;
		}
		return FALSE;
	}
	public function read3($quiz_ID)
	{
		$this->db->select('*');
		$this->db->from('quiz_choice3');
		$this->db->where('quiz_ID', $quiz_ID);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			$data = $query->row();
			return $data;
		}
		return FALSE;
	}
	public function read4($quiz_ID)
	{
		$this->db->select('*');
		$this->db->from('quiz_choice4');
		$this->db->where('quiz_ID', $quiz_ID);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			$data = $query->row();
			return $data;
		}
		return FALSE;
	}
	public function read5($quiz_ID)
	{
		$this->db->select('*');
		$this->db->from('quiz_choice5');
		$this->db->where('quiz_ID', $quiz_ID);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			$data = $query->row();
			return $data;
		}
		return FALSE;
	}

	public function editupdate()
	{
		$config['upload_path'] = './img/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('img')) {
			$data = $this->upload->data();
			
			$data = array(
				'ca_quiz' => $this->input->post('selectunit'),
				'question' => $this->input->post('questionadd'),
				'choice1' => $this->input->post('c1'),
				'choice2' => $this->input->post('c2'),
				'choice3' => $this->input->post('c3'),
				'answer' => $this->input->post('ans'),

			);
			$this->db->where('quiz_ID', $this->input->post('quiz_ID'));
			$this->db->update('quiz_choice1', $data);
		} else  {
			$data = $this->upload->data();
			$filename = $data['file_name'];
			$data = array(
				'ca_quiz' => $this->input->post('selectunit'),
				'question' => $this->input->post('questionadd'),
				'img_question' => $filename,
				'choice1' => $this->input->post('c1'),
				'choice2' => $this->input->post('c2'),
				'choice3' => $this->input->post('c3'),
				'answer' => $this->input->post('ans'),

			);
			$this->db->where('quiz_ID', $this->input->post('quiz_ID'));
			$this->db->update('quiz_choice1', $data);
		}
	}

	
	public function editupdate2()
	{
		$config['upload_path'] = './img/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('img')) {
			$data = $this->upload->data();
			
			$data = array(
				'ca_quiz' => $this->input->post('selectunit'),
				'question' => $this->input->post('questionadd'),
				'choice1' => $this->input->post('c1'),
				'choice2' => $this->input->post('c2'),
				'choice3' => $this->input->post('c3'),
				'answer' => $this->input->post('ans'),

			);
			$this->db->where('quiz_ID', $this->input->post('quiz_ID'));
			$this->db->update('quiz_choice2', $data);
		} else  {
			$data = $this->upload->data();
			$filename = $data['file_name'];
			$data = array(
				'ca_quiz' => $this->input->post('selectunit'),
				'question' => $this->input->post('questionadd'),
				'img_question' => $filename,
				'choice1' => $this->input->post('c1'),
				'choice2' => $this->input->post('c2'),
				'choice3' => $this->input->post('c3'),
				'answer' => $this->input->post('ans'),

			);
			$this->db->where('quiz_ID', $this->input->post('quiz_ID'));
			$this->db->update('quiz_choice2', $data);
		}
	}
	
	public function editupdate3()
	{
		$config['upload_path'] = './img/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('img')) {
			$data = $this->upload->data();
			
			$data = array(
				'ca_quiz' => $this->input->post('selectunit'),
				'question' => $this->input->post('questionadd'),
				'choice1' => $this->input->post('c1'),
				'choice2' => $this->input->post('c2'),
				'choice3' => $this->input->post('c3'),
				'answer' => $this->input->post('ans'),

			);
			$this->db->where('quiz_ID', $this->input->post('quiz_ID'));
			$this->db->update('quiz_choice3', $data);
		} else  {
			$data = $this->upload->data();
			$filename = $data['file_name'];
			$data = array(
				'ca_quiz' => $this->input->post('selectunit'),
				'question' => $this->input->post('questionadd'),
				'img_question' => $filename,
				'choice1' => $this->input->post('c1'),
				'choice2' => $this->input->post('c2'),
				'choice3' => $this->input->post('c3'),
				'answer' => $this->input->post('ans'),

			);
			$this->db->where('quiz_ID', $this->input->post('quiz_ID'));
			$this->db->update('quiz_choice3', $data);
		}
	}
	
	public function editupdate4()
	{
		$config['upload_path'] = './img/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('img')) {
			$data = $this->upload->data();
			
			$data = array(
				'ca_quiz' => $this->input->post('selectunit'),
				'question' => $this->input->post('questionadd'),
				'choice1' => $this->input->post('c1'),
				'choice2' => $this->input->post('c2'),
				'choice3' => $this->input->post('c3'),
				'answer' => $this->input->post('ans'),

			);
			$this->db->where('quiz_ID', $this->input->post('quiz_ID'));
			$this->db->update('quiz_choice4', $data);
		} else  {
			$data = $this->upload->data();
			$filename = $data['file_name'];
			$data = array(
				'ca_quiz' => $this->input->post('selectunit'),
				'question' => $this->input->post('questionadd'),
				'img_question' => $filename,
				'choice1' => $this->input->post('c1'),
				'choice2' => $this->input->post('c2'),
				'choice3' => $this->input->post('c3'),
				'answer' => $this->input->post('ans'),

			);
			$this->db->where('quiz_ID', $this->input->post('quiz_ID'));
			$this->db->update('quiz_choice4', $data);
		}
	}

	
	public function editupdate5()
	{
		$config['upload_path'] = './img/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('img')) {
			$data = $this->upload->data();
			
			$data = array(
				'ca_quiz' => $this->input->post('selectunit'),
				'question' => $this->input->post('questionadd'),
				'choice1' => $this->input->post('c1'),
				'choice2' => $this->input->post('c2'),
				'choice3' => $this->input->post('c3'),
				'answer' => $this->input->post('ans'),

			);
			$this->db->where('quiz_ID', $this->input->post('quiz_ID'));
			$this->db->update('quiz_choice5', $data);
		} else  {
			$data = $this->upload->data();
			$filename = $data['file_name'];
			$data = array(
				'ca_quiz' => $this->input->post('selectunit'),
				'question' => $this->input->post('questionadd'),
				'img_question' => $filename,
				'choice1' => $this->input->post('c1'),
				'choice2' => $this->input->post('c2'),
				'choice3' => $this->input->post('c3'),
				'answer' => $this->input->post('ans'),

			);
			$this->db->where('quiz_ID', $this->input->post('quiz_ID'));
			$this->db->update('quiz_choice5', $data);
		}
	}




	
}
