<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	
	public function index()
	{
		$this->load->view('psp/coba');
	}
	public function modul()
	{
		$this->load->view('psp/modul');
	}

	public function video7()
	{
		$this->load->view('psp/video_modul');
	}

	public function video8()
	{
		$this->load->view('psp/video_modul8');
	}

	public function produk()
	{
		$this->load->view('psp/produk');
	}

	public function profile()
	{
		$this->load->view('psp/profile');
	}

	public function tentang()
	{
		$this->load->view('psp/tentang');
	}
}
