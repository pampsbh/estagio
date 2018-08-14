<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ctr_error extends CI_Controller {

    public function index() {


    }

    public function navegador() {

        $user = $this->session->all_userdata();        
        $this->load->view('inc/cab_error');
        $this->load->view('error/e_navegador', array('user' => $user));
        $this->load->view('inc/rod_error');

    }

}

