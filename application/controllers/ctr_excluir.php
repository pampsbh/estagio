<?php



class Ctr_excluir extends CI_Controller {

  public function index() {
    $this->load->model('model_nerit');

    $id = array();

    if ($_POST) {

  

      

       if(isset($_POST["checkbox"])) { //se checkbox tiver marcado

// Faz um loop no Array de checkbox

      foreach($_POST["checkbox"] as $key => $value) {

//print_r($value);
        $this->model_nerit->deleta_pokemon($value);
            $this->session->set_flashdata('msg', "Pokemon deletado com Sucesso!");


     
          

      }

    } 

     else
     {

       $msg_erro[] = 'Existe campo de preenchimento obrigatório vazio, favor preencher para prosseguir com a exclusão';
     }

   



   }


 








   $user = $this->session->all_userdata();
   $msg = $this->session->flashdata('msg');
   $this->load->view('inc/cab_html', array('msg_erro'=>$msg_erro));
   $this->load->view('excluir_view', array('msg'=>$msg,  'key'=>$key ));
   $this->load->view('inc/rod_html');
 }
}
/*Feito por: Igor Costa. Futuro Estagiário Nerit (amem ash). Agosto 2018*/