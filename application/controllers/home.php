<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
        $data['categorias'] = $this->db->get('categorias')->result();

		$this->load->view('HTML_header');
		$this->load->view('header', $data);
		$this->load->view('inicio');
		$this->load->view('footer');
		$this->load->view('HTML_footer');
	}
}
