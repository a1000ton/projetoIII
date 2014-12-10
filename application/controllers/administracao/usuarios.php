 <?php

    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Usuarios extends CI_Controller {
        public function __construct(){
	       parent::__construct();
        }

        public function index(){
            $dados['usuarios'] = $this->db->get('usuarios')->result();

            $this->load->view('administracao/HTML_header');
            $this->load->view('administracao/menu');
            $this->load->view('administracao/corpousuario', $dados);
            $this->load->view('administracao/HTML_footer');
        }

        public function adicionar(){
                $data['usuario'] = $this->input->post('usuario');
                $data['senha'] = $this->input->post('senha');

                $this->db->insert('usuarios',$data);

                redirect(base_url()."administracao/usuarios");
        }

        public function editar($id){

            $this->db->where('id_usuario',$id);
            $data['usuarios'] = $this->db->get('usuarios')->result();

            $this->load->view('administracao/HTML_header');
            $this->load->view('administracao/menu');
            $this->load->view('administracao/corpousuarioedit', $data);
            $this->load->view('administracao/HTML_footer');

        }

        public function editarcompleto($id){
            $this->db->where('id_usuario',$id);

            $data['usuario'] = $this->input->post('usuario');
            $data['senha'] = $this->input->post('senha');

            $this->db->where('id_usuario',$id);
            $this->db->update('usuarios',$data);

            redirect(base_url()."administracao/usuarios");

        }

        public function excluir($id){
            $this->db->where('id_usuario', $id);
            $this->db->delete('usuarios');
            redirect(base_url().'administracao/usuarios');
        }
    }
?>
