<!DOCTYPE html>
<html>
<head lang="pt-br">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Gt Project - Configurações</title>

	<link href="../img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
	<link href="../img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
	<link href="../img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
	<link href="../img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
		 <link rel="shortcut icon" href="../img/logo-2-mob.png">
	<link href="../img/favicon.ico" rel="shortcut icon">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

<link rel="stylesheet" href="../css/lib/lobipanel/lobipanel.min.css">
<link rel="stylesheet" href="../css/separate/vendor/lobipanel.min.css">
<link rel="stylesheet" href="../css/lib/jqueryui/jquery-ui.min.css">
<link rel="stylesheet" href="../css/separate/pages/widgets.min.css">
   <link rel="stylesheet" href="../css/separate/pages/prices.min.css">
    <link rel="stylesheet" href="../css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="../css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
</head>

<body class="horizontal-navigation">

	<?php
        $menu=0;
        include "naveg.php";
        $listarNotificacoes=$usuarios->listarNotificacoes($_SESSION['id_usuario']);
    ?>
	<div class="page-content">
	    <div class="container-fluid">
        <header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Configurações</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="">Configurações</a></li>&nbsp;&nbsp;/
								
							</ol>
						</div>					
					</div>
				</div>
			</header>
        
                                
                            
	        <div class="row">
          <div class="col-lg-12">
	          <div class="box-typical box-typical-padding">
	          <form>
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Notificações por e-mail de atividades de projetos</label>
						<div class="col-sm-10">
							
							<div class="checkbox-toggle">
								<input type="checkbox" id="check-toggle-2" <?php if($listarNotificacoes[0]['tipoNotificacao']==1 && $listarNotificacoes[0]['status']==1){ echo 'checked="" onclick="ajaxNotificacoes('.$listarNotificacoes[0]['idConfiguracoes'].',0)"'; }else{ echo 'onclick="ajaxNotificacoes('.$listarNotificacoes[0]['idConfiguracoes'].',0)"'; }?>>
								<label for="check-toggle-2"></label>								
							</div>
							
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Notificações por e-mail de minhas atividades</label>
						<div class="col-sm-10">
							
							<div class="checkbox-toggle">
								<input type="checkbox" id="check-toggle-3" <?php if($listarNotificacoes[1]['tipoNotificacao']==2 && $listarNotificacoes[1]['status']==1){ echo 'checked="" onclick="ajaxNotificacoes('.$listarNotificacoes[1]['idConfiguracoes'].',0)"'; }else{ echo 'onclick="ajaxNotificacoes('.$listarNotificacoes[1]['idConfiguracoes'].',0)"'; }?>>
								<label for="check-toggle-3"></label>
							</div>
							
						</div>
					</div>					
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Notificações por e-mail de avisos de projetos</label>
						<div class="col-sm-10">
							
							<div class="checkbox-toggle">
								<input type="checkbox" id="check-toggle-4" <?php if($listarNotificacoes[2]['tipoNotificacao']==3 && $listarNotificacoes[2]['status']==1){ echo 'checked="" onclick="ajaxNotificacoes('.$listarNotificacoes[2]['idConfiguracoes'].',0)"'; }else{ echo 'onclick="ajaxNotificacoes('.$listarNotificacoes[2]['idConfiguracoes'].',0)"'; }?> >
								<label for="check-toggle-4"></label>
							</div>
							
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-2 form-control-label">Notificações por e-mail de avisos de equipes</label>
						<div class="col-sm-10">
							
							<div class="checkbox-toggle">
								<input type="checkbox" id="check-toggle-5" <?php if($listarNotificacoes[3]['tipoNotificacao']==4 && $listarNotificacoes[3]['status']==1){ echo 'checked="" onclick="ajaxNotificacoes('.$listarNotificacoes[3]['idConfiguracoes'].',0)"'; }else{ echo 'onclick="ajaxNotificacoes('.$listarNotificacoes[3]['idConfiguracoes'].',0)"'; }?>>
								<label for="check-toggle-5"></label>
							</div>
							
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Notificações por e-mail de assinaturas</label>
						<div class="col-sm-10">
							
							<div class="checkbox-toggle">
								<input type="checkbox" id="check-toggle-6" <?php if($listarNotificacoes[4]['tipoNotificacao']==5 && $listarNotificacoes[4]['status']==1){ echo 'checked="" onclick="ajaxNotificacoes('.$listarNotificacoes[4]['idConfiguracoes'].',0)"'; }else{ echo 'onclick="ajaxNotificacoes('.$listarNotificacoes[4]['idConfiguracoes'].',0)"'; }?>>
								<label for="check-toggle-6"></label>
							</div>
							
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-2 form-control-label">Código para representar assinatura</label>
						<div class="col-sm-10">
							
							<div class="checkbox-toggle">
								<input type="checkbox" id="check-toggle-7" <?php if($listarNotificacoes[5]['tipoNotificacao']==6 && $listarNotificacoes[5]['status']==1){ echo 'checked="" onclick="ajaxNotificacoes('.$listarNotificacoes[5]['idConfiguracoes'].',1,\''.$listar[3].'\')"'; }else{ echo 'onclick="ajaxNotificacoes('.$listarNotificacoes[5]['idConfiguracoes'].',1,\''.$listar[3].'\')"'; }?>>
								<label for="check-toggle-7"></label>
							</div>
							
						</div>
						<span id="msgN" class="col-sm-2 form-control-label"></span>
					</div>						
				</form>
              </div>
	        </div><!--.row-->	 	       
	    </div><!--.container-fluid-->
        </div>
	</div><!--.page-content-->

	<script src="../js/lib/jquery/jquery-3.2.1.min.js"></script>
	<script src="../js/lib/popper/popper.min.js"></script>
	<script src="../js/lib/tether/tether.min.js"></script>
	<script src="../js/lib/bootstrap/bootstrap.min.js"></script>
	<script src="../js/plugins.js"></script>

	<script type="text/javascript" src="../js/lib/jqueryui/jquery-ui.min.js"></script>
	<script type="text/javascript" src="../js/lib/lobipanel/lobipanel.min.js"></script>
	<script type="text/javascript" src="../js/lib/match-height/jquery.matchHeight.min.js"></script>
	

    <script>
             function ajaxNotificacoes(notificacao,t,e) {
            $.ajax
         ({
         type:'POST',
         url:'../../../controller/usuario.php',
         data:'ajaxStatusNotificacoes='+notificacao+'&tipo='+t+'&email='+e,
         success:function(html)
         {
         
         $('#msgN').html(html);
         }
		  });
        }
    </script>
<script src="../js/app.js"></script>
</body>
</html>