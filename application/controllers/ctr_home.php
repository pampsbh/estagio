<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ctr_home extends CI_Controller {

    public function index() {
        $this->load->model('model_nerit');

      
        $msg = $this->session->flashdata('msg');
        $msg_erro = array();

        
  
         $this->load->view('home');
    }



}
/*Feito por: Igor Costa. Futuro Estagiário Nerit (amem ash). Agosto 2018*/