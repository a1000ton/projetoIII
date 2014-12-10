 <?php

    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Sobre extends CI_Controller {
        public function __construct(){
	       parent::__construct();
        }

        public function index(){
            $dados['sobre'] = $this->db->get('sobre')->result();

            $this->load->view('administracao/HTML_header');
            $this->load->view('administracao/menu');
            $this->load->view('administracao/corposobre', $dados);
            $this->load->view('administracao/HTML_footer');
        }

        public function editar($id){
            $this->db->where('id_sobre',$id);

            $data['titulo'] = $this->input->post('titulo');
            $data['descricao'] = $this->input->post('descricao');
            $data['imagem'] = $this->input->post('imagem');

            $this->db->where('id_sobre',$id);
            $this->db->update('sobre',$data);

            redirect(base_url()."administracao/sobre");

        }
    }
?>
