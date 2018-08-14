<?php



class Ctr_nerit extends CI_Controller {

  public function index() {




    //carrega o model para query do bd
    $this->load->model('model_nerit');


    $msg_erro = array();

    if ($_POST) {
            // cria variáveis para receber os conteúdo da caixa de entrada de dados do formulário
      $nome = $this->input->post('nome');
      $telefone = $this->input->post('telefone');
      $endereco= $this->input->post('endereco');
      $email = $this->input->post('email');


              // se o campo de nome estiver vazio, exibe mensagem de erro
      if ( empty($nome) || empty($telefone) || empty($endereco) || empty($email) ) {
        $msg_erro[] = 'Existe campo de preenchimento obrigatório vazio, favor preencher para prosseguir com o cadastro.';
      }

                     // gravando dados em uma array, para persistir 
      if ( empty ($msg_erro) ) {
        $dado = array(
          'nome' => $nome,
          'email' => $email,
          'endereco' => $endereco,
          'telefone' => $telefone,


        );



                 //persistindo dados no banco
        $this->model_nerit->add_poke($dado);
       $this->session->set_flashdata('msg', "Pokemon cadastrado com Sucesso!");



      }
    }
    $dado = array();

    $dado = $this->model_nerit->ultimo_id();


    if(isset($_POST["checkbox"])) {

// Faz um loop no Array de checkbox

      foreach($_POST["checkbox"] as $key => $value) {


        $this->model_nerit->add_pokemon_com_tipo($dado,$value);
        $this->session->set_flashdata('msg', "Pokemon cadastrado com Sucesso!");


     
          

      }

    } 



    $user = $this->session->all_userdata();
    $msg = $this->session->flashdata('msg');
    $this->load->view('inc/cab_html', array('msg_erro'=>$msg_erro));
    $this->load->view('nerit_view', array('msg'=>$msg, 'nome'=>$nome, 'endereco'=>$endereco, 'telefone'=>$telefone, 'email'=>$email));
    $this->load->view('inc/rod_html');
  }
}
/*Feito por: Igor Costa. Futuro Estagiário Nerit (amem ash). Agosto 2018*/