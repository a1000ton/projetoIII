<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sobre extends CI_Controller {

	public function index()
	{
        $dados['categorias'] = $this->db->get('categorias')->result();
        $dadossobre['sobre'] = $this->db->get('sobre')->result();

		$this->load->view('HTML_header');
		$this->load->view('header', $dados);
		$this->load->view('sobre', $dadossobre);
		$this->load->view('footer');
		$this->load->view('HTML_footer');
	}
}
