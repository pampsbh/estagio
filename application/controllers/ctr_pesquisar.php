<?php



class Ctr_pesquisar extends CI_Controller {

  public function index() {
    $this->load->model('model_nerit');




    $msg_erro = array();

    if ($_POST) {
            // cria variáveis para receber os conteúdo da caixa de entrada de dados do formulário
      $nome = $this->input->post('nome');
      $email = $this->input->post('email');



              // se o campo de nome estiver vazio, exibe mensagem de erro
      if ( empty($nome)) {
        $msg_erro[] = 'Existe campo de preenchimento obrigatório vazio, favor preencher para prosseguir com a pesquisa.';
      }

                     // gravando dados em uma array, para persistir 
      if ( empty ($msg_erro) ) {
        $dado = array(
          'nome' => $nome,
       
        );

      }

        
        $a = $this->model_nerit->pesquisa_nome($nome);

   
        

       $this->session->set_flashdata('msg', "Pokemon Encontrado:".$a[0]->nome." Telefone:".$a[0]->telefone." Email".$a[0]->email); //resultado da pesquisa por nome. A array $a possui na posição 0 os dados




    } 

            if(isset($_POST["checkbox"])) { //se a checkbox for marcada

// Faz um loop no Array de checkbox

      foreach($_POST["checkbox"] as $key => $value) {
             $b = $this->model_nerit->pesquisa_tag($a[0]->idcadastro,$value);

             print_r($b[0]->tag_idtag);
             $w=$this->model_nerit->retorna_pokemon_com_tag($b[0]->tag_idtag);
             
          $this->session->set_flashdata('msg', "Pokemon Encontrado:".$a[0]->nome." Telefone:".$a[0]->telefone." Email".$a[0]->email."Tipo".$w[0]->tag_idtag);
     
          

      }

    } 
   




   $user = $this->session->all_userdata();
   $msg = $this->session->flashdata('msg');
   $this->load->view('inc/cab_html', array('msg_erro'=>$msg_erro));
   $this->load->view('pesquisar_view', array('msg'=>$msg,  ));
   $this->load->view('inc/rod_html');
  }
}
/*Feito por: Igor Costa. Futuro Estagiário Nerit (amem ash). Agosto 2018*/