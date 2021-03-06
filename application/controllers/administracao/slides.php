 <?php

    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Slides extends CI_Controller {
        public function __construct(){
	       parent::__construct();
        }

        public function index(){
            $data['slides'] = $this->db->get('slides')->result();

            $this->load->view('administracao/HTML_header');
            $this->load->view('administracao/menu');
            $this->load->view('administracao/corposlide', $data);
            $this->load->view('administracao/HTML_footer');
        }

        public function editar($id){
            $this->db->where('id_slide',$id);

            $data['titulo'] = $this->input->post('titulo');
            $data['titulo2'] = $this->input->post('titulo2');
            $data['descricao'] = $this->input->post('descricao');
            $data['descricao2'] = $this->input->post('descricao2');

            $this->db->where('id_slide',$id);
            $this->db->update('slides',$data);

            redirect(base_url()."administracao/slides");

        }
    }
?>
