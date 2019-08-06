<!DOCTYPE html>
<html>
<head lang="pt-br">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Catálogo Tempário - Tempos cadastrados</title>

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
							<h3>Tempos cadastrados</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="#">Tempos de serviço</a></li><li><a>Tempos cadastrados</a></li>
								
							</ol>
						</div>
						
					</div>
				</div>
			</header>
         <div class="box-typical box-typical-padding">
           <h5 class="m-t-lg with-border"><i class="fa fa-car"></i> Veículo</h5>
           <div class="row">
					<div class="col-lg-12">
						<fieldset class="form-group">
							<label class="form-label semibold" for="exampleInput">Categoria*</label>
							<select class="form-control" id="fk_categoria" name="fk_categoria" type="text" required="" autofocus="">
																	<option value="" selected="" disabled="">Selecione a categoria*</option>
																	<option id="des" value="11">CAMINHÕES</option><option id="des" value="4">MOTOS</option><option id="des" value="10">TRATORES</option><option id="des" value="6">UTILITÁRIOS - 4 X 2</option><option id="des" value="9">UTILITÁRIOS - 4 X 4</option><option id="des" value="8">UTILITÁRIOS - VANS</option><option id="des" value="3">VEÍCULOS LEVES</option>																</select>
							
						</fieldset>
					</div>
					<div class="col-lg-12">
						<fieldset class="form-group">
							<label class="form-label" for="exampleInputEmail1">Marca*</label>
							<select class="form-control" placeholder="Marca" name="fk_marca" id="fk_marca" type="text" required="">
                                 <option value="" disabled="" selected="">Selecione a marca</option>
                                 
                              </select>
						</fieldset>
					</div>
					<div class="col-lg-12">
						<fieldset class="form-group">
							<label class="form-label" for="exampleInputPassword1">Modelo*</label>
							<select class="form-control" placeholder="Modelo" name="fk_modelo" id="fk_modelo" type="text" required="">
                                 <option value="" disabled="" selected="">Selecione o modelo</option>
                                 
                              </select>
						</fieldset>
					</div>
				</div>
      
					
					<div class="row">
                <div class="col-lg-6">
                <button type="button" class="btn btn-inline">Buscar tempos </button>
                 </div>
                 
             </div>
				</div>
      <div class="box-typical box-typical-padding">
       <h5 class="m-t-lg with-border"><i class="fa fa-car"></i> <a href="">AUDI</a> / AUDI 1.8</h5>
      <table id="table-edit" class="table table-bordered table-hover">
				<thead>
				<tr>
					<th width="1">
						#
					</th>
					<th>Name</th>
					<th>Description</th>
					<th class="table-icon-cell">
						<i class="font-icon font-icon-heart"></i>
					</th>
					<th class="table-icon-cell">
						<i class="font-icon font-icon-comment"></i>
					</th>
					<th width="120">Date Created</th>
					<th></th>
				<th class="tabledit-toolbar-column"></th></tr>
				</thead>
				<tbody>
					<tr id="1">
						<td><span class="tabledit-span tabledit-identifier">1</span><input class="tabledit-input tabledit-identifier" type="hidden" name="id" value="1" disabled=""></td>
						<td class="tabledit-view-mode"><span class="tabledit-span">Last quarter revene</span><input class="tabledit-input form-control input-sm" type="text" name="name" value="Last quarter revene" style="display: none;" disabled=""></td>
						<td class="color-blue-grey-lighter tabledit-view-mode"><span class="tabledit-span">Revene for last quarter in state America for year 2013, whith...</span><input class="tabledit-input form-control input-sm" type="text" name="description" value="Revene for last quarter in state America for year 2013, whith..." style="display: none;" disabled=""></td>
						<td class="table-icon-cell">5</td>
						<td class="table-icon-cell">24</td>
						<td class="table-date">6 minutes ago</td>
						<td class="table-photo">
							<img src="img/photo-64-1.jpg" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Nicholas<br/>Barrett">
						</td>
					<td style="white-space: nowrap; width: 1%;"><div class="tabledit-toolbar btn-toolbar" style="text-align: left;">
                                           <div class="btn-group btn-group-sm" style="float: none;"><button type="button" class="tabledit-edit-button btn btn-sm btn-default" style="float: none;"><span class="glyphicon glyphicon-pencil"></span></button><button type="button" class="tabledit-delete-button btn btn-sm btn-default" style="float: none;"><span class="glyphicon glyphicon-trash"></span></button></div>
                                           <button type="button" class="tabledit-save-button btn btn-sm btn-success" style="display: none; float: none;">Save</button>
                                           <button type="button" class="tabledit-confirm-button btn btn-sm btn-danger" style="display: none; float: none;">Confirm</button>
                                           <button type="button" class="tabledit-restore-button btn btn-sm btn-warning" style="display: none; float: none;">Restore</button>
                                       </div></td></tr>
					<tr id="1">
						<td><span class="tabledit-span tabledit-identifier">1</span><input class="tabledit-input tabledit-identifier" type="hidden" name="id" value="1" disabled=""></td>
						<td class="tabledit-view-mode"><span class="tabledit-span">Last quarter revene</span><input class="tabledit-input form-control input-sm" type="text" name="name" value="Last quarter revene" style="display: none;" disabled=""></td>
						<td class="color-blue-grey-lighter tabledit-view-mode"><span class="tabledit-span">Revene for last quarter in state America for year 2013, whith...</span><input class="tabledit-input form-control input-sm" type="text" name="description" value="Revene for last quarter in state America for year 2013, whith..." style="display: none;" disabled=""></td>
						<td class="table-icon-cell">5</td>
						<td class="table-icon-cell">24</td>
						<td class="table-date">6 minutes ago</td>
						<td class="table-photo">
							<img src="img/photo-64-1.jpg" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Nicholas<br/>Barrett">
						</td>
					<td style="white-space: nowrap; width: 1%;"><div class="tabledit-toolbar btn-toolbar" style="text-align: left;">
                                           <div class="btn-group btn-group-sm" style="float: none;"><button type="button" class="tabledit-edit-button btn btn-sm btn-default" style="float: none;"><span class="glyphicon glyphicon-pencil"></span></button><button type="button" class="tabledit-delete-button btn btn-sm btn-default" style="float: none;"><span class="glyphicon glyphicon-trash"></span></button></div>
                                           <button type="button" class="tabledit-save-button btn btn-sm btn-success" style="display: none; float: none;">Save</button>
                                           <button type="button" class="tabledit-confirm-button btn btn-sm btn-danger" style="display: none; float: none;">Confirm</button>
                                           <button type="button" class="tabledit-restore-button btn btn-sm btn-warning" style="display: none; float: none;">Restore</button>
                                       </div></td></tr>
					<tr id="1">
						<td><span class="tabledit-span tabledit-identifier">1</span><input class="tabledit-input tabledit-identifier" type="hidden" name="id" value="1" disabled=""></td>
						<td class="tabledit-view-mode"><span class="tabledit-span">Last quarter revene</span><input class="tabledit-input form-control input-sm" type="text" name="name" value="Last quarter revene" style="display: none;" disabled=""></td>
						<td class="color-blue-grey-lighter tabledit-view-mode"><span class="tabledit-span">Revene for last quarter in state America for year 2013, whith...</span><input class="tabledit-input form-control input-sm" type="text" name="description" value="Revene for last quarter in state America for year 2013, whith..." style="display: none;" disabled=""></td>
						<td class="table-icon-cell">5</td>
						<td class="table-icon-cell">24</td>
						<td class="table-date">6 minutes ago</td>
						<td class="table-photo">
							<img src="img/photo-64-1.jpg" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Nicholas<br/>Barrett">
						</td>
					<td style="white-space: nowrap; width: 1%;"><div class="tabledit-toolbar btn-toolbar" style="text-align: left;">
                                           <div class="btn-group btn-group-sm" style="float: none;"><button type="button" class="tabledit-edit-button btn btn-sm btn-default" style="float: none;"><span class="glyphicon glyphicon-pencil"></span></button><button type="button" class="tabledit-delete-button btn btn-sm btn-default" style="float: none;"><span class="glyphicon glyphicon-trash"></span></button></div>
                                           <button type="button" class="tabledit-save-button btn btn-sm btn-success" style="display: none; float: none;">Save</button>
                                           <button type="button" class="tabledit-confirm-button btn btn-sm btn-danger" style="display: none; float: none;">Confirm</button>
                                           <button type="button" class="tabledit-restore-button btn btn-sm btn-warning" style="display: none; float: none;">Restore</button>
                                       </div></td></tr>
					<tr id="1">
						<td><span class="tabledit-span tabledit-identifier">1</span><input class="tabledit-input tabledit-identifier" type="hidden" name="id" value="1" disabled=""></td>
						<td class="tabledit-view-mode"><span class="tabledit-span">Last quarter revene</span><input class="tabledit-input form-control input-sm" type="text" name="name" value="Last quarter revene" style="display: none;" disabled=""></td>
						<td class="color-blue-grey-lighter tabledit-view-mode"><span class="tabledit-span">Revene for last quarter in state America for year 2013, whith...</span><input class="tabledit-input form-control input-sm" type="text" name="description" value="Revene for last quarter in state America for year 2013, whith..." style="display: none;" disabled=""></td>
						<td class="table-icon-cell">5</td>
						<td class="table-icon-cell">24</td>
						<td class="table-date">6 minutes ago</td>
						<td class="table-photo">
							<img src="img/photo-64-1.jpg" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Nicholas<br/>Barrett">
						</td>
					<td style="white-space: nowrap; width: 1%;"><div class="tabledit-toolbar btn-toolbar" style="text-align: left;">
                                           <div class="btn-group btn-group-sm" style="float: none;"><button type="button" class="tabledit-edit-button btn btn-sm btn-default" style="float: none;"><span class="glyphicon glyphicon-pencil"></span></button><button type="button" class="tabledit-delete-button btn btn-sm btn-default" style="float: none;"><span class="glyphicon glyphicon-trash"></span></button></div>
                                           <button type="button" class="tabledit-save-button btn btn-sm btn-success" style="display: none; float: none;">Save</button>
                                           <button type="button" class="tabledit-confirm-button btn btn-sm btn-danger" style="display: none; float: none;">Confirm</button>
                                           <button type="button" class="tabledit-restore-button btn btn-sm btn-warning" style="display: none; float: none;">Restore</button>
                                       </div></td></tr>
					<tr id="1">
						<td><span class="tabledit-span tabledit-identifier">1</span><input class="tabledit-input tabledit-identifier" type="hidden" name="id" value="1" disabled=""></td>
						<td class="tabledit-view-mode"><span class="tabledit-span">Last quarter revene</span><input class="tabledit-input form-control input-sm" type="text" name="name" value="Last quarter revene" style="display: none;" disabled=""></td>
						<td class="color-blue-grey-lighter tabledit-view-mode"><span class="tabledit-span">Revene for last quarter in state America for year 2013, whith...</span><input class="tabledit-input form-control input-sm" type="text" name="description" value="Revene for last quarter in state America for year 2013, whith..." style="display: none;" disabled=""></td>
						<td class="table-icon-cell">5</td>
						<td class="table-icon-cell">24</td>
						<td class="table-date">6 minutes ago</td>
						<td class="table-photo">
							<img src="img/photo-64-1.jpg" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Nicholas<br/>Barrett">
						</td>
					<td style="white-space: nowrap; width: 1%;"><div class="tabledit-toolbar btn-toolbar" style="text-align: left;">
                                           <div class="btn-group btn-group-sm" style="float: none;"><button type="button" class="tabledit-edit-button btn btn-sm btn-default" style="float: none;"><span class="glyphicon glyphicon-pencil"></span></button><button type="button" class="tabledit-delete-button btn btn-sm btn-default" style="float: none;"><span class="glyphicon glyphicon-trash"></span></button></div>
                                           <button type="button" class="tabledit-save-button btn btn-sm btn-success" style="display: none; float: none;">Save</button>
                                           <button type="button" class="tabledit-confirm-button btn btn-sm btn-danger" style="display: none; float: none;">Confirm</button>
                                           <button type="button" class="tabledit-restore-button btn btn-sm btn-warning" style="display: none; float: none;">Restore</button>
                                       </div></td></tr>
					<tr id="1">
						<td><span class="tabledit-span tabledit-identifier">1</span><input class="tabledit-input tabledit-identifier" type="hidden" name="id" value="1" disabled=""></td>
						<td class="tabledit-view-mode"><span class="tabledit-span">Last quarter revene</span><input class="tabledit-input form-control input-sm" type="text" name="name" value="Last quarter revene" style="display: none;" disabled=""></td>
						<td class="color-blue-grey-lighter tabledit-view-mode"><span class="tabledit-span">Revene for last quarter in state America for year 2013, whith...</span><input class="tabledit-input form-control input-sm" type="text" name="description" value="Revene for last quarter in state America for year 2013, whith..." style="display: none;" disabled=""></td>
						<td class="table-icon-cell">5</td>
						<td class="table-icon-cell">24</td>
						<td class="table-date">6 minutes ago</td>
						<td class="table-photo">
							<img src="img/photo-64-1.jpg" alt="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Nicholas<br/>Barrett">
						</td>
					<td style="white-space: nowrap; width: 1%;"><div class="tabledit-toolbar btn-toolbar" style="text-align: left;">
                                           <div class="btn-group btn-group-sm" style="float: none;"><button type="button" class="tabledit-edit-button btn btn-sm btn-default" style="float: none;"><span class="glyphicon glyphicon-pencil"></span></button><button type="button" class="tabledit-delete-button btn btn-sm btn-default" style="float: none;"><span class="glyphicon glyphicon-trash"></span></button></div>
                                           <button type="button" class="tabledit-save-button btn btn-sm btn-success" style="display: none; float: none;">Save</button>
                                           <button type="button" class="tabledit-confirm-button btn btn-sm btn-danger" style="display: none; float: none;">Confirm</button>
                                           <button type="button" class="tabledit-restore-button btn btn-sm btn-warning" style="display: none; float: none;">Restore</button>
                                       </div></td></tr>
				</tbody>
			</table>
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