<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sobre extends CI_Controller {

	public function index()
	{
        $data['categorias'] = $this->db->get('categorias')->result();

		$this->load->view('HTML_header');
		$this->load->view('header', $data);
		$this->load->view('about');
		$this->load->view('footer');
		$this->load->view('HTML_footer');
	}
}
