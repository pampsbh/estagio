<script src="<?php echo site_url(); ?>/assets/js/additional-methods.min.js"></script>

<!-- Define o conteúdo a ser exibido na página web (formulário) -->
<div class="page-content">

    <!-- Faz chamada à função de exibição de mensagem de sucesso no cadastramento -->
	<?php
    if (!empty($msg)) {
        ?>
        <div class="alert alert-success">
            <strong>Atenção!</strong> <?php echo $msg; ?>
        </div>
        <?php
    }
    ?>

	<!-- Faz chamada à função de exibição de mensagem de erro -->
    <?php
    if (!empty($msg_erro)) {
        ?>
        <div class="alert alert-danger">
            <strong>Atenção!</strong> <br><?php echo implode('<br>', $msg_erro) ?>
        </div>
        <?php
    }
    ?>    
	
    <!-- Define o cabeçalho da página -->
	<div class="page-header center">
        <h1>
            Pesquisa de Pokemon
           
            </small>
        </h1>		
    </div><!-- /.page-header -->
	
	<!-- Define submenu de cadastramento e consulta -->
	<div class="row">
	
		<!-- Define cabeçalho de cadastramento -->
		
		<!-- Define os campos de entrada para cadastramento de dados -->
		<form class="form-horizontal" action="" method="post" id="tabprof"> 
			<fieldset> 
			
				<!-- Define campo Nome -->
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nome: <b class="red"> * </b> </label>
					<div class="col-sm-9">
						<input type="text" id="form-field-1" name ="nome" value="<?php echo ($nome);?>" placeholder="Digite o nome" maxlength="90" class="col-xs-10 col-sm-11" />
					</div>
				</div>

				<!-- Define campo e-mail -->
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1" for="email"> E-mail:<b class="red"> * </b> </label>
					<div class="col-sm-9">
						<input type="text" id="form-field-1" name ="email" value="" id="email" placeholder="Digite o e-mail:" maxlength="90" class="col-xs-10 col-sm-5" />
					</div>
				</div>

			
				

			


				<!-- Define os campos de entrada para cadastramento de dados -->
<form class="form-horizontal" action="" method="post" id="tabprof"> 
	<fieldset> 
		<div class="table-responsive">
			<table border="1" width="500px">
				<!-- nomes das colunas da tabela -->
				<thead>

					<!-- Define nome da tabela -->
					<tr>
						<td colspan="4" class="table-header center">Tipo</td><!-- comando colspan mescla as células -->
					</tr>
					<!-- Define nomes das colunas da tabela -->
					<tr>



					</tr>
				</thead>
				<!-- corpo da tabela -->
				<tbody>
					<tr>
						<?php  $v = $this->model_nerit->get_tipo();
						foreach ($v as $item =>$value) { ?>
							<tr>  
								<td class="center"><?php echo $v[$item]->tipo; ?></td>
								<td class="center">
									<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
			
											<input type="checkbox" name="checkbox[]" value="<?php echo $v[$item]->idtag ?> ">
										</a>


									</div>
								</td>
							</tr>
						<?php } ?>
					</tr>
				</tbody>
			</div>
		</a>
		</table>
	
		<!-- Define botão de cadastramento na tabela -->
				<div class="clearfix form-actions">
					<div class="col-md-offset-3 col-md-9">
						<input type="submit" class="btn btn-primary" value="Pesquisar" name="finalizar">
			
					</div>
				</div>

				

			




<script type="text/javascript">
	$('.telefone').mask("(99)9999-9999");  
</script>

<!--Feito por: Igor Costa. Futuro Estagiário Nerit (amem ash). Agosto 2018-->