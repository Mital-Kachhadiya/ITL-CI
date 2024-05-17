<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Elibrary extends CI_Controller {
	public function index()
	{
		$this->load->view('elibrary');
	}
}
