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
    }
?>
