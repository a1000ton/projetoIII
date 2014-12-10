 <?php

    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Blocos extends CI_Controller {
        public function __construct(){
	       parent::__construct();
        }

        public function index(){
            $dados['blocos'] = $this->db->get('blocos')->result();

            $this->load->view('administracao/HTML_header');
            $this->load->view('administracao/menu');
            $this->load->view('administracao/corpoblocos', $dados);
            $this->load->view('administracao/HTML_footer');
        }

        public function editar($id){
            $this->db->where('id_bloco',$id);

            $data['titulo'] = $this->input->post('titulo');
            $data['titulo2'] = $this->input->post('titulo2');
            $data['titulo3'] = $this->input->post('titulo3');
            $data['descricao'] = $this->input->post('descricao');
            $data['descricao2'] = $this->input->post('descricao2');
            $data['descricao3'] = $this->input->post('descricao3');

            $this->db->where('id_bloco',$id);
            $this->db->update('blocos',$data);

            redirect(base_url()."administracao/blocos");

        }

    }
?>
