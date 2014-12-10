<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contato extends CI_Controller {

	public function index()
	{
        $dados['categorias'] = $this->db->get('categorias')->result();
        $dadosempresa['empresa'] = $this->db->get('empresa')->result();

        $this->load->view('HTML_header', $dadosempresa);
		$this->load->view('header', $dados);
		$this->load->view('contato');
		$this->load->view('footer' , $dadosempresa);
		$this->load->view('HTML_footer');
	}
}
