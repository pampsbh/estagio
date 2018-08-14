<?php
$usuario = $this->session->all_userdata();

?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>Pokedex Web</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description">
        <meta name="Igor Costa" content="Pokedex">
        <base href="<?php echo site_url(); ?>"/>
        

        <link href="<?php echo site_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/font-awesome.min.css" />
        <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/jquery-ui-1.10.3.custom.min.css" />
        <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/chosen.css" />
        <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/datepicker.css" />
        <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/bootstrap-timepicker.css" />
        <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/daterangepicker.css" />
       <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/colorpicker.css" /> 
        <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/ace-fonts.css" />
        <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/ace.min.css" />
        <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/ace-rtl.min.css" />
        <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/ace-skins.min.css" />
        <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/font-awesome-ie7.min.css" />
        <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/ace-ie.min.css" />
        <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/introjs.css" />
        <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/animate.css" />


        <script src="<?php echo site_url(); ?>assets/js/ace-extra.min.js"></script>

        <script type="text/javascript">
            window.jQuery || document.write("<script src='<?php echo site_url(); ?>assets/js/jquery-2.0.3.min.js'>" + "<" + "/script>");
        </script>

        <script type="text/javascript">
            if ("ontouchend" in document)
                document.write("<script src='<?php echo site_url(); ?>assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
        </script>

        <script type="text/javascript" src="<?php echo site_url(); ?>assets/js/highcharts/highcharts.js"></script>              

        <script type="text/javascript">
            window.jQuery || document.write("<script src='<?php echo site_url(); ?>assets/js/jquery-1.10.2.min.js'>" + "<" + "/script>");
        </script>      

        <script type="text/javascript">
            if ("ontouchend" in document)
                document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
        </script>
        <script src="<?php echo site_url(); ?>assets/js/jquery.jscroll.min.js"></script>
        <script src="<?php echo site_url(); ?>assets/js/wow.min.js"></script>
        <script src="<?php echo site_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo site_url(); ?>assets/js/typeahead-bs2.min.js"></script>
        <script src="<?php echo site_url(); ?>assets/js/fuelux/data/fuelux.tree-sampledata.js"></script>
        <script src="<?php echo site_url(); ?>assets/js/fuelux/fuelux.tree.min.js"></script>
        <script src="<?php echo site_url(); ?>assets/js/fuelux/fuelux.wizard.min.js"></script>
        <script src="<?php echo site_url(); ?>assets/js/jquery.validate.min.js"></script>
        <script src="<?php echo site_url(); ?>assets/js/bootbox.min.js"></script>
        <script src="<?php echo site_url(); ?>assets/js/additional-methods.min.js"></script>
        <script src="<?php echo site_url(); ?>assets/js/jquery-ui-1.10.3.custom.min.js"></script>
        <script src="<?php echo site_url(); ?>assets/js/jquery.ui.touch-punch.min.js"></script>
        <script src="<?php echo site_url(); ?>assets/js/chosen.jquery.min.js"></script>
        <script src="<?php echo site_url(); ?>assets/js/fuelux/fuelux.spinner.min.js"></script>
        <script src="<?php echo site_url(); ?>assets/js/date-time/bootstrap-datepicker.min.js"></script>
        <script src="<?php echo site_url(); ?>assets/js/date-time/bootstrap-timepicker.min.js"></script>
        <script src="<?php echo site_url(); ?>assets/js/date-time/moment.min.js"></script>
        <script src="<?php echo site_url(); ?>assets/js/date-time/daterangepicker.min.js"></script>
        <script src="<?php echo site_url(); ?>assets/js/bootstrap-colorpicker.min.js"></script>
        <script src="<?php echo site_url(); ?>assets/js/jquery.knob.min.js"></script>
        <script src="<?php echo site_url(); ?>assets/js/jquery.autosize.min.js"></script>
        <script src="<?php echo site_url(); ?>assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
        <script src="<?php echo site_url(); ?>assets/js/jquery.maskedinput.min.js"></script>
        <script src="<?php echo site_url(); ?>assets/js/bootstrap-tag.min.js"></script>
        <script src="<?php echo site_url(); ?>assets/js/jquery.maskedinput.js"></script>        
        <script src="<?php echo site_url(); ?>assets/js/jquery.gritter.min.js"></script>        
        <script src="<?php echo site_url(); ?>assets/js/jquery.slimscroll.min.js"></script>        
        <script src="<?php echo site_url(); ?>assets/js/jquery.easy-pie-chart.min.js"></script>        
        <script src="<?php echo site_url(); ?>assets/js/jquery.hotkeys.min.js"></script>        
        <script src="<?php echo site_url(); ?>assets/js/select2.min.js"></script>        
        <script src="<?php echo site_url(); ?>assets/js/x-editable/bootstrap-editable.min.js"></script>        
        <script src="<?php echo site_url(); ?>assets/js/x-editable/ace-editable.min.js"></script>        
        <script src="<?php echo site_url(); ?>assets/js/assets/js/html5shiv.js"></script>        
        <script src="<?php echo site_url(); ?>assets/js/assets/js/respond.min.js"></script>        
        <script src="<?php echo site_url(); ?>assets/js/intro.js"></script>        
        <script src="<?php echo site_url(); ?>assets/js/ace-elements.min.js"></script>
        <script src="<?php echo site_url(); ?>assets/js/ace.min.js"></script>        

		<style type="text/css">
			//barra de menu principal
			.navbar-default {
				background: #FFFFFF;
				border: 1px solid #FFFFFF;
			}

			/* elemento que tem o nome "Pokedex Web" */
			.navbar-default .navbar-brand {
				color: #FFFFFF;
			}

			/* item de menu quando tiver selecionado */
			.navbar-default .navbar-nav>.active>a,
			.navbar-default .navbar-nav>.active>a:hover,
			.navbar-default .navbar-nav>.active>a:focus {
				color: #5387AD;
				background-color: #F5F5F5;
			}

			/* item de menu */
			.navbar-default .navbar-nav>li>a {
				color: #5387AD;
			}

			/* mouse over no item de menu */
			.navbar-default .navbar-nav>li>a:hover,
			.navbar-default .navbar-nav>li>a:focus {
				color: #0C2C4C;
				background-color: transparent;
			}

			/* item de menu dropdown quando tiver aberto */
			.navbar-default .navbar-nav>.open>a,
			.navbar-default .navbar-nav>.open>a:hover,
			.navbar-default .navbar-nav>.open>a:focus {
				color: #5387AD;
				background-color: #FFFFFF;
			}
		</style>
    </head>

    <body>
        <div id="overload">
            <img src="<?php echo site_url(); ?>assets/img/load.gif">
        </div>

        <!-- DEFINIÇÃO DO CABEÇALHO DA PÁGINA -->
		<div class="navbar navbar-default" id="navbar">

            <!-- script para fixar barra de navegação -->
			<script type="text/javascript">
            try {
                ace.settings.check('navbar', 'fixed')
            } catch (e) {
			  }
            </script>
			
			<!-- DEFINIÇÃO DE AÇÕES DOS ÍCONES DE NAVEGAÇÃO NO CABEÇALHO -->
            <div class="navbar-container" id="navbar-container">			
                <!-- Controla o comportamento do ícone da página principal -->
				<div class="navbar-header pull-left">
                    <a href="ctr_home">
                        <small>
							<div class="white">
								<h5>Pagina Principal </h5>
							</div>
                        </small>
                    </a><!-- /.brand -->
                </div><!-- /.navbar-header -->
				
            </div><!-- /.navbar-container -->
        </div><!-- /.navbar -->

        <div class="main-container" id="main-container">
            <script type="text/javascript">
                try {
                    ace.settings.check('main-container', 'fixed')
                } catch (e) {
                }
            </script>

            <div class="main-container-inner">
                <a class="menu-toggler" id="menu-toggler" href="#">
                    <span class="menu-text"></span>
                </a>

                <div class="sidebar wow fadeInDown" data-duration="0.6s" id="sidebar">
                    <script type="text/javascript">
                        try {
                            ace.settings.check('sidebar', 'fixed')
                        } catch (e) {
                        }
                    </script>   
                    <div id="sidebar-shortcuts" class="sidebar-shortcuts">                        

                    </div>
                   


			        
						
                    
	</body>
</html>
					<!-- scripts -->
					<script type="text/javascript">
						try {
							ace.settings.check('sidebar', 'collapsed')
						} catch (e) {
						  }
					</script>
                </div>

                <div class="main-content">

                    <script type="text/javascript">
                        try {
                            ace.settings.check('breadcrumbs', 'fixed')
                        } catch (e) {
                        }
                    </script>

                    

                 