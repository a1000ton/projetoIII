<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
        $dados['categorias'] = $this->db->get('categorias')->result();
        $dadoshome['slides'] = $this->db->get('slides')->result();
        $dadosbloco['blocos'] = $this->db->get('blocos')->result();
        $dadosempresa['empresa'] = $this->db->get('empresa')->result();

		$this->load->view('HTML_header', $dadosbloco);
		$this->load->view('header', $dados);
		$this->load->view('inicio', $dadoshome);
		$this->load->view('footer' , $dadosempresa);
		$this->load->view('HTML_footer');
	}
}
