<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
	
	public function index()
	{
		$this->load->view('psp/coba');
	}

    public function modul()
	{
		$this->load->view('psp/modul');
	}

}