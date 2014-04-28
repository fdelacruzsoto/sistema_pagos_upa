<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Utils {

    function __construct() {
        $this->CI = & get_instance();
    }

    function load_template($page_path, $data) {
        //Level validation here
        //Login validation here
        $this->CI->load->view("include/header");
        $this->CI->load->view("include/menu");
        $this->search_view($page_path, $data);
        $this->CI->load->view("include/footer");
        
    }

    function search_view($page_path, $data) {
        //Search if the page exist
        if (!file_exists('application/views/' . $page_path . '.php'))
            $this->CI->load->view("include/stop");
        else
            $this->CI->load->view($page_path, $data);
    }

}

/* End of file Utils.php */
    /* Location: ./application/libraries/Utils.php */