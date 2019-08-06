<!DOCTYPE html>
<html>
	<head lang="pt-br">
		<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
				<meta http-equiv="x-ua-compatible" content="ie=edge">
					<title>Catálogo Tempário - Serviços</title>
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
              $menu=7;
              include "naveg.php";
            ?>
						<div class="page-content">
							<div class="container-fluid">
								<header class="section-header">
									<div class="tbl">
										<div class="tbl-row">
											<div class="tbl-cell">
												<h3>Serviços</h3>
												<ol class="breadcrumb breadcrumb-simple">
													<li>
														<a href="#">Serviços</a>
													</li>&nbsp;/
												</ol>
											</div>
										</div>
									</div>
								</header>

								<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Cadastrar novo serviço</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<fieldset class="form-group">
													<label class="form-label semibold" for="exampleInput">Descrição*</label>
													<input type="text" class="form-control" id="exampleInput" >
														<label class="form-label semibold" for="exampleInput">Grupo*</label>
														<select id="exampleSelect" class="form-control">
															<option disabled selected>Selecione...</option>
															<option>1</option>
															<option>2</option>
															<option>3</option>
															<option>4</option>
														</select>
														<label class="form-label semibold" for="exampleInput">Tempo (centesimal)</label>
														<input type="text" class="form-control" id="exampleInput" >
Se cadastrar um tempo para o serviço, ele se tornará um serviço comum para todos os modelos com acesso ao grupo cadastrado.

														</fieldset>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary">Salvar</button>
														<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
													</div>
												</div>
											</div>
										</div>
                    <section class="card mb-3">
                      <header class="card-header card-header-xl">
                    Serviços
                      </header>
                      <div class="card-block">
                        <label class="form-label semibold" for="exampleInput">Categoria*</label>
                        <select id="exampleSelect" class="form-control">
                          <option disabled selected>Selecione...</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                        </select>
                        <p>Foram encontrados 3222 serviços, favor filtre sua busca.</p>
												<button type="button" class="btn btn-primary">Buscar serviços</button>
                      </div>
                    </section>
										<section class="card mb-3">
											<header class="card-header card-header-xl">
Serviços
												<button type="button" class="btn btn-inline" style="float:right" data-toggle="modal" data-target="#myModal1">
													<i class="fa fa-plus"></i> Cadastrar novo serviço
												</button>
											</header>
											<div class="card-block">
												<table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
													<thead>
														<tr>
															<th>Name</th>
															<th>Position</th>
															<th>Office</th>
															<th>Age</th>
															<th>Start date</th>
															<th>Salary</th>
														</tr>
													</thead>
													<tfoot>
														<tr>
															<th>Name</th>
															<th>Position</th>
															<th>Office</th>
															<th>Age</th>
															<th>Start date</th>
															<th>Salary</th>
														</tr>
													</tfoot>
													<tbody>

													</tbody>
												</table>
												<p>Legenda:</p>
													<p>C Serviço comum, possui um tempo definido, todos os modelos com acesso ao grupo em que foi cadastrado o serviço irão estar com o mesmo tempo</p>
													<p>N Serviço normal, não possui um tempo padrão, cada modelo possui ou não um tempo específico</p>
											</div>
										</section>
									</div>
									<!--.container-fluid-->
								</div>
							</div>
							<!--.page-content-->
							<script src="../js/lib/jquery/jquery-3.2.1.min.js"></script>
							<script src="../js/lib/popper/popper.min.js"></script>
							<script src="../js/lib/tether/tether.min.js"></script>
							<script src="../js/lib/bootstrap/bootstrap.min.js"></script>
							<script src="../js/plugins.js"></script>
							<script type="text/javascript" src="../js/lib/jqueryui/jquery-ui.min.js"></script>
							<script type="text/javascript" src="../js/lib/lobipanel/lobipanel.min.js"></script>
							<script type="text/javascript" src="../js/lib/match-height/jquery.matchHeight.min.js"></script>
							<script src="../js/lib/datatables-net/datatables.min.js"></script>
							<script>
$(function() {
$('#example').DataTable();
});
</script>
							<script src="../js/app.js"></script>
						</body>
					</html>
