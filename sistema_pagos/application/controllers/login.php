<?php

if (!defined('BASEPATH'))
    die();

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('utils');
    }

    public function index() {
        $data = null;
        $this->utils->load_template("login/login_form", $data);
    }

}

/* End of file index.php */
/* Location: ./application/controllers/index.php */
