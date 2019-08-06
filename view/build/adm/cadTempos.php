<!DOCTYPE html>
<html>
<head lang="pt-br">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Catálogo Tempário - Cadastrar tempos</title>

	<link href="../img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
	<link href="../img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
	<link href="../img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
	<link href="../img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
	<link href="../img/favicon.png" rel="icon" type="image/png">
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
    <link rel="stylesheet" href="../css/lib/datatables-net/datatables.min.css">
    <link rel="stylesheet" href="../css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="../css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
</head>

<body class="horizontal-navigation">

	<?php
        $menu=8;
        include "naveg.php";
    ?>
	<div class="page-content">
	    <div class="container-fluid">
        <header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Cadastrar tempos</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="#">Tempos de serviço</a></li><li><a>Cadastrar tempos</a></li>
								
							</ol>
						</div>
						
					</div>
				</div>
			</header>
         <div class="box-typical box-typical-padding">
           <h5 class="m-t-lg with-border"><i class="fa fa-car"></i> Veículo</h5>
           <div class="row">
					<div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label semibold" for="exampleInput">Categoria*</label>
							<select class="form-control" id="fk_categoria" name="fk_categoria" type="text" required="" autofocus="">
																	<option value="" selected="" disabled="">Selecione a categoria*</option>
																	<option id="des" value="11">CAMINHÕES</option><option id="des" value="4">MOTOS</option><option id="des" value="10">TRATORES</option><option id="des" value="6">UTILITÁRIOS - 4 X 2</option><option id="des" value="9">UTILITÁRIOS - 4 X 4</option><option id="des" value="8">UTILITÁRIOS - VANS</option><option id="des" value="3">VEÍCULOS LEVES</option>																</select>
							
						</fieldset>
					</div>
					<div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label" for="exampleInputEmail1">Marca*</label>
							<select class="form-control" placeholder="Marca" name="fk_marca" id="fk_marca" type="text" required="">
                                 <option value="" disabled="" selected="">Selecione a marca</option>
                                 
                              </select>
						</fieldset>
					</div>
					<div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label" for="exampleInputPassword1">Modelo*</label>
							<select class="form-control" placeholder="Modelo" name="fk_modelo" id="fk_modelo" type="text" required="">
                                 <option value="" disabled="" selected="">Selecione o modelo</option>
                                 
                              </select>
						</fieldset>
					</div>
				</div>
      <h5 class="m-t-lg with-border"><i class="fa fa-cog"></i> Serviço</h5>
           <div class="row">
					<div class="col-lg-6">
						<fieldset class="form-group">
							<label class="form-label semibold" for="exampleInput">Grupo*</label>
							<select class="form-control" placeholder="Grupo" name="fk_grupo" id="fk_grupo" type="text" required="">
												<option value="" disabled="" selected="">Selecione o grupo</option>
											</select>
							
						</fieldset>
					</div>
					<div class="col-lg-6">
						<fieldset class="form-group">
							<label class="form-label" for="exampleInputEmail1">Serviço*</label>
							<select class="form-control" placeholder="Serviço" id="fk_servico" name="fk_servico" type="text">
												<option value="" disabled="" selected="">Selecione o serviço</option>
												
											</select>
						</fieldset>
					</div>
				
					</div>
					<h5 class="m-t-lg with-border"><i class="fa fa-clock-o"></i> Tempo de serviço</h5>
           <div class="row">
					<div class="col-lg-12">
						<fieldset class="form-group">
							<label class="form-label semibold" for="exampleInput">Tempo* (Centesimal)</label>
							<input type="text" class="form-control" id="exampleInput" >
							
						</fieldset>
					</div>
					
				
					</div>
					<div class="row">
                <div class="col-lg-6">
                <button type="button" class="btn btn-inline">Cadastrar </button>
                 </div>
                 
             </div>
				</div>
       </div>
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
	

    <script src="../js/app.js"></script>
</body>
</html>