<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contato extends CI_Controller {

	public function index()
	{
        $dadosempresa['empresa'] = $this->db->get('empresa')->result();

        $this->load->view('HTML_header', $dadosempresa);
		$this->load->view('header');
		$this->load->view('contato');
		$this->load->view('footer' , $dadosempresa);
		$this->load->view('HTML_footer');
	}
}
