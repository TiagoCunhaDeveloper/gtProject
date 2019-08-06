<!DOCTYPE html>
<html>
<head lang="pt-br">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Gt Project - Colaboradores</title>

	<link href="../img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
	<link href="../img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
	<link href="../img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
	<link href="../img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">


	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

<link rel="stylesheet" href="../css/lib/lobipanel/lobipanel.min.css">
<link rel="stylesheet" href="../css/separate/vendor/lobipanel.min.css">
<link rel="stylesheet" href="../css/lib/jqueryui/jquery-ui.min.css">
<link rel="stylesheet" href="../css/separate/pages/widgets.min.css">

    <link rel="stylesheet" href="../css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="../css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
      <link rel="shortcut icon" href="../img/logo-2-mob.png">
      <link rel="stylesheet" href="../css/separate/pages/gallery.min.css">
      <link rel="stylesheet" href="../css/separate/pages/user.min.css">
   <link rel="stylesheet" href="../js/lib/jqueryTypeHead/jquery.typeahead.css">
 <link rel="stylesheet" href="../css/lib/bootstrap-sweetalert/sweetalert.css">
<link rel="stylesheet" href="../css/separate/vendor/sweet-alert-animations.min.css">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script>
    google.charts.load('current', {packages: ['corechart', 'line']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Month');
      data.addColumn('number', 'Projetos');

      data.addRows([
        ["01", 0], ["02", 0],["03", 0],["04", 0],["05", 0],["06", 0],["07", 0],["08", 0],["09", 0],["10", 0],["11", 0],["12", 0]
      ]);

      var options = {
        hAxis: {
          title: 'Mês'
        },
        vAxis: {
          title: 'Projetos'
        }
      };

      var chart = new google.visualization.LineChart(document.getElementById('chart_div'));

      chart.draw(data, options);
    }
    function menuAvisos(){
        document.getElementById("geral").style.display="none";
        document.getElementById("avisos").style.display="block";
        var element = document.getElementById("aGeral");
        element.classList.remove("active"); 
        var element2 = document.getElementById("aAvisos");
        element2.classList.add("active");
    }
    function menuGeral(){
        document.getElementById("geral").style.display="block";
        document.getElementById("avisos").style.display="none";
        var element = document.getElementById("aGeral");
        element.classList.add("active"); 
        var element2 = document.getElementById("aAvisos");
        element2.classList.remove("active");
    }
</script>
</head>

<body class="horizontal-navigation">

	<?php
        $menu=2;
        include "naveg.php";
        include "../../../model/equipe.class.php";
        include "../../../model/membro.class.php";
        $listarTodos=$usuarios->listarTodosUsuarios($_SESSION['id_usuario']);
        $listarTodosTypeHead=$usuarios->listarTodosUsuarios($_SESSION['id_usuario']);
        $equipe=new Equipe();
    ?>
	<div class="page-content">
	    <div class="container-fluid">
        <header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Colaboradores</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="">Colaboradores </a></li>&nbsp;&nbsp;/
								
								
							</ol>
						</div>
					</div>
				</div>
			</header>
                     <!-- MODAIS GERAIS-->
                     <input  type="button" id="cadOk" class="swal-btn-success" style="display:none"/>
                     <input  type="button" id="addOk" class="swal-btn-success2" style="display:none"/>
                     <input  type="button" id="cadEqOk" class="swal-btn-success3" style="display:none"/>
                     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adicionar <b id="nomeAmigo"></b> para uma equipe</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="row">
           <div class="col-sm-6">
							
							<section class="widget widget-simple-sm-fill blue" style="cursor:pointer" onclick="gerenciarEquipe(0)">
								<div class="widget-simple-sm-icon">
									<i class="font-icon fa fa-user-plus"></i>
								</div>
								<div class="widget-simple-sm-fill-caption">Criar nova equipe</div>
							</section><!--.widget-simple-sm-fill-->
						</div>
						<div class="col-sm-6">
							<section class="widget widget-simple-sm-fill blue" style="cursor:pointer" onclick="gerenciarEquipe(1)">
								<div class="widget-simple-sm-icon">
									<i class="font-icon fa fa-users"></i>
								</div>
								<div class="widget-simple-sm-fill-caption">Selecionar uma equipe</div>
							</section><!--.widget-simple-sm-fill-->
						</div>
       </div>
        <div class="row" style="display:none" id="cadEquipe">
           <form action="../../../controller/equipe.php" method="POST" enctype='multipart/form-data'>
            <div class="col-sm-12">
                <h5 class="modal-title" style="border-bottom:1px solid black">Criar nova equipe</h5><br>
                 <div class="form-group"><center><div id="thumb-output" ><img src="../img/no-image.jpg" width="350px" height="250px" onclick="escolherImagem()" style="cursor:pointer"></div><br><span id="selectImg">Selecione uma imagem</span></center>
								<input class="form-control" id="file-input" name="imgEquipe" type="file" style="display:none">
                     <a href="#" id="clear" style="display:none">Clear</a></div>
             <div class="form-group">
                                            <label style="font-weight: normal">Nome da equipe*</label>
                                             <input class="form-control" type="text" id="nomeEquipe" name="nomeEquipe" required style="text-transform: capitalize;" onkeyup="verificarEquipe(this.value)">
                                             <span id="msgEquipe"></span>                                
                                        </div>
            </div>
            <input type="submit" name="cadEquipeEaddMembro" id="submirCriarEadd" style="display:none"/>
            <input type="hidden" id="hash" name="idMembro"/>
            </form>
          </div> 
          <div class="row" style="display:none" id="selectEquipe">
           <div class="col-sm-12">
               <form action="../../../controller/membro.php" method="POST" >
                <h5 class="modal-title" style="border-bottom:1px solid black">Selecionar equipes</h5><br>
                <div class="form-group">
                                                <label style="font-weight: normal">Equipes*</label>
                                               <div class="typeahead__container">
            <div class="typeahead__field">

            <span class="typeahead__query">
                <input class="form-control" id="js-typeahead"
                       name="q"
                       type="search"
                       autofocus
                       autocomplete="off" style="font-size:15px">
            </span>
			
            </div>
        </div>
                                               
                        
                                               
                                            </div>
                                             <input type="submit"  id="submitAdd" style="display:none"/>
                                             <input type="hidden" id="hash1" name="idMembro"/>
                                             <input type="hidden" id="resultado" name="equipes"/>
                                             <input type="hidden" name="addMembro"/>
                </form>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <span class="help-block" style="float:left">Campos com * são obrigatórios</span>
        <span id="botao"></span>
        
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        
      </div>
    </div>
  </div>
</div>
                    <div class="modal fade" id="modalNovaEquipe" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Criar nova equipe</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="../../../controller/equipe.php" method="POST" enctype='multipart/form-data'>
            <div class="col-sm-12">
               
                 <div class="form-group"><center><div id="thumb-output1" ><img src="../img/no-image.jpg" width="350px" height="250px" onclick="escolherImagem1()" style="cursor:pointer"></div><br><span id="selectImg1">Selecione uma imagem</span></center>
								<input class="form-control" id="file-input1" name="imgEquipe" type="file" style="display:none">
                   </div>
             <div class="form-group">
                                            <label style="font-weight: normal">Nome da equipe*</label>
                                             <input class="form-control" type="text" id="nomeEquipe1" name="nomeEquipe" required style="text-transform: capitalize;" onkeyup="verificarEquipe1(this.value)">
                                             <span id="msgEquipe1"></span>                                
                                        </div>
                                        <div class="form-group">
                                                <label style="font-weight: normal">Pessoas*</label>
                                               <div class="typeahead__container">
            <div class="typeahead__field">

            <span class="typeahead__query">
                <input class="form-control" id="js-typeahead1"
                       name="q"
                       type="search"
                       autofocus
                       autocomplete="off" style="font-size:15px">
            </span>
			
            </div>
        </div>
                                               
                        
                                               
                                            </div>
            </div>
            <input type="submit"  id="submirCriarEadd1" style="display:none"/>
           <input type="hidden" id="resultado1" name="usuarios"/>
           <input type="hidden" name="cadEquipe"/>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="submitCriarEquipeEadd1()">Criar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
       
      </div>
    </div>
  </div>
</div>
                    
                       <div class="modal fade modal-upload-default" id="modalEditarEquipe" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
                        <i class="font-icon-close-2"></i>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Gerenciar equipe <b><span id="nomeE"></span></b></h4>
                </div>
                <div class="modal-upload">
                    <div class="modal-upload-cont">
                        <div class="modal-upload-cont-in">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="tab-upload">
                                    <div class="modal-upload-body scrollable-block" id="geral">
                                        <div class="uploading-container">
                                            <div class="uploading-container-left">
                                               <span id="eImgEquipe"></span>
                                              
                                                <h6 class="uploading-list-title" style="margin-top:5px">Pessoas <span style="float:right"><span id="addPessoas"></span></span></h6>
                                                            Gerentes | Pessoas
                                                         	<div class="tbl-row" >
									<div class="tbl-cell tbl-cell-admin" id="eMembrosAdm">
								
								</div>
									<div class="tbl-cell tbl-cell-divider">
										<i class="font-icon font-icon-arrow-right"></i>
									</div>
									<div class="tbl-cell" id="eMembros">
										
									    
									</div>
								</div>
                                            </div><!--.uploading-container-left-->
                                            <div class="uploading-container-right">
                                                <div class="uploading-container-right-in">
                                                    <div class="form-group">
                                            <label style="font-weight: normal">Nome da equipe*</label>
                                             <input class="form-control" type="text" required="" style="text-transform: capitalize;" id="eNomeEquipe" onkeyup="verificarEquipe3(this.value)">
                                                       <span id="msgEquipe3"></span>                    
                                        </div>
                                                   
                                                         
                                                    <h6 class="uploading-list-title">Projetos/mês - 2019</h6>
                                                    <div id="chart_div"></div>
                                                  
                                                    
                                                </div>
                                            </div><!--.uploading-container-right-->
                                        </div><!--.uploading-container-->
                                        
                                    </div><!--.modal-upload-body-->
                                    <div class="modal-upload-body scrollable-block" id="avisos" style="display:none">
                                        <div class="uploading-container">
                                          asdasdasdasdasd
                                        </div>
                                    </div>
                                     <form action="../../../controller/equipe.php" id="formE" method="POST" enctype="multipart/form-data">
                                    <div class="modal-upload-bottom">
                                      
                                        <input type="file" name="imgE" id="imgEditEquipe" style="display:none"/>
                                        <input type="hidden" id="eIdEquipe"/>
                                        <input type="hidden" name="editEquipe"/>
                                        <span id="botaoEditarEquipe"></span>
                                      
                                        <button type="button" class="btn btn-secondary " data-dismiss="modal">Fechar</button>
                                        
                                    </div><!--.modal-upload-bottom-->
                                      </form>
                                </div><!--.tab-pane-->                          
                            </div><!--.tab-content-->
                        </div><!--.modal-upload-cont-in-->
                    </div><!--.modal-upload-cont-->
                    <div class="modal-upload-side">
                        <ul class="upload-list" role="tablist">
                            <li class="nav-item">
                                <a href="#tab-upload" role="tab" data-toggle="tab" class="active" onclick="menuGeral()" id="aGeral">
                                    <i class="font-icon font-icon-home"></i>
                                    <span>Geral</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#tab-google-drive" role="tab" data-toggle="tab" onclick="menuAvisos()" id="aAvisos">
                                    <i class="font-icon font-icon-mail"></i>
                                    <span>Avisos</span>
                                </a>
                            </li>                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--.modal-->
                    
                    <div class="modal fade" id="editarMembros" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adicionar Pessoas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Adicionar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>        
      </div>
    </div>
  </div>
</div>
                   
                    <div class="modal fade" id="editarPessoa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabelPessoa">Ver <b><span id="nomeP"></span></b> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<span class="font-icon font-icon-mail"></span>
									</span>
								</div> 
								<input type="text" class="form-control" placeholder="email" readonly id="emailP">
							</div>
							<br>
							<div class="row">
					<div class="col-lg-6">
						<fieldset class="form-group">
							<label class="form-label " for="exampleInput">Facebook</label>
							<div class="form-control-wrapper form-control-icon-left">
								<input type="text" class="form-control" placeholder="Link do perfil" value="" name="facebookPerfil" readonly id="f" style="cursor:pointer">
								<i class="font-icon font-icon-fb-fill"></i>
							</div>
							
						</fieldset>
					</div>
					<div class="col-lg-6">
						<fieldset class="form-group">
							<label class="form-label " for="exampleInputEmail1">Github</label>
							<div class="form-control-wrapper form-control-icon-left">
								<input type="text" class="form-control" placeholder="Link do perfil" value="" name="githubPerfil" readonly id="g" style="cursor:pointer">
								<i class="font-icon font-icon-github"></i>
							</div>
						</fieldset>
					</div>
				</div>
     <div class="row">
					<div class="col-lg-6">
						<fieldset class="form-group">
							<label class="form-label " for="exampleInput">LinkedIn</label>
							<div class="form-control-wrapper form-control-icon-left">
								<input type="text" class="form-control" placeholder="Link do perfil" value="" name="linkedinPerfil" readonly style="cursor:pointer" id="l">
								<i class="font-icon font-icon-in-fill"></i>
							</div>
							
						</fieldset>
					</div>
					<div class="col-lg-6">
						<fieldset class="form-group">
							<label class="form-label " for="exampleInputEmail1">Twitter</label>
							<div class="form-control-wrapper form-control-icon-left">
								<input type="text" class="form-control" placeholder="Link do perfil" value="" name="twitterPerfil" readonly style="cursor:pointer" id="t">
								<i class="font-icon font-icon-tw-fill"></i>
							</div>
						</fieldset>
					</div>
				</div>
				 <div class="row" id="edicaoG" style="display:none">
				 <div class="col-lg-6" id="gerenteE">
        
                     </div>
                     <div class="col-lg-6">
                     <div class="checkbox">
								<input type="checkbox" id="check-2" >
								<label for="check-2">Remover da equipe</label>
							</div>
                     </div>
          </div>
     
      </div>
      <div class="modal-footer">
       
        <span id="salvarEditarMembro"></span>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>        
      </div>
    </div>
  </div>
</div>
                     
                     <!-- FIM MODAIS-->
                      <section class="card">
                       <div class="tabs-section-nav tabs-section-nav-icons">
					<div class="tbl">
						<ul class="nav" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" href="#tabs-1-tab-1" role="tab" data-toggle="tab">
									<span class="nav-link-in">
										<i class="font-icon fa fa-paste"></i>
										Amigos
									</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#tabs-1-tab-2" role="tab" data-toggle="tab" id="menuEquipe">
									<span class="nav-link-in">
										<span class="fa fa-clock-o"></span>
										Equipes
									</span>
								</a>
							</li>							
						</ul>
					</div>
				</div><!--.tabs-section-nav-->

				<div class="tab-content">
				    <div role="tabpanel" class="tab-pane fade in active show" id="tabs-1-tab-1">
                   <br>
                    <div class="container-fluid">
				        <div class="row card-user-grid">
				        <?php
                            foreach($listarTodos as $lt){
                                $idUsuario=$lt['idUsuario'];
                                $nome=$lt['nome'];
                                $imgUsuario=$lt['imgUsuario'];
                                $facebookPerfil=$lt['facebookPerfil'];
                                $githubPerfil=$lt['githubPerfil'];
                                $linkedinPerfil=$lt['linkedinPerfil'];
                                $twitterPerfil=$lt['twitterPerfil'];
                                $hashAssinatura=$lt['hashAssinatura'];
                                if($facebookPerfil !=""){
                                    $aFacebookPerfil='<a href="'.$facebookPerfil.'" target="_blank">
								<i class="font-icon font-icon-fb-fill"></i>
							</a>';
                                }
                                else{
                                    $aFacebookPerfil='<a style="color:#dedede;cursor:default ">
								<i class="font-icon font-icon-fb-fill"></i>
							</a>';
                                }
                                if($githubPerfil !=""){
                                    $aGithubPerfil='<a href="'.$githubPerfil.'" target="_blank">
								<i class="font-icon font-icon-github"></i>
							</a>';
                                }
                                else{
                                    $aGithubPerfil='<a style="color:#dedede;cursor:default">
								<i class="font-icon font-icon-github"></i>
							</a>';
                                }
                                if($linkedinPerfil !=""){
                                    $aLinkedinPerfil='<a href="'.$linkedinPerfil.'" target="_blank">
								<i class="font-icon font-icon-in-fill"></i>
							</a>';
                                }
                                else{
                                    $aLinkedinPerfil='<a style="color:#dedede;cursor:default">
								<i class="font-icon font-icon-in-fill"></i>
							</a>';
                                }
                                if($twitterPerfil !=""){
                                    $aTwitterPerfil='<a href="'.$twitterPerfil.'" target="_blank">
								<i class="font-icon font-icon-tw-fill"></i>
							</a>';
                                }
                                else{
                                    $aTwitterPerfil='<a style="color:#dedede;cursor:default">
								<i class="font-icon font-icon-tw-fill"></i>
							</a>';
                                }
                                
                                if($imgUsuario==""){
                                        $imagem= '<img src="../img/avatar-2-64.png" alt=""/>';
                                    }
                                    else{
                                        $imagem= '<img src="../img/imagensUsuarios/'.$imgUsuario.'" alt=""/>';
                                    }
                                echo '<div class="col-sm-6 col-md-4 col-xl-3">
					<article class="card-user box-typical">
						<!--<a href="#" class="card-user-action float-left">
							<i class="font-icon fa fa-user-times"></i>
						</a>-->
						
						<div class="card-user-photo">
							'.$imagem.'
						</div>
						<div class="card-user-name">'.$nome.'</div>
				
						<button onclick="adicionarAmigo(\''.$nome.'\','.$idUsuario.')" class="btn btn-rounded" data-toggle="modal" data-target="#exampleModal">Adicionar em uma equipe</button>
						<div class="card-user-social">
							
							'.$aFacebookPerfil.$aGithubPerfil.$aLinkedinPerfil.$aTwitterPerfil.'
							
							
						</div>						
					</article><!--.card-user-->
				</div>';
                                
                                
                            }  
                        ?>
				
                        </div>
                        </div>
                    </div>
					<div role="tabpanel" class="tab-pane" id="tabs-1-tab-2">
					    <div class="box-typical-body">
					   <div class="gallery-grid">
						<div class="gallery-col" >
							<article class="gallery-item" style="cursor:pointer" data-toggle="modal" data-target="#modalNovaEquipe">
								<img class="gallery-picture" src="../img/newP.jpg" alt="" height="158">
								<div class="gallery-hover-layout">
									<div class="gallery-hover-layout-in" style="padding: 50px;background: rgba(148, 148, 148, 0.9);">
										<h4>NOVA EQUIPE</h4>
										
									</div>
								</div>
							</article>
						</div><!--.gallery-col-->
                            <?php
                               
                                $listarEquipesUsuario=$equipe->listarEquipesUsuarioE($_SESSION['id_usuario']);
                                
                                
                                $membro= new Membro();
                             
                               
                                foreach($listarEquipesUsuario as $euu){
                                    $idEquipe=$euu['idEquipe'];
                                    $nomeEquipe=$euu['nomeEquipe'];
                                    $imgEquipe=$euu['imgEquipe'];
                                    $qtdMembros=$membro->verificarMembros($idEquipe);   
                                    $qdtProjetos=0;   
                                    if($imgEquipe ==""){
                                        $imagemE='<img class="gallery-picture" src="../img/no-image.jpg" alt="" height="158">';
                                    }
                                    else{
                                        $imagemE='<img class="gallery-picture" src="../img/imagensEquipes/'.$imgEquipe.'" alt="" height="158">';
                                    }

                                    if($qtdMembros==1){
                                        $msgMembro="Pessoa";
                                    }
                                    else{
                                        $msgMembro="Pessoas";
                                    }
                                    $perfil=$membro->verPerfil($_SESSION['id_usuario'],$idEquipe);
                                    if($perfil == ""){
                                        $perfil=0;
                                        $compartilhada='<i class="font-icon-users" style="float:left"></i>';
                                    }
                                    else{
                                        $perfil=1;
                                        $compartilhada='';
                                    }
                                    echo '<div class="gallery-col">
							<article class="gallery-item" style="cursor:pointer" data-toggle="modal" data-target="#modalEditarEquipe" onclick="editarEquipe('.$idEquipe.',\''.$nomeEquipe.'\',\''.$imgEquipe.'\',\''.$perfil.'\')">
								'.$imagemE.'
								<div class="gallery-hover-layout">
									<div class="gallery-hover-layout-in" style="padding: 10px;background: rgba(148, 148, 148, 0.9);">
										<p class="gallery-item-title">'.$nomeEquipe.' '.$compartilhada.'<i class="font-icon-mail" style="float:right"></i></p>
                                        <p>Nº de Pessoas: '.$qtdMembros.'</p><br>
                                        <p>Nº de Projetos: '.$qdtProjetos.'</p><br>
									   
											<div class="tbl-cell">';
                                            if($qtdMembros==0){
                                                echo "<br><br>";
                                            }
                                            else{
                                                $listarMembros=$membro->listarMembrosEquipes($idEquipe);
                                                $i=1;
                                                foreach($listarMembros as $lm){
                                                    $imgUsuarioListado=$lm['imgUsuario'];
                                                    
                                                    if($imgUsuarioListado == ""){
                                                        $imgU=' <img src="../img/avatar-2-64.png" alt="">';
                                                    }
                                                    else{
                                                        $imgU=' <img src="../img/imagensUsuarios/'.$imgUsuarioListado.'" alt="">';
                                                    }
                                                    if($i<=6){
                                                         echo '<div class="avatar-preview avatar-preview-32">
                                                        <a href="#">
                                                           '.$imgU.'
                                                        </a>
                                                        </div>&nbsp;';
                                                    }
                                                    else{
                                                         echo '<div class="avatar-preview avatar-preview-32">
                                                        <a href="#">
                                                          <img src="../img/moreP.jpg" alt="">
                                                        </a>
                                                        </div>&nbsp;';
                                                    }
                                                   
                                                    $i++;
                                                }
                                            } 
                                            echo '     
                                            </div>
                                                
                                               
								</div>
				            </div>
				        </article>
						</div>';
                                }
                            ?>
                      
                           
                         
                           
                          
                            </div>
                        </div>
                    </div>
                    
            </div>
            </section>
	    </div><!--.container-fluid-->
	</div><!--.page-content-->

	<script src="../js/lib/jquery/jquery-3.2.1.min.js"></script>
	<script src="../js/lib/popper/popper.min.js"></script>
	<script src="../js/lib/tether/tether.min.js"></script>
	<script src="../js/lib/bootstrap/bootstrap.min.js"></script>
	<script src="../js/plugins.js"></script>
      <script>
    	$(document).ready(function(){
			    $('#file-input').on('change', function(){ //on file input change
			        if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
			        {
			            $('#thumb-output').html(''); //clear html of output element
                        var nomeImg=document.getElementById("file-input").value;
                        document.getElementById("selectImg").innerHTML=nomeImg.replace("C:\\fakepath\\","");
			            var data = $(this)[0].files; //this file data
			            
			            $.each(data, function(index, file){ //loop though each file
			                if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
			                    var fRead = new FileReader(); //new filereader
			                    fRead.onload = (function(file){ //trigger function on successful read
			                    return function(e) {
			                        var img = $('<img width="350px" height="250px" onclick="escolherImagem()" style="cursor:pointer" />').addClass('thumb').attr('src', e.target.result); //create image element 
			                        $('#thumb-output').append(img); //append image to output element
			                    };
			                    })(file);
			                    fRead.readAsDataURL(file); //URL representing the file's data.
			                }
			            });
			            
			        }else{
			           // alert("Seu navegador não suporta a API!"); //if File API is absent
			        }
			    });
                  $('#file-input1').on('change', function(){ //on file input change
			        if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
			        {
			            $('#thumb-output1').html(''); //clear html of output element
                        var nomeImg=document.getElementById("file-input1").value;
                        document.getElementById("selectImg1").innerHTML=nomeImg.replace("C:\\fakepath\\","");
			            var data = $(this)[0].files; //this file data
			            
			            $.each(data, function(index, file){ //loop though each file
			                if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
			                    var fRead = new FileReader(); //new filereader
			                    fRead.onload = (function(file){ //trigger function on successful read
			                    return function(e) {
			                        var img = $('<img width="350px" height="250px" onclick="escolherImagem1()" style="cursor:pointer" />').addClass('thumb').attr('src', e.target.result); //create image element 
			                        $('#thumb-output1').append(img); //append image to output element
			                    };
			                    })(file);
			                    fRead.readAsDataURL(file); //URL representing the file's data.
			                }
			            });
			            
			        }else{
			           // alert("Seu navegador não suporta a API!"); //if File API is absent
			        }
			    });
             $('#imgEditEquipe').on('change', function(){ //on file input change
			        if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
			        {
			            $('#eImgEquipe').html(''); //clear html of output element
                        var nomeImg=document.getElementById("imgEditEquipe").value;
                      
			            var data = $(this)[0].files; //this file data
			            
			            $.each(data, function(index, file){ //loop though each file
			                if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
			                    var fRead = new FileReader(); //new filereader
			                    fRead.onload = (function(file){ //trigger function on successful read
			                    return function(e) {
			                        var img = $('<img width="210px" height="210px" onclick="mudarImagem()" style="cursor:pointer" />').addClass('thumb').attr('src', e.target.result); //create image element 
			                        $('#eImgEquipe').append(img); //append image to output element
			                    };
			                    })(file);
			                    fRead.readAsDataURL(file); //URL representing the file's data.
			                }
			            });
			            
			        }else{
			           // alert("Seu navegador não suporta a API!"); //if File API is absent
			        }
			    });
			});
    </script>
     <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
   <script src="../js/lib/jqueryTypeHead/jquery.typeahead.js"></script>
    <script>
        function escolherImagem(){
            $('#file-input').trigger('click');
        }
        function escolherImagem1(){
            $('#file-input1').trigger('click');
        } 
        function mudarImagem(){
            $('#imgEditEquipe').trigger('click');
        }    
        function submitCriarEquipeEadd(){
            var equipe = document.getElementById("msgEquipe").innerHTML;
            if(equipe != ""){
                
            }
            else{
                 $('#submirCriarEadd').trigger('click');
            }           
        }
        function submitCriarEquipeEadd1(){
            var equipe = document.getElementById("msgEquipe1").innerHTML;
            if(equipe != ""){
                
            }
            else{
                 $('#submirCriarEadd1').trigger('click');
            }           
        }
        function submirCriarEadd(){
             $('#submitAdd').trigger('click');
        }
    </script>
      <script>
        function adicionarAmigo(n,h){
            document.getElementById("nomeAmigo").innerHTML=n;
            document.getElementById("hash").value=h;            
            document.getElementById("hash1").value=h;            
            document.getElementById("botao").innerHTML='';
            document.getElementById("cadEquipe").style.display="none";
            document.getElementById("selectEquipe").style.display="none";
            document.getElementById("thumb-output").innerHTML='<img src="../img/no-image.jpg" width="350px" height="250px" onclick="escolherImagem()" style="cursor:pointer">';
        
          var control = $("#file-input"),
    clearBn = $("#clear");
          clearBn.on("click", function(){
    control.replaceWith( control.val('').clone( true ) );
});
            $('.typeahead__cancel-button').trigger('click');
             document.getElementById("selectImg").innerHTML="Selecione uma imagem";
             document.getElementById("nomeEquipe").value='';
        }
        function gerenciarEquipe(acao){
            if(acao==0){
                document.getElementById("selectEquipe").style.display="none";
                document.getElementById("cadEquipe").style.display="block";
                document.getElementById("botao").innerHTML='<button type="button" class="btn btn-primary" onclick="submitCriarEquipeEadd()">Criar e adicionar</button>';
            }
            else{
                  document.getElementById("cadEquipe").style.display="none";
                document.getElementById("selectEquipe").style.display="block";
                document.getElementById("botao").innerHTML='<button type="button" class="btn btn-primary" onclick="submirCriarEadd()">Adicionar</button>';
            }
        }
    </script>
          <script>

        var data = [
     <?php
          
            
            $equipesUsuario=$equipe->listarEquipesUsuario($_SESSION['id_usuario']);            
            foreach($equipesUsuario as $eu){
                $idEquipe=$eu['idEquipe'];
                $nomeEquipe=$eu['nomeEquipe'];
                $imgEquipe=$eu['imgEquipe'];
                $qtdMembros=$membro->verificarMembros($idEquipe);   
                $qdtProjetos=0;   
                if($imgEquipe ==""){
                    $imagemE="<img src=\'../img/no-image.jpg\' height=\'50px\' width=\'50px\'>";
                }
                else{
                    $imagemE="<img src=\'../img/imagensEquipes/".$imgEquipe."\' height=\'50px\' width=\'50px\'>";
                }
                
                if($qtdMembros==1){
                    $msgMembro="Pessoa";
                }
                else{
                    $msgMembro="Pessoas";
                }
                echo '{
            "id": "'.$idEquipe.'",
            "name": "'.$nomeEquipe.'",
            "email": "'.$imagemE.'<b> '.$nomeEquipe.'</b> - '.$qtdMembros.' '.$msgMembro.' | '.$qdtProjetos.' Projetos"
        },';
            }
            ?>
           ];

        typeof $.typeahead === 'function' && $.typeahead({
            input: "#js-typeahead",
            minLength: 1,
            maxItem: 8,
            maxItemPerGroup: 6,
            order: "asc",
            hint: true,
            searchOnFocus: true,
            multiselect: {
//                limit: 1,
//                limitTemplate: You can\'t select more than 2 teams,
                matchOn: ["id", "email"],
                cancelOnBackspace: true,
//                href: '/{{name}}.html',
//                data: [{
//                    "matchedKey": "name",
//                    "name": "Canadiens",
//                    "img": "canadiens",
//                    "city": "Montreal",
//                    "id": "MTL",
//                    "conference": "Eastern",
//                    "division": "Northeast",
//                    "group": "teams"
//                }],
               
                callback: {
                    onClick: function (node, item, event) {
                        event.preventDefault();
                        console.log(item);
                        alert('Equipe: '+item.name);
                    },
                    onCancel: function (node, item, event) {
                        console.log(item)
                    }
                    
                }                
            },
            templateValue: "{{name}}",
            display: ["email"],
            emptyTemplate: 'nemhum resultado para {{query}}',
            source: {
                teams: {
                    data: data
                }
            },
            callback: {
                onSubmit: function (node, form, item, event) {
                    event.preventDefault();
					var resultado =JSON.stringify(item) ;
					document.getElementById("resultado").value=resultado;
					form.submit();
                }
            },
            debug: false
        });
              
              
         var data1 = [

            <?php
          
            
                
            foreach($listarTodosTypeHead as $ltt){
                $idUsuario=$ltt['idUsuario'];
                $nome=$ltt['nome'];
                $imgUsuario=$ltt['imgUsuario'];
                $email=$ltt['email'];                  
                if($imgUsuario ==""){
                    $imagemUs="<img src=\'../img/no-image.jpg\' height=\'50px\' width=\'50px\'>";
                }
                else{
                    $imagemUs="<img src=\'../img/imagensUsuarios/".$imgUsuario."\' height=\'50px\' width=\'50px\'>";
                }          
               
                echo '{
            "id": "'.$idUsuario.'",
            "name": "'.$nome.'",
            "emailU": "'.$email.'",
            "email": "'.$imagemUs.'<b> '.$email.'</b> - '.$nome.'"
        },';
            }
            ?>
      
           ];
              
        typeof $.typeahead === 'function' && $.typeahead({
            input: "#js-typeahead1",
            minLength: 1,
            maxItem: 8,
            maxItemPerGroup: 6,
            order: "asc",
            hint: true,
            searchOnFocus: true,
            multiselect: {
//                limit: 1,
//                limitTemplate: You can\'t select more than 2 teams,
                matchOn: ["id", "email"],
                cancelOnBackspace: true,
//                href: '/{{name}}.html',
//                data: [{
//                    "matchedKey": "name",
//                    "name": "Canadiens",
//                    "img": "canadiens",
//                    "city": "Montreal",
//                    "id": "MTL",
//                    "conference": "Eastern",
//                    "division": "Northeast",
//                    "group": "teams"
//                }],
               
                callback: {
                    onClick: function (node, item, event) {
                        event.preventDefault();
                        console.log(item);
                        alert('Pessoa: '+item.name);
                    },
                    onCancel: function (node, item, event) {
                        console.log(item)
                    }
                    
                }                
            },
            templateValue: "{{emailU}}",
            display: ["email"],
            emptyTemplate: 'nemhum resultado para {{query}}',
            source: {
                teams: {
                    data: data1
                }
            },
            callback: {
                onSubmit: function (node, form, item, event) {
                    event.preventDefault();
					var resultado1 =JSON.stringify(item) ;
					document.getElementById("resultado1").value=resultado1;
                     var equipe = document.getElementById("msgEquipe1").innerHTML;
            if(equipe != ""){
                
            }
            else{
                form.submit();
            }       
                }
            },
            debug: false
        });
    </script>
             <script src="../js/lib/bootstrap-sweetalert/sweetalert.min.js"></script>
              <script>
		$(document).ready(function() {
			$('.swal-btn-basic').click(function(e){
				e.preventDefault();
				swal("Here's a message!");
			});

			$('.swal-btn-text').click(function(e){
				e.preventDefault();
				swal({
					title: "Here's a message!",
					text: "It's pretty, isn't it?"
				});
			});

			$('.swal-btn-success').click(function(e){
				e.preventDefault();
				swal({
					title: "Equipe criada com sucesso!",
					text: "1 pessoa foi adicionada!",
					type: "success",
					confirmButtonClass: "btn-success",
					confirmButtonText: "Fechar"
				});
			});
            
            $('.swal-btn-success2').click(function(e){
				e.preventDefault();
				swal({
					title: "Sucesso!",
					text: "Adicionado com sucesso!",
					type: "success",
					confirmButtonClass: "btn-success",
					confirmButtonText: "Fechar"
				});
			});   
            $('.swal-btn-success3').click(function(e){
				e.preventDefault();
				swal({
					title: "Sucesso!",
					text: "Equipe criada com sucesso!",
					type: "success",
					confirmButtonClass: "btn-success",
					confirmButtonText: "Fechar"
				});
			});

			$('.swal-btn-warning').click(function(e){
				e.preventDefault();
				swal({
							title: "Are you sure?",
							text: "Your will not be able to recover this imaginary file!",
							type: "warning",
							showCancelButton: true,
							cancelButtonClass: "btn-default",
							confirmButtonClass: "btn-warning",
							confirmButtonText: "Warning",
							closeOnConfirm: false
						},
						function(){
							swal({
								title: "Deleted!",
								text: "Your imaginary file has been deleted.",
								type: "success",
								confirmButtonClass: "btn-success"
							});
						});
			});

			$('.swal-btn-cancel').click(function(e){
				e.preventDefault();
				swal({
							title: "Are you sure?",
							text: "You will not be able to recover this imaginary file!",
							type: "warning",
							showCancelButton: true,
							confirmButtonClass: "btn-danger",
							confirmButtonText: "Yes, delete it!",
							cancelButtonText: "No, cancel plx!",
							closeOnConfirm: false,
							closeOnCancel: false
						},
						function(isConfirm) {
							if (isConfirm) {
								swal({
									title: "Deleted!",
									text: "Your imaginary file has been deleted.",
									type: "success",
									confirmButtonClass: "btn-success"
								});
							} else {
								swal({
									title: "Cancelled",
									text: "Your imaginary file is safe :)",
									type: "error",
									confirmButtonClass: "btn-danger"
								});
							}
						});
			});

			$('.swal-btn-custom-img').click(function(e){
				e.preventDefault();
				swal({
					title: "Sweet!",
					text: "Here's a custom image.",
					confirmButtonClass: "btn-success",
					imageUrl: 'img/smile.png'
				});
			});

			$('.swal-btn-info').click(function(e){
				e.preventDefault();
				swal({
					title: "Are you sure?",
					text: "Your will not be able to recover this imaginary file!",
					type: "info",
					showCancelButton: true,
					cancelButtonClass: "btn-default",
					confirmButtonText: "Info",
					confirmButtonClass: "btn-primary"
				});
			});

			$('.swal-btn-input').click(function(e){
				e.preventDefault();
				swal({
					title: "An input!",
					text: "Write something interesting:",
					type: "input",
					showCancelButton: true,
					closeOnConfirm: false,
					inputPlaceholder: "Write something"
				}, function (inputValue) {
					if (inputValue === false) return false;
					if (inputValue === "") {
						swal.showInputError("You need to write something!");
						return false
					}
					swal("Nice!", "You wrote: " + inputValue, "success");
				});
			});
		});
                             function verificarEquipe(equipe) {
            $.ajax
         ({
         type:'POST',
         url:'../../../controller/equipe.php',
         data:'ajaxEquipe='+equipe,
         success:function(html)
         {
         
         $('#msgEquipe').html(html);
         
         }
		  });
        }
                                           function verificarEquipe1(equipe) {
            $.ajax
         ({
         type:'POST',
         url:'../../../controller/equipe.php',
         data:'ajaxEquipe='+equipe,
         success:function(html)
         {
         
         $('#msgEquipe1').html(html);
         
         }
		  });
        }
        
                   function verificarEquipe3(equipe) {
            $.ajax
         ({
         type:'POST',
         url:'../../../controller/equipe.php',
         data:'ajaxEquipe='+equipe,
         success:function(html)
         {
         
         $('#msgEquipe3').html(html);
         
         }
		  });
        }
          
        function submitEditarEquipe(){
            var erro = document.getElementById("msgEquipe3").innerHTML;
            var form = document.getElementById("formE");
            if(erro ==""){
                form.submit();
            }
            else{
                
            }
        }
                  
        function editarEquipe(idEquipe,nomeEquipe,imgEquipe,p){
            var img = imgEquipe;
           
           
            document.getElementById("eNomeEquipe").value=nomeEquipe;
            document.getElementById("nomeE").innerHTML=nomeEquipe;
            document.getElementById("eIdEquipe").value=idEquipe;
            if(p==1){
                document.getElementById("eNomeEquipe").disabled=false; 
                document.getElementById("addPessoas").innerHTML='<a href="#" data-toggle="modal" data-target="#editarMembros"><i class="fa fa-user-plus"></i> Add pessoas</a>';
                document.getElementById("botaoEditarEquipe").innerHTML='<button type="button" class="btn btn-primary" onclick="submitEditarEquipe()">Salvar</button>';
                document.getElementById("edicaoG").style.display="block";
                document.getElementById("salvarEditarMembro").innerHTML='<button type="button" class="btn btn-primary">Salvar</button>';
                 if(img ==""){
                var imgFinal='<img src="../img/no-image.jpg" width="210px" height="210px"  style="cursor:pointer" onclick="mudarImagem()">';
                }
                else{
                    var imgFinal='<img src="../img/imagensEquipes/'+imgEquipe+'" width="210px" height="210px"  style="cursor:pointer" onclick="mudarImagem()">';
                }
            }
            else{
                document.getElementById("eNomeEquipe").disabled=true; 
                document.getElementById("addPessoas").innerHTML='';
                document.getElementById("botaoEditarEquipe").innerHTML='';
                 document.getElementById("edicaoG").style.display="none";
                document.getElementById("salvarEditarMembro").innerHTML='';
                 if(img ==""){
                var imgFinal='<img src="../img/no-image.jpg" width="210px" height="210px"  >';
                }
                else{
                    var imgFinal='<img src="../img/imagensEquipes/'+imgEquipe+'" width="210px" height="210px"  >';
                }
            }
             document.getElementById("eImgEquipe").innerHTML=imgFinal;
                  $.ajax
             ({
             type:'POST',
             url:'../../../controller/membro.php',
             data:'ajaxMembroAdm='+idEquipe,
             success:function(html)
             {

             $('#eMembrosAdm').html(html);

             }
              });
            
             $.ajax
             ({
             type:'POST',
             url:'../../../controller/membro.php',
             data:'ajaxMembro='+idEquipe,
             success:function(html)
             {

             $('#eMembros').html(html);

             }
              });
            
        }
    </script>
    <?php
        if(isset($_SESSION['cadEquipeEaddMembro']) && $_SESSION['cadEquipeEaddMembro']==true){
            unset($_SESSION["cadEquipeEaddMembro"]);  
            session_write_close();
            echo "<script>$(function () { $('#cadOk').trigger('click');});</script>";
        } 
        if(isset($_SESSION['addMembro']) && $_SESSION['addMembro']==true){
            unset($_SESSION["addMembro"]);  
            session_write_close();
            echo "<script>$(function () { $('#addOk').trigger('click');});</script>";
        } 
        if(isset($_SESSION['cadEquipe']) && $_SESSION['cadEquipe']==true){
            unset($_SESSION["cadEquipe"]);  
            session_write_close();
            echo "<script>$(function () { $('#cadEqOk').trigger('click');}); </script>";
        } 
    ?>
<script src="../js/app.js"></script>
</body>
</html>