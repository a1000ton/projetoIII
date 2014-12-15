 <?php

    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Cursos extends CI_Controller {
        public function __construct(){
	       parent::__construct();
        }

        public function index(){
            $dados['cursos'] = $this->db->get('cursos')->result();

            $this->load->view('administracao/HTML_header');
            $this->load->view('administracao/menu');
            $this->load->view('administracao/corpocurso', $dados);
            $this->load->view('administracao/HTML_footer');
        }

        public function adicionar(){
                $data['curso'] = $this->input->post('curso');
                $data['slug_curso'] = $this->input->post('slug_curso');
                $data['descricao'] = $this->input->post('descricao');
                $data['imagem'] = $this->input->post('imagem');

                $this->db->insert('cursos',$data);

                redirect(base_url()."administracao/cursos");
        }

        public function editar($id){

            $this->db->where('id_curso',$id);
            $data['cursos'] = $this->db->get('cursos')->result();

            $this->load->view('administracao/HTML_header');
            $this->load->view('administracao/menu');
            $this->load->view('administracao/corpocursosedit', $data);
            $this->load->view('administracao/HTML_footer');

        }

        public function editarcompleto($id){
            $this->db->where('id_curso',$id);

            $data['curso'] = $this->input->post('curso');
            $data['slug_curso'] = $this->input->post('slug_curso');
            $data['descricao'] = $this->input->post('descricao');
            $data['imagem'] = $this->input->post('imagem');

            $this->db->where('id_curso',$id);
            $this->db->update('cursos',$data);

            redirect(base_url()."administracao/cursos");

        }

        public function excluir($id){
            $this->db->where('id_curso', $id);
            $this->db->delete('cursos');
            redirect(base_url().'administracao/cursos');
        }
    }
?>
