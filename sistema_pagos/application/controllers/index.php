<?php

if (!defined('BASEPATH'))
    die();

class Index extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('utils');
    }

    public function index() {
        $data = null;
        $this->utils->load_template("index", $data);
    }

}

/* End of file index.php */
/* Location: ./application/controllers/index.php */
