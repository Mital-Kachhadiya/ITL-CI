<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->config('email');
		$this->load->library('email');
	  }


	public function index()
	{
		$this->load->view('contact');
	}



		public function send_inquiry() {

				// Validation passed, send email
				$name = $this->input->post('name');
				$email = $this->input->post('email');
				$subject = $this->input->post('subject');
				$message = $this->input->post('message');

				$viewData = array();
                $viewData['name'] = $name;
                $viewData['email'] = $email;
                $viewData['subject'] = $subject;
                $viewData['message'] = $message;

				$message = $this->load->view('email/inquiry',$viewData,true);

				$to = $this->config->item('smtp_user');
                $this->email->set_newline("\r\n");
                $this->email->from($email);
                $this->email->to('mitalkachhadiya019@gmail.com');
                $this->email->subject("ITL- New Inquiry");
                $this->email->message($message);
				
				
				
				if ($this->email->send()) {
					// Email sent successfully
					$response['success'] = true;
					echo json_encode($response);
				} else {
					// Error sending email
					$response['success'] = false;
					$response['errors'] = 'Error sending email.';
					echo json_encode($response);
				}
			
		}
	
}
