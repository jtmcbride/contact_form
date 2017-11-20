<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$this->load->helper('cookie');
		if (isset($_COOKIE['flash'])) {
			$flash = $_COOKIE['flash'];
			delete_cookie('flash');
		}
		$data = array();
		switch ($_SERVER['REQUEST_METHOD']) {
			case 'POST':
				$insert_query = "INSERT INTO 
									contacts (email, name, message) 
								VALUES 
									(?, ? , ?)";
				$insert_values = array($_POST['email'], $_POST['name'], $_POST['message']);
				$added = $this->db->query($insert_query, $insert_values);
				$this->load->helper('url');
				if ($added) {
					setcookie('flash', "Thank you! Someone will be in touch shortly!");
				} else {
					setcookie('flash', "Something went wrong. Please try again.");
				}
				redirect('contact');
				break;
			case 'GET':
				if (isset($flash)) {
					$data = array('flash' => $flash);
				}
				$this->load->view('welcome_message', $data);
				break;
			default:
				$this->output->set_status_header(403);
		}
	}
}
