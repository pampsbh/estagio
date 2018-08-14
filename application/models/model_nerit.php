<?php

class Model_nerit extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function get_pokemon() {
         $this->db->select('cadastro.*');// seleciona a tabela
         // $this->db->order_by('vinculo.descricao');

       // $this->db->order_by ('id_vinculo', 'NULL');   // coloca os elementos na ordem de ativos para inativos
      // $this->db->order_by('id_vinculo','ASC');   // coloca os elementos do campo em ordem crescente
        $dados = $this->db->get('cadastro');   // captura os dados e armazena na variável
        return $dados->result();    // retorna para a função a variável com os dados capturados
    }
    // add pokemon
    function add_poke($dado){
    	$this->db->set($dado);

    	return $this->db->insert('cadastro', $dados);
    }
    // busca tipo
    function get_tipo() {
    	$this->db->select('tag.*');
    	$dados = $this->db->get('tag');
    	return $dados->result();
    }

    function ultimo_id(){
    	$maxid = 0;
    	$row = $this->db->query('SELECT MAX(idcadastro) AS `maxid` FROM `cadastro`')->row();
    	if ($row) {
    		$maxid = $row->maxid; 
    	}

    	return $maxid;


    }

    function deleta_pokemon($dados) { 
    
        $this->db->where('cadastro_idcadastro',$dados);
       $this->db->delete('cadastro_has_tag');
       $this->db->where('idcadastro',$dados);
       $this->db->delete('cadastro');  
 

    }

    function pesquisa_nome($dados){
        $this->db->select('cadastro.*');
        $this->db->where('nome',$dados);
        $aux = $this->db->get('cadastro');
        return $aux->result();
    }

    function pesquisa_tag($dados,$tag){
        $this->db->select('cadastro_has_tag.*');
        $this->db->where('cadastro_idcadastro',$dados);
        $this->db->where('tag_idtag',$tag);
        $aux = $this->db->get('cadastro_has_tag');
        return $aux->result();
    }

function retorna_pokemon_com_tipo($dado){
    $this->db->select('cadastro_has_tag.*'); //seleciona a tabela que possui pokemons com a tag
    $this->db->where('cadastro_idcadastro',$dado); // compara
     $aux = $this->db->get('cadastro_has_tag'); // caso sucesso manda pra aux o resultado

        return $aux->result();


}

function retorna_pokemon_com_tag($dado){
    $this->db->select('cadastro_has_tag.*'); //seleciona a tabela que possui pokemons com a tag
    $this->db->where('tag_idtag',$dado); // compara
     $aux = $this->db->get('cadastro_has_tag'); // caso sucesso manda pra aux o resultado

        return $aux->result();


}

function get_tipo_por_id($dado){
    $this->db->select('tag.*');
    $this->db->where('idtag',$dado);
    $aux= $this->db->get('tag.tipo');
    return $aux->result();



}




    function retorna_id($dados){

        $this->db->select('cadastro.*');      // seleciona a tabela
        $this->db->where('nome', $dados);
        $b= $this->db->get('cadastro');     // captura os dados respectivos do 'id' e armazena na variável
        return $b->result();    
    }

function getid($nome) {

    echo 'dentro do getit';
    echo $nome;
        $this->db->select('cadastro.*');
        $this->db->where('nome', $nome);
        $id = $this->db->get('cadastro');
        return $id->result();
    }




    function add_pokemon_com_tipo($poke,$tipo){
    

        $v = array('cadastro_idcadastro' => $poke,
                    'tag_idtag' => $tipo);

       return $this->db->insert('cadastro_has_tag',$v);

    }


    function buscatipo($tipo) {
    	$this->db->select('tag.*');
    	$this->db->where ('tag.tipo', $tipo);
    	$vinculos = $this->db-> get('tag');
    	return $vinculos->result();
    }



    


}

/* Alterações feita por: Igor Costa */