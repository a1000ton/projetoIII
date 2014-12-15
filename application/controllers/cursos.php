<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cursos extends CI_Controller {

	public function index()
	{
        $dadosempresa['empresa'] = $this->db->get('empresa')->result();
        $dadoscursos['cursos'] = $this->db->get('cursos', 6)->result();

		$this->load->view('HTML_header');
		$this->load->view('header');
		$this->load->view('cursos', $dadoscursos);
		$this->load->view('footer' , $dadosempresa);
		$this->load->view('HTML_footer');
	}
}
