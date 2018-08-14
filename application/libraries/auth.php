<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Auth
{
  private $CI; // Receber� a inst�ncia do Codeigniter
  private $permissaoView = 'sem-permissao'; // Recebe o nome da view correspondente � p�gina informativa de usu�rio sem permiss�o de acesso
  private $loginView = 'login'; // Recebe o nome da view correspondente � tela de login
  public function __construct(){
    /*
     * Criamos uma inst�ncia do CodeIgniter na vari�vel $CI
     */
    $this->CI = &get_instance();
  }
  function CheckAuth($classe,$metodo)
  {
    /*
     * Pesquisa a classe e o m�todo passados como par�metro em CheckAuth
     */
    $array = array('classe' => $classe, 'metodo' => $metodo);
    $qryMetodos = $this->CI->db->where($array)->get('metodos');
    $resultMetodos = $qryMetodos->result();
    /*
     * Caso o m�todo passado ainda n�o conste na tabela "metodos"
     * ele � inserido atrav�s de $this->CI->db->insert('metodos', $data);
     */
    if(count($resultMetodos)==0){
      $data = array(
        'classe' => $classe ,
        'metodo' => $metodo ,
        'identificacao' => $classe .  '/' . $metodo,
        'privado' => 1
      );
      $this->CI->db->insert('metodos', $data);
      redirect(base_url($classe . '/' . $metodo), 'refresh');
    }
    else{
      /*
       * Se o m�todo ja existir na tabela, ent�o recupera se ele � p�blico ou privado
       * O m�todo sendo p�blico (0), ent�o n�o verifica o login e libera o acesso
       * Mas se for privado (1) ent�o � verificado o login e a permiss�o do usu�rio
       */
      if($resultMetodos[0]->privado==0){
        return false;
      }
      else{
        $nome = $this->CI->session->userdata('nome');
        $logged_in = $this->CI->session->userdata('logged');
        $data = $this->CI->session->userdata('data');
        $email = $this->CI->session->userdata('email');
        $id_usuario =  $this->CI->session->userdata('id_usuario');
        $id_metodo = $resultMetodos[0]->id;
        /*
         * Se o usu�rio estiver logado faz a verifica��o da permiss�o
         * caso contr�rio redireciona para uma tela de login
         */
        if($nome && $logged && $id_usuario){
          $array = array('id_metodo' => $id_metodo, 'id_usuario' => $id_usuario);
          $qryPermissoes = $this->CI->db->$this->CI->db->where($array)->get('permissoes');
          $resultPermissoes = $qryPermissoes->result();
          /*
           * Se o usu�rio n�o tiver a permiss�o para acessar o m�todo,
           * ou seja, n�o estiver relacionado na tabela "permissoes",
           * ele deve ser redirecionado para uma tela informando que
           * n�o tem permiss�o de acesso;
           * caso contr�rio o acesso � liberado
           */
          if(count($resultPermissoes)==0){
            redirect($this->permissaoView, 'refresh');
          }
          else{
            return true;
          }
        }
        else{
          redirect($this->loginView, 'refresh');
        }
      }
    }
  }
}