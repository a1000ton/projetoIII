<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cursos extends CI_Controller {

	public function index()
	{
        $dados['categorias'] = $this->db->get('categorias')->result();
        $dadosempresa['empresa'] = $this->db->get('empresa')->result();

		$this->load->view('HTML_header');
		$this->load->view('header', $dados);
		$this->load->view('cursos');
		$this->load->view('footer' , $dadosempresa);
		$this->load->view('HTML_footer');
	}
}
