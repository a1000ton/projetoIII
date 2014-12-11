 <?php

    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Empresa extends CI_Controller {
        public function __construct(){
	       parent::__construct();
        }

        public function index(){
            $dados['empresa'] = $this->db->get('empresa')->result();

            $this->load->view('administracao/HTML_header');
            $this->load->view('administracao/menu');
            $this->load->view('administracao/corpoempresa', $dados);
            $this->load->view('administracao/HTML_footer');
        }

        public function editar($id){
            $this->db->where('id_empresa',$id);

            $data['logo'] = $this->input->post('logo');
            $data['rua'] = $this->input->post('rua');
            $data['cidade'] = $this->input->post('cidade');
            $data['email'] = $this->input->post('email');
            $data['telefone'] = $this->input->post('telefone');

            $this->db->where('id_empresa',$id);
            $this->db->update('empresa',$data);

            redirect(base_url()."administracao/empresa");

        }
    }
?>
