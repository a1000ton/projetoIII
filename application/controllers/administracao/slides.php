 <?php

    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Slides extends CI_Controller {
        public function __construct(){
	       parent::__construct();
        }

        public function index(){
            $this->load->view('administracao/HTML_header');
            $this->load->view('administracao/menu');
            $this->load->view('administracao/corposlide');
            $this->load->view('administracao/HTML_footer');
        }
    }
?>
