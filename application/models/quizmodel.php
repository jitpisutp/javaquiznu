<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class quizmodel extends CI_Model
{
	public function getQuestionsAll()
	{
		$query = $this->db->query("SELECT * FROM quiz_choice ORDER BY RAND() LIMIT 10" );

		foreach ($query->result_array() as $row) {
			echo $row['quiz_ID'];
		}
		return $query->result();

	}

	public function getQuestions()
	{
		$this->db->select("quiz_ID, img_question, question, choice1, choice2, choice3, answer");
		$this->db->from("quiz_choice1");
		$this->db->limit(10);
		$query = $this->db->get();
		return $query->result();

		$num_data_returned = $query->num_rows;

		if ($num_data_returned < 1) {
			echo "There is no data in the database";
			exit();
		}
	}

	public function getQuestions2()
	{
		$this->db->select("quiz_ID, img_question, question, choice1, choice2, choice3, answer");
		$this->db->from("quiz_choice2");
		$this->db->limit(10);
		$query = $this->db->get();
		return $query->result();

		$num_data_returned = $query->num_rows;

		if ($num_data_returned < 1) {
			echo "There is no data in the database";
			exit();
		}
	}

	public function getQuestions3()
	{
		$this->db->select("quiz_ID, img_question, question, choice1, choice2, choice3, answer");
		$this->db->from("quiz_choice3");
		$this->db->limit(10);
		$query = $this->db->get();
		return $query->result();

		$num_data_returned = $query->num_rows;

		if ($num_data_returned < 1) {
			echo "There is no data in the database";
			exit();
		}
	}

	public function getQuestions4()
	{
		$this->db->select("quiz_ID, img_question, question, choice1, choice2, choice3, answer");
		$this->db->from("quiz_choice4");
		$this->db->limit(10);
		$query = $this->db->get();
		return $query->result();

		$num_data_returned = $query->num_rows;

		if ($num_data_returned < 1) {
			echo "There is no data in the database";
			exit();
		}
	}

	public function getQuestions5()
	{
		$this->db->select("quiz_ID, img_question, question, choice1, choice2, choice3, answer");
		$this->db->from("quiz_choice5");
		$this->db->limit(10);
		$query = $this->db->get();
		return $query->result();

		$num_data_returned = $query->num_rows;

		if ($num_data_returned < 1) {
			echo "There is no data in the database";
			exit();
		}
	}




	
}
