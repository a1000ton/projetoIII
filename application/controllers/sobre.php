<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sobre extends CI_Controller {

	public function index()
	{
        $dadossobre['sobre'] = $this->db->get('sobre')->result();
        $dadosempresa['empresa'] = $this->db->get('empresa')->result();

		$this->load->view('HTML_header', $dadosempresa);
		$this->load->view('header');
		$this->load->view('sobre', $dadossobre);
		$this->load->view('footer');
		$this->load->view('HTML_footer');
	}
}
