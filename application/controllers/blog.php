<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index()
	{
        $dadosempresa['empresa'] = $this->db->get('empresa')->result();

        $this->load->view('HTML_header', $dadosempresa);
		$this->load->view('header', $dados);
		$this->load->view('contato');
		$this->load->view('footer');
		$this->load->view('HTML_footer');
	}
}
