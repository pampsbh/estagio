<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Pokedex Web</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Página de Entrada">
        <meta name="Igor Costa" content="Pokedex">

        <!-- carregando bootstrap -->
        <link href="<?php echo site_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/font-awesome.min.css" />

        

        <!-- fontes -->
        <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/ace-fonts.css" />

        <!-- ace styles -->
        <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/ace.min.css" />
        <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/ace-rtl.min.css" />

      
    
    
        
    </head>

    <div class="center">
    <body class="login-layout.">
        <div class="main-container">
            <div class="main-content.">
                <div class="space-100"></div>
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="login-container">
                            <h2 class="login-container-heading">
                                <div class="col-sm-15 col-sm-offset-0">
                                     <div class="clearfix center">
                                     <h1 class="grey">
                                         <div class="center">
                                        
                                                
                                                Pokedex Web
                                            </h1>
                                </div>
                                </div>
                                </div>
                            </h2>
                            
                            <div class="center">
                                <h6 class="red">
                                    <p> </p><b>Plataforma de Cadastro de Pokemon<br/> very serious</b></span>
                                </h6>
                            </div>


                            <div class="space-0"></div>


                            <div class="position-relative">
                                <div id="login-box" class="login-box visible widget-box no-border">
                                    <div class="widget-body">
                                        <div class="widget-main">
                                            <h4 class="header greyr">
                                                
                                                Escolha uma opção
                                            </h4>
                                            <div class="space-6"></div>
                                            
                                      <a href="ctr_nerit" class="infobox infobox-grey pointer"  data-step="7" data-intro=""> <!-- define link de referência do infobox -->
                    <!-- define ícone do infobox -->
                    <div class="infobox-icon"><img src="/nerit/assets/img/icones/totodile.png" alt="b" width="60" height="60" align="center"></div>
                    <!-- define nome do item do infobox -->
                    <div class="infobox-data"><div class="infobox-content"><h4 class="grey"><strong class="left">Cadastro </h4></strong></div></div>
                </a>
                
              
              
                                      <a href="ctr_excluir" class="infobox infobox-grey pointer"  data-step="7" data-intro=""> <!-- define link de referência do infobox -->
                    <!-- define ícone do infobox -->
                    <div class="infobox-icon"><img src="/nerit/assets/img/icones/Gengar.png" alt="" width="60" height="60" align="center"></div>
                    <!-- define nome do item do infobox -->
                    <div class="infobox-data"><div class="infobox-content"><h4 class="grey"><strong class="left">Excluir Pokemon</h4></strong></div></div>
                </a>
                                      <a href="ctr_pesquisar" class="infobox infobox-grey pointer"  data-step="7" data-intro=""> <!-- define link de referência do infobox -->
                    <!-- define ícone do infobox -->
                    <div class="infobox-icon"><img src="/nerit/assets/img/icones/pikachu.jpg" alt="" width="60" height="60" align="center"></div>
                    <!-- define nome do item do infobox -->
                    <div class="infobox-data"><div class="infobox-content"><h4 class="grey"><strong class="left">Pesquisa </h4></strong></div></div>
                </a>

                <div class="table-responsive">
            <table border="1" width="500px">
                <!-- nomes das colunas da tabela -->
                <thead>
                    <!-- Define nome da tabela -->
                    <tr>
                        <td colspan="4" class="table-header center">Pokemons</td><!-- comando colspan mescla as células -->
                    </tr>
                    <!-- Define nomes das colunas da tabela -->
                    <tr>
                        <th class="center">Nome</th>
                        <th class="center">Localização</th>
                        <th class="center">Tipo</th>
                    </tr>
                </thead>
                <!-- corpo da tabela -->
                <tbody>
                    <tr>
                        <?php  $v = $this->model_nerit->get_pokemon();
                           
                          foreach ($v as $item) { ?>
                            <tr>  
                                <td class="center"><?php echo $item->nome; ?></td>
                                <td class="center"><?php echo $item->endereco; ?></td> 
                          
                           <!--  <?php  $y = $this->model_nerit->retorna_pokemon_com_tipo($item); 
                                 foreach ($y as $w) { ?>
                                <td class="center"><?php  $aux = $this->model_nerit->get_tipo_por_id($w->tag_idtag);?> </td>
                              <?php   $tipo = $this->model_nerit->get_tipo_por_id($aux); 
                                if ($aux!=NULL)
                                {
                                print_r($aux);
                                } 
                                }

}
                                ?></td>}

                           
                       <?php  ?> -->
                      
                    </tr>

                </tbody>
              
            </div>
        </div>
    </div>
</div>



</h4>
</div>
</div>
</a>
</h4>
</div>
</div>
</a>
</h4>
</div>
</div>
</a>
</div>
</div>
</div>
</div>
</h1>
</div>
</div>
</h2>
</div>
</div>
</div>
</div>
</div>
</body>
</div>
</html>


                    


                                                   